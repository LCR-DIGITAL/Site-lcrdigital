<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

/* =========================
   Chargement du .env
========================= */
function loadEnv(string $path): void {
    if (!file_exists($path)) {
        return;
    }

    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#')) {
            continue;
        }

        [$key, $value] = array_map('trim', explode('=', $line, 2));
        $_ENV[$key] = trim($value, "\"'");
    }
}

loadEnv(__DIR__ . '/.env');

header('Content-Type: application/json; charset=UTF-8');

// Autoriser uniquement POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        "ok" => false,
        "message" => "Méthode non autorisée."
    ]);
    exit;
}

// Récupération des données
$first_name = trim($_POST['first_name'] ?? '');
$last_name  = trim($_POST['last_name'] ?? '');
$email      = trim($_POST['email'] ?? '');
$phone      = trim($_POST['phone'] ?? '');
$subject    = trim($_POST['subject'] ?? '');
$message    = trim($_POST['message'] ?? '');

// Validation
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

try {
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'error_log';

    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['SMTP_USER'];
    $mail->Password = $_ENV['SMTP_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = (int) $_ENV['SMTP_PORT'];

    $mail->setFrom($_ENV['SMTP_USER'], 'LCR DIGITAL');
    $mail->addAddress($_ENV['SMTP_TO_EMAIL']);

    $mail->Subject = 'Test';
    $mail->Body = 'Test SMTP';

    $mail->send();

    echo json_encode(["ok" => true]);

} catch (Exception $e) {
    echo json_encode([
        "ok" => false,
        "message" => $mail->ErrorInfo ?: $e->getMessage()
    ]);
}

