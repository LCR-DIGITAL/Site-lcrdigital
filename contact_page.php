<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Contactez votre agence web" . city_phrase(" à ") . " | LCR DIGITAL";
$page_description = "Un projet web ? Une question ? Contactez LCR DIGITAL, agence web" . city_phrase(" à ") . ", pour obtenir un devis ou échanger avec notre équipe.";
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* =========================
   CONFIG SMTP HOSTINGER
========================= */
$SMTP_HOST = $_ENV['SMTP_HOST'] ?? '';
$SMTP_PORT = $_ENV['SMTP_PORT'] ?? 465;
$SMTP_USER = $_ENV['SMTP_USER'] ?? '';
$SMTP_PASS = $_ENV['SMTP_PASSWORD'] ?? '';

$MAIL_FROM = $_ENV['SMTP_FROM_EMAIL'] ?? $SMTP_USER;
$MAIL_NAME = $_ENV['SMTP_FROM_NAME'] ?? 'LCR DIGITAL';
$MAIL_TO   = $_ENV['SMTP_TO_EMAIL'] ?? $SMTP_USER;

/* =========================
   GOOGLE RECAPTCHA
========================= */
$RECAPTCHA_SITE_KEY   = $_ENV['RECAPTCHA_SITE_KEY'] ?? '';
$RECAPTCHA_SECRET_KEY = $_ENV['RECAPTCHA_SECRET_KEY'] ?? '';

/* =========================
   FORM STATE
========================= */
$form_success = false;
$form_error = '';

$first_name = $last_name = $email = $phone = $subject = $message = '';

/* =========================
   VERIFY RECAPTCHA
========================= */
function verify_recaptcha_v3(string $secret, string $token): bool
{
    // Skip reCAPTCHA on localhost
    $host = $_SERVER['HTTP_HOST'] ?? '';
    if (strpos($host, 'localhost') !== false || $host === '127.0.0.1') {
        return true;
    }

    if ($secret === '' || $token === '') {
        return false;
    }

    $response = @file_get_contents(
        'https://www.google.com/recaptcha/api/siteverify?' . http_build_query([
            'secret'   => $secret,
            'response' => $token,
            'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
        ])
    );

    if ($response === false) {
        return false;
    }

    $json = json_decode($response, true);

    return !empty($json['success'])
        && ($json['score'] ?? 0) >= 0.5
        && ($json['action'] ?? '') === 'contact';
}


/* =========================
   TRAITEMENT FORMULAIRE
========================= */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name  = trim($_POST['last_name'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $phone      = trim($_POST['phone'] ?? '');
    $subject    = trim($_POST['subject'] ?? '');
    $message    = trim($_POST['message'] ?? '');
    $recaptcha  = $_POST['g-recaptcha-response'] ?? '';

    if (!$first_name || !$last_name || !$email || !$subject || !$message) {
        $form_error = "Merci de remplir tous les champs obligatoires.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = "Adresse e-mail invalide.";
    } elseif ($RECAPTCHA_SECRET_KEY && !verify_recaptcha_v3($RECAPTCHA_SECRET_KEY, $recaptcha)) {
        $form_error = "La vérification de sécurité a échoué.";

    } else {
        try {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host       = $SMTP_HOST;
            $mail->SMTPAuth   = true;
            $mail->Username   = $SMTP_USER;
            $mail->Password   = $SMTP_PASS;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = (int) $SMTP_PORT;

            $mail->CharSet = 'UTF-8';

            $mail->setFrom($MAIL_FROM, $MAIL_NAME);
            $mail->addAddress($MAIL_TO);
            $mail->addReplyTo($email, "$first_name $last_name");

            $mail->isHTML(false);
            $mail->Subject = $subject;

            $mail->Body = "Nouveau message depuis le site LCR DIGITAL\n\n"
                        . "Nom : $first_name $last_name\n"
                        . "Email : $email\n"
                        . "Téléphone : $phone\n\n"
                        . "Message :\n$message";

            $mail->send();

            $form_success = true;
            $first_name = $last_name = $email = $phone = $subject = $message = '';

        } catch (Exception $e) {
            $form_error = "Une erreur est survenue lors de l’envoi. Merci de réessayer plus tard.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
<?php if ($RECAPTCHA_SITE_KEY): ?>
<script src="https://www.google.com/recaptcha/api.js?render=<?= htmlspecialchars($RECAPTCHA_SITE_KEY) ?>"></script>
<?php endif; ?>

</head>

<body data-city="<?= e($city) ?>" data-city-slug="<?= e($city_slug) ?>">
    
    <div id="site-header">
        <?php require __DIR__ . "/assets/components/header.php"; ?>
    </div>

    
    <div id="site-sidebar">
        <?php require __DIR__ . "/assets/components/sidebar.php"; ?>
    </div>

    
    <main>
        
        <div class="section banner-inner">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-2">
                    <h2>Contact</h2>
                    <h1 class="banner-h1">Contactez LCR DIGITAL – Votre agence web<?= city_phrase(' à ') ?></h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Contact</a>
                    </nav>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">
                    <div class="col">
                        <div class="contact-title">
                            <h6 class="accent-color">Contact</h6>
                            <h3>Parlons de votre projet web</h3>
                            <p>Expliquez-nous vos objectifs, on vous propose une solution claire et adaptée.</p>
                            <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                <div class="col">
                                    <div class="contact-details-card animate-box animated animate__animated" data-animate="animate__fadeIn">
                                        <div class="card contact-details-icon">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </div>
                                        <div class="d-flex flex-column gspace-1">
                                            <h5>Téléphone</h5>
                                            <p class="mb-0">06 66 15 80 58</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="contact-details-card animate-box animated slow animate__animated" data-animate="animate__fadeIn"">
                                        <div class="card contact-details-icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="d-flex flex-column gspace-1">
                                            <h5>Email</h5>
                                            <p class="mb-0">contact@lcr-digital.fr</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="contact-details-card animate-box animated animate__animated" data-animate="animate__fadeIn">
                                        <div class="card contact-details-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="d-flex flex-column gspace-1">
                                            <h5>Localisation</h5>
                                            <p class="mb-0"><?= city_or_default('Rouen') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="contact-details-card animate-box animated slow animate__animated" data-animate="animate__fadeIn">
                                        <div class="card contact-details-icon">
                                            <i class="fa-solid fa-clock"></i>
                                        </div>
                                        <div class="d-flex flex-column gspace-1">
                                            <h5>Horaires</h5>
                                            <p class="mb-0">9h - 18h, lundi à vendredi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-form-layout">
                            <?php if ($form_success): ?>
                                <div class="alert alert-success mb-3">
                                    Votre message a bien été envoyé. Nous vous répondrons rapidement.
                                </div>
                            <?php elseif ($form_error): ?>
                                <div class="alert alert-danger mb-3">
                                    <?= htmlspecialchars($form_error) ?>
                                </div>
                            <?php endif; ?>
                            <form method="post" class="form">
                                <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                    <div class="col">
                                        <div class="d-flex flex-column gspace-1">
                                            <label for="first_name">Prénom</label>
                                            <input type="text" name="first_name" id="first_name" placeholder="Votre prénom" value="<?= htmlspecialchars($first_name) ?>" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex flex-column gspace-1">
                                            <label for="last_name">Nom</label>
                                            <input type="text" name="last_name" id="last_name" placeholder="Votre nom" value="<?= htmlspecialchars($last_name) ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gspace-1">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Votre email" value="<?= htmlspecialchars($email) ?>" required>
                                </div>
                                <div class="d-flex flex-column gspace-1">
                                    <label for="phone">Téléphone</label>
                                    <input type="tel" name="phone" id="phone" placeholder="Votre téléphone" value="<?= htmlspecialchars($phone) ?>">
                                </div>
                                <div class="d-flex flex-column gspace-1">
                                    <label for="subject">Sujet</label>
                                    <select name="subject" id="subject" required>
                                        <option value="" disabled <?= $subject === '' ? 'selected' : '' ?>>Choisir un sujet</option>
                                        <option value="Contact" <?= $subject === 'Contact' ? 'selected' : '' ?>>Contact</option>
                                        <option value="Devis" <?= $subject === 'Devis' ? 'selected' : '' ?>>Devis</option>
                                        <option value="Autre" <?= $subject === 'Autre' ? 'selected' : '' ?>>Autre</option>
                                    </select>
                                </div>
                                <div class="d-flex flex-column gspace-1">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" rows="4" placeholder="Décrivez votre besoin" required><?= htmlspecialchars($message) ?></textarea>
                                </div>
                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                <button type="submit" class="btn btn-accent">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container">
                <iframe loading="lazy" class="maps"
                        src="https://maps.google.com/maps?q=Rouen&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near"
                        title="Rouen" aria-label="Rouen">
                </iframe>
            </div>
        </div>

    </main>

    
    <div id="site-footer">
        <?php require __DIR__ . "/assets/components/footer.php"; ?>
    </div>

    <script src="./assets/js/vendor/jquery.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="./assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="./assets/js/vendor/fslightbox.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/submit-form.js"></script>
    <script src="./assets/js/swiper-script.js"></script>
    <script src="./assets/js/video_embedded.js"></script>
<?php if ($RECAPTCHA_SITE_KEY): ?>
<script>
grecaptcha.ready(function () {
    grecaptcha.execute('<?= addslashes($RECAPTCHA_SITE_KEY) ?>', {
        action: 'contact'
    }).then(function (token) {
        document.getElementById('g-recaptcha-response').value = token;
    });
});
</script>
<?php endif; ?>

</body>
</html>
