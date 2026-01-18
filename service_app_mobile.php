<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Développement d’application mobile" . city_phrase(" à ") . " – iOS & Android | LCR DIGITAL";
$page_description = "LCR DIGITAL conçoit des applications mobiles iOS et Android sur mesure" . city_phrase(" à ") . ". Design, performance et accompagnement de A à Z.";
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
                    <h2>Application mobile</h2>
                    <h1 class="banner-h1">Création d’application mobile<?= city_phrase(' à ') ?> – Votre projet sur iOS & Android</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="<?= e(route_with_city("services-web", $city_slug)) ?>">Services</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Application mobile</a>
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
                                    Une application mobile sur mesure pour créer un canal direct avec vos clients.
                                </p>
                                <p>
                                    Des apps utiles, simples et performantes qui font revenir vos utilisateurs.
                                </p>
                            </div>
                            <h4>Bénéfices</h4>
                            <div class="row row-cols-xl-2 row-cols-1 g-3">
                                <div class="col">
                                    <div class="d-flex flex-column gspace-2">
                                        <div>
                                            <p>
                                                Un outil puissant pour fidéliser et augmenter l’engagement.
                                            </p>
                                            <p>
                                                Pensé pour une expérience mobile fluide et efficace.
                                            </p>
                                        </div>
                                        <ul class="check-list">
                                            <li>Fidéliser vos clients</li>
                                            <li>Notifications push ciblées</li>
                                            <li>Expérience personnalisée</li>
                                            <li>Disponible iOS et Android</li>
                                            <li>Actions et achats simplifiés</li>
                                            <li>Image de marque innovante</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeIn">
                                        <img src="./assets/images/mobile.jpg" alt="<?= img_alt('Développement application mobile iOS Android') ?>" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <h4>Pourquoi créer une application mobile ?</h4>
                            <div class="row row-cols-xl-2 row-cols-1 g-3">
                                <div class="col">
                                    <div class="d-flex flex-column gspace-2">
                                        <p>
                                            Une application mobile<?= city_phrase(' à ') ?> vous permet de créer un lien direct et permanent avec vos clients. Présente sur leur smartphone, elle offre un accès instantané à vos services, vos produits ou vos contenus. Les notifications push vous permettent de communiquer en temps réel : promotions, nouveautés, rappels.
                                        </p>
                                        <p>
                                            Contrairement à un site web, l'application offre une expérience native optimisée pour le mobile : navigation fluide, temps de chargement réduit, fonctionnalités avancées (géolocalisation, appareil photo, paiement mobile). Elle renforce votre image de marque et vous démarque de la concurrence.
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex flex-column gspace-2">
                                        <p>
                                            Chez LCR DIGITAL, nous développons des applications iOS et Android sur mesure. Nous utilisons des technologies modernes (React Native, Flutter) qui permettent de créer une seule base de code pour les deux plateformes, réduisant ainsi les coûts et les délais de développement.
                                        </p>
                                        <p>
                                            De la conception UX/UI à la publication sur l'App Store et Google Play, nous vous accompagnons à chaque étape. Nous assurons également la maintenance, les mises à jour et l'évolution de votre application selon vos besoins.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <h4>Pour quels usages ?</h4>
                            <div>
                                <p>
                                    L'application mobile s'adresse aux entreprises<?= city_phrase(' de ') ?> qui souhaitent fidéliser leurs clients, proposer un service de réservation ou de commande, gérer un programme de fidélité ou simplement offrir une expérience utilisateur premium. Elle convient aux commerces, restaurants, prestataires de services, associations ou toute activité nécessitant un contact régulier avec sa clientèle.
                                </p>
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
                                <img src="./assets/images/trophy-digital-marketing-marketing-sports-and-competition-award@4x1.webp" alt="<?= img_alt('Analytique du site') ?>" class="img-fluid">
                            </div>
                            <div class="d-flex flex-column gspace-2">
                                <h5>Analytique du site</h5>
                                <p>Suivi des performances et des indicateurs clés en temps réel.</p>
                            </div>
                        </div>
                        <div class="card card-chooseus">
                            <div class="chooseus-icon">
                                <img src="./assets/images/keyword-digital-marketing-seo-magnifier-research-marketing@4x1.webp" alt="<?= img_alt('Autonomie éditoriale') ?>" class="img-fluid">
                            </div>
                            <div class="d-flex flex-column gspace-2">
                                <h5>Autonomie éditoriale</h5>
                                <p>Gestion des réalisations, articles, actualités en toute autonomie.</p>
                            </div>
                        </div>
                        <div class="card card-chooseus">
                            <div class="chooseus-icon">
                                <img src="./assets/images/bar-chart-line-graph-setting-monitor-analysis-statistics@4x1.webp" alt="<?= img_alt('Pilotage commercial') ?>" class="img-fluid">
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
                            <img src="./assets/images/dashboard.png" alt="<?= img_alt('Dashboard application client LCR Digital') ?>" class="img-fluid">
                        </div>

                        <div class="app-availability">
                            <span>Disponible sur :</span>
                            <img src="./assets/images/appstore.png" alt="App Store">
                            <img src="./assets/images/playstore.avif" alt="Google Play">
                            <img src="./assets/images/web.png" alt="Web">
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
    <script src="./assets/js/video_embedded.js"></script>
</body>
</html>
