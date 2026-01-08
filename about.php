<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Agence digitale" . city_phrase(" à ") . " – Notre équipe & notre mission | LCR DIGITAL";
$page_description = "En tant qu'agence digitale basée" . city_phrase(" à ") . ", LCR DIGITAL accompagne les entreprises normandes dans la réussite de leurs projets web et mobiles sur mesure.";
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
                    <h2>À propos</h2>
                    <h1 class="banner-h1">Agence digitale de proximité<?= city_phrase(' à ') ?></h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">À propos</a>
                    </nav>
                </div>
            </div>
        </div>


        
        <div class="section about-banner">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">
                    <div class="col">
                        <div class="d-flex flex-column gspace-2 position-relative">
                            <div class="card card-about">
                                <span class="wrapper">
                                    <span class="number">5</span>
                                </span>
                                <p class="title">ans d'expérience</p>
                            </div>
                            <div class="image-container about-img">
                                <img src="./assets/images/about.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="about-detail animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <h6 class="accent-color">À propos</h6>
                            <h3>Une agence digitale locale, orientée performance</h3>
                            <p>Nous aidons les entreprises à gagner en visibilité et à convertir en ligne grâce à des sites rapides, clairs et optimisés SEO. Notre approche mêle stratégie, design et technique pour un résultat concret.</p>
                            <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                <div class="col">
                                    <ul class="check-list">
                                        <li>Stratégie et positionnement</li>
                                        <li>Design UX/UI orienté conversion</li>
                                        <li>SEO local et technique</li>
                                        <li>Contenu optimisé</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="check-list">
                                        <li>Sites vitrine & e-commerce</li>
                                        <li>Développement sur mesure</li>
                                        <li>Maintenance et évolution</li>
                                        <li>Suivi des performances</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="<?= e(route_with_city("agence-digitale", $city_slug)) ?>" class="btn btn-accent">En savoir plus</a>
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

        
        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Parlons de votre projet digital</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Nous vous aidons à clarifier vos besoins, structurer vos pages et définir les actions qui rapportent.</p>
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
                            <h3>Des clients satisfaits, des résultats concrets</h3>
                            <p>Notre priorité : un site qui vous aide à gagner en visibilité et à convertir.</p>
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
