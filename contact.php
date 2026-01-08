<?php
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        "ok" => false,
        "message" => "Méthode non autorisée."
    ]);
    exit;
}

if (!function_exists('mail')) {
    http_response_code(500);
    echo json_encode([
        "ok" => false,
        "message" => "Le service d’envoi d’e-mails n’est pas disponible."
    ]);
    exit;
}

function clean_header_value(string $value): string {
    return trim(str_replace(["\r", "\n"], '', $value));
}

$first_name = trim($_POST['first_name'] ?? '');
$last_name  = trim($_POST['last_name'] ?? '');
$email      = trim($_POST['email'] ?? '');
$phone      = trim($_POST['phone'] ?? '');
$subject    = trim($_POST['subject'] ?? '');
$message    = trim($_POST['message'] ?? '');

if (
    $first_name === '' ||
    $last_name === '' ||
    $email === '' ||
    $subject === '' ||
    $message === ''
) {
    http_response_code(422);
    echo json_encode([
        "ok" => false,
        "message" => "Veuillez remplir tous les champs obligatoires."
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode([
        "ok" => false,
        "message" => "L’adresse e-mail n’est pas valide."
    ]);
    exit;
}

$to   = 'contact@lcr-digital.fr';
$from = 'contact@lcr-digital.fr';

$clean_subject = clean_header_value($subject);
$clean_email   = clean_header_value($email);

$safe_name    = htmlspecialchars("$first_name $last_name", ENT_QUOTES, 'UTF-8');
$safe_email   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_phone   = htmlspecialchars($phone !== '' ? $phone : 'Non renseigné', ENT_QUOTES, 'UTF-8');
$safe_subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$safe_message = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$html_body = "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>Nouveau message – LCR DIGITAL</title>
</head>
<body style='margin:0;padding:0;font-family:Arial,Helvetica,sans-serif;background:#f6f6f8;'>
    <div style='max-width:640px;margin:24px auto;background:#ffffff;border-radius:12px;padding:24px;'>
        <h2 style='margin-top:0;'>Nouveau message via le site</h2>
        <p><strong>Nom :</strong> {$safe_name}</p>
        <p><strong>Email :</strong> {$safe_email}</p>
        <p><strong>Téléphone :</strong> {$safe_phone}</p>
        <p><strong>Sujet :</strong> {$safe_subject}</p>
        <hr style='margin:20px 0;'>
        <p>{$safe_message}</p>
    </div>
</body>
</html>
";

$headers = implode("\r\n", [
    "From: LCR DIGITAL <{$from}>",
    "Reply-To: {$clean_email}",
    "MIME-Version: 1.0",
    "Content-Type: text/html; charset=UTF-8"
]);

if (!mail($to, $clean_subject, $html_body, $headers)) {
    http_response_code(500);
    echo json_encode([
        "ok" => false,
        "message" => "Une erreur est survenue lors de l’envoi du message. Veuillez réessayer plus tard."
    ]);
    exit;
}

echo json_encode([
    "ok" => true,
    "message" => "Votre message a bien été envoyé. Nous vous répondrons rapidement."
]);
