<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$page_title_value = $page_title ?? "LCR DIGITAL";
$page_description_value = $page_description ?? "Agence web LCR DIGITAL.";
$page_title_safe = function_exists("e")
    ? e($page_title_value)
    : htmlspecialchars((string) $page_title_value, ENT_QUOTES, "UTF-8");
$page_description_safe = function_exists("e")
    ? e($page_description_value)
    : htmlspecialchars((string) $page_description_value, ENT_QUOTES, "UTF-8");
?>
<title><?= $page_title_safe ?></title>
<meta name="description" content="<?= $page_description_safe ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://lcr-digital.fr<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:title" content="<?= $page_title_safe ?>">
<meta property="og:description" content="<?= $page_description_safe ?>">
<meta property="og:image" content="https://lcr-digital.fr/assets/images/lcr-digital-logo.png">
<meta property="og:url" content="https://lcr-digital.fr<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta property="og:site_name" content="LCR DIGITAL">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $page_title_safe ?>">
<meta name="twitter:description" content="<?= $page_description_safe ?>">
<meta name="twitter:image" content="https://lcr-digital.fr/assets/images/lcr-digital-logo.png">
<?php require __DIR__ . "/schema_localbusiness.php"; ?>
<link rel="stylesheet" href="./assets/webfonts/font-family-inter.css">
<link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/vendor/fontawesome.css">
<link rel="stylesheet" href="./assets/css/vendor/brands.css">
<link rel="stylesheet" href="./assets/css/vendor/regular.css">
<link rel="stylesheet" href="./assets/css/vendor/solid.css">
<link rel="stylesheet" href="./assets/css/vendor/flatpickr.min.css">
<link rel="stylesheet" href="./assets/css/vendor/swiper-bundle.min.css">
<link rel="stylesheet" href="./assets/css/vendor/animate.min.css">
<link rel="stylesheet" href="./assets/css/main.css">
<link rel="stylesheet" href="./assets/css/responsive.css">
<link rel="shortcut icon" href="./assets/images/lcr-digital-logo.png" type="image/x-icon">
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QKXJJHS8SZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QKXJJHS8SZ');
</script>
