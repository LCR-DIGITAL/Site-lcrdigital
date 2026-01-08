<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Services digitaux" . city_phrase(" à ") . " – Création de sites & applis | LCR DIGITAL";
$page_description = "Découvrez tous les services de LCR DIGITAL : création de site web (vitrine, e-commerce, catalogue, one page), appli mobile et développement personnalisé" . city_phrase(" à ") . ".";
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
                    <h2>Services</h2>
                    <h1 class="banner-h1">Nos services de création digitale<?= city_phrase(' à ') ?></h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Services</a>
                    </nav>
                </div>
            </div>
        </div>


        
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2">
                        <h6 class="accent-color">Services</h6>
                        <h3>Des services web pensés pour la performance</h3>
                        <p>Nous construisons des sites efficaces, visibles et faciles à faire évoluer, avec un vrai focus conversion.</p>
                    </div>
                    <div class="service-content-wrapper">
                        <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                            <div class="card card-service">
                                <div>
                                    <img src="./assets/images/S4.webp" alt="" class="img-fluid">
                                </div>
                                <h4>One Page</h4>
                                <p>Une landing page claire et rapide pour capter des leads et valider votre offre.</p>
                                <div class="service-cta">
                                    <a href="<?= e(route_with_city("creation-site-one-page", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                            <div class="card card-service highlight-service">
                                <div>
                                    <img src="./assets/images/S5.webp" alt="" class="img-fluid">
                                </div>
                                <h4>Site vitrine</h4>
                                <p>Présentez votre activité avec un site professionnel, rassurant et optimisé pour le local.</p>
                                <div class="service-cta">
                                    <a href="<?= e(route_with_city("creation-site-vitrine", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                            <div class="card card-service">
                                <div>
                                    <img src="./assets/images/S1.webp" alt="" class="img-fluid">
                                </div>
                                <h4>Site catalogue</h4>
                                <p>Exposez vos produits et services avec des fiches claires et une navigation fluide.</p>
                                <div class="service-cta">
                                    <a href="<?= e(route_with_city("creation-site-catalogue", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                            <div class="card card-service">
                                <div>
                                    <img src="./assets/images/S3.webp" alt="" class="img-fluid">
                                </div>
                                <h4>Site e-commerce</h4>
                                <p>Boutique en ligne prête à vendre : tunnel d’achat optimisé et paiements sécurisés.</p>
                                <div class="service-cta">
                                    <a href="<?= e(route_with_city("creation-site-ecommerce", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                            <div class="card card-service">
                                <div>
                                    <img src="./assets/images/S6.webp" alt="" class="img-fluid">
                                </div>
                                <h4>Application mobile</h4>
                                <p>Applications iOS/Android pour fidéliser et simplifier l’expérience client.</p>
                                <div class="service-cta">
                                    <a href="<?= e(route_with_city("creation-application-mobile", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                            <div class="card card-service">
                                <div>
                                    <img src="./assets/images/S4.webp" alt="" class="img-fluid">
                                </div>
                                <h4>Développement personnalisé</h4>
                                <p>Fonctionnalités sur mesure, intégrations métier et automatisations.</p>
                                <div class="service-cta">
                                    <a href="<?= e(route_with_city("developpement-web-sur-mesure", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                    <i class="fa-solid fa-arrow-right"></i>
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

        
        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Parlons de votre projet digital</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Nous cadrons vos besoins et construisons un site qui apporte des résultats mesurables.</p>
                    <div>
                    <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent">Nous contacter</a>
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
                            <h3>Ils nous font confiance</h3>
                            <p>Des sites utiles, un accompagnement simple, et des résultats concrets.</p>
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
