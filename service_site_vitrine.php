<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Création site vitrine" . city_phrase(" à ") . " – Présentez votre entreprise en ligne | LCR DIGITAL";
$page_description = "LCR DIGITAL vous accompagne dans la création de site vitrine professionnel" . city_phrase(" à ") . ". Mettez en valeur votre entreprise et vos services avec un site performant.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
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
                    <h2>Site vitrine</h2>
                    <h1 class="banner-h1">Création de site vitrine<?= city_phrase(' à ') ?> – Une présence web professionnelle</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="<?= e(route_with_city("services-web", $city_slug)) ?>">Services</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Site vitrine</a>
                    </nav>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                    <div class="col col-md-8">
                        <div class="service-details-layout">
                            <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Vue d’ensemble</h3>
                                                        <div>
                                <p>
                                    Un site vitrine pour présenter votre activité et rassurer vos prospects dès la première visite.
                                </p>
                                <p>
                                    Nous créons un site rapide, élégant et optimisé pour attirer des clients locaux.
                                </p>
                            </div>
                            <h4>Bénéfices</h4>
                            <div class="row row-cols-xl-2 row-cols-1 g-3">
                                <div class="col">
                                    <div class="d-flex flex-column gspace-2">
                                        <div>
                                            <p>
                                                Une vitrine professionnelle qui donne envie de vous contacter.
                                            </p>
                                            <p>
                                                Optimisée pour vous rendre visible localement et générer des demandes.
                                            </p>
                                        </div>
                                        <ul class="check-list">
                                            <li>Présenter vos services clairement</li>
                                            <li>Convaincre avec preuves et avis</li>
                                            <li>Générer des demandes de devis</li>
                                            <li>Gagner en visibilité locale</li>
                                            <li>Renforcer votre crédibilité</li>
                                            <li>Site parfaitement mobile</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeIn">
                                        <img src="./assets/images/vitrine.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="d-flex flex-column gspace-2">
                                                        <div class="card-other-service animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                <h4>Autres services</h4>
                                <a href="<?= e(route_with_city("creation-site-one-page", $city_slug)) ?>" class="btn-other-service">
                                    <i class="fa-solid fa-solid fa-arrow-right"></i>
                                    <span>One Page</span>
                                </a>
                                <a href="<?= e(route_with_city("creation-site-vitrine", $city_slug)) ?>" class="btn-other-service">
                                    <i class="fa-solid fa-solid fa-arrow-right"></i>
                                    <span>Site vitrine</span>
                                </a>
                                <a href="<?= e(route_with_city("creation-site-catalogue", $city_slug)) ?>" class="btn-other-service">
                                    <i class="fa-solid fa-solid fa-arrow-right"></i>
                                    <span>Site catalogue</span>
                                </a>
                                <a href="<?= e(route_with_city("creation-site-ecommerce", $city_slug)) ?>" class="btn-other-service">
                                    <i class="fa-solid fa-solid fa-arrow-right"></i>
                                    <span>Site e-commerce</span>
                                </a>
                                <a href="<?= e(route_with_city("creation-application-mobile", $city_slug)) ?>" class="btn-other-service">
                                    <i class="fa-solid fa-solid fa-arrow-right"></i>
                                    <span>Application mobile</span>
                                </a>
                                <a href="<?= e(route_with_city("developpement-web-sur-mesure", $city_slug)) ?>" class="btn-other-service">
                                    <i class="fa-solid fa-solid fa-arrow-right"></i>
                                    <span>Développement personnalisé</span>
                                </a>
                            </div>
                            <div class="cta-banner animate-box animated slow animate__animated" data-animate="animate__fadeInRight">
                                <h4>Prêt à accélérer votre visibilité ?</h4>
                                <p>Nous vous aidons à clarifier vos objectifs et lancer un plan d’action efficace.</p>
                                <div>
                                    <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent">Nous contacter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        
        <div class="section whychooseus-banner">
            <div class="hero-container">
                <div class="whychooseus-wrapper">
                    <div class="chooseus-details animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                        <h6 class="accent-color">Valeur</h6>
                        <h3>Une application dédiée à nos clients</h3>
                        <p>Nos clients disposent d’une application mobile pour piloter leur site en autonomie : réalisations, contenus et données clés, où qu’ils soient.</p>
                        <div class="card card-chooseus highlight">
                            <div class="chooseus-icon">
                                <img src="./assets/images/trophy-digital-marketing-marketing-sports-and-competition-award@4x1.webp" alt="" class="img-fluid">
                            </div>
                            <div class="d-flex flex-column gspace-2">
                                <h5>Analytique du site</h5>
                                <p>Suivi des performances et des indicateurs clés en temps réel.</p>
                            </div>
                        </div>
                        <div class="card card-chooseus">
                            <div class="chooseus-icon">
                                <img src="./assets/images/keyword-digital-marketing-seo-magnifier-research-marketing@4x1.webp" alt="" class="img-fluid">
                            </div>
                            <div class="d-flex flex-column gspace-2">
                                <h5>Autonomie éditoriale</h5>
                                <p>Gestion des réalisations, articles, actualités en toute autonomie.</p>
                            </div>
                        </div>
                        <div class="card card-chooseus">
                            <div class="chooseus-icon">
                                <img src="./assets/images/bar-chart-line-graph-setting-monitor-analysis-statistics@4x1.webp" alt="" class="img-fluid">
                            </div>
                            <div class="d-flex flex-column gspace-2">
                                <h5>Pilotage commercial</h5>
                                <p>Suivi des ventes et du chiffre d’affaires depuis l’application.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chooseus-image-layout animate-box animated animate__animated" data-animate="animate__fadeInRight">
                        <div class="chooseus-image-header">
                            <i class="fa-solid fa-circle"></i>
                        </div>
                        <div class="image-container chooseus-image">
                            <img src="./assets/images/dashboard.png" alt="" class="img-fluid">
                        </div>
                        <div class="chooseus-image-footer">
                            <div class="icon-wrapper">
                                <i class="fa-regular fa-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">
                    <div class="col">
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <h6 class="accent-color">Témoignages</h6>
                            <h3>Des résultats visibles</h3>
                            <p>Des actions simples et un impact réel sur la visibilité.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="overflow-hidden animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <div class="swiper swiperTestimonial">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card card-testimonial">
                                            <div>
                                                <div class="testimonial-image">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                            </div>
                                            <p class="testimonial-content">
                                                Grâce au site vitrine, j'ai gagné en visibilité.
                                            </p>
                                            <span class="testimonial-name">Quentin</span>
                                            <span class="testimonial-title">Dirigeant</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-testimonial">
                                            <div>
                                                <div class="testimonial-image">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                            </div>
                                            <p class="testimonial-content">
                                                L'application personnalisée m'a permis de gérer mon stock.
                                            </p>
                                            <span class="testimonial-name">Laly</span>
                                            <span class="testimonial-title">Commerçante</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="./assets/js/swiper-script.js"></script>
    <script src="./assets/js/submit-form.js"></script>
    <script src="./assets/js/video_embedded.js"></script>
</body>
</html>
