<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Agence web" . city_phrase(" à ") . " – Création de site internet & applications | LCR DIGITAL";
$page_description = "LCR DIGITAL, votre agence web" . city_phrase(" à ") . ", spécialisée en création de sites internet (vitrine, e-commerce, catalogue, one page) et applications mobiles sur mesure.";
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
        
        <div class="section banner-home">
            <div class="banner-video-container" id="videoContainer"></div>
            <div class="hero-container">
                <div class="banner-content">
                    <div class="banner-hero-grid">
                        <div class="banner-hero-main">
                            <div class="banner-sub-heading">
                                <h6>AGENCE DIGITALE</h6>
                            </div>
                            <div class="brand-mark">
                                <img src="./assets/images/lcr-digital-logo.png" alt="LCR DIGITAL" class="construction-logo img-fluid">
                                <span>LCR DIGITAL</span>
                            </div>
                            <h1 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                Des sites web
                                <span class="h1-wrapper">qui convertissent</span>
                            </h1>
                            <p>Nous concevons des expériences web rapides, lisibles et SEO-ready pour générer plus de contacts qualifiés.</p>
                            <div class="hero-cta">
                                <a href="<?= e(route_with_city("agence-digitale", $city_slug)) ?>" class="btn btn-accent">Nos services</a>
                                <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent-outline">Demander un devis</a>
                            </div>
                            <div class="hero-highlights">
                                <span class="hero-highlight">SEO local &amp; technique</span>
                                <span class="hero-highlight">UX orientee conversion</span>
                                <span class="hero-highlight">Performance mesurable</span>
                            </div>
                        </div>
                        <div class="banner-hero-side">
                            <div class="hero-card">
                                <h4>Inclus dans nos offres</h4>
                                <ul class="hero-list">
                                    <li>Application mobile client + modules dedies</li>
                                    <li>SEO local &amp; technique pour une vraie visibilite</li>
                                    <li>Performances, vitesse et suivi des conversions</li>
                                </ul>
                                <a href="<?= e(route_with_city("agence-digitale", $city_slug)) ?>" class="hero-link">Voir tous nos services</a>
                            </div>
                        </div>
                    </div>
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
                            <h3>Votre partenaire pour la visibilité digitale et la conversion</h3>
                            <p>LCR DIGITAL accompagne les entreprises de Normandie avec des sites rapides, esthétiques et pensés pour transformer. Nous combinons stratégie, design et SEO pour générer des contacts et des ventes en ligne.</p>
                            <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                <div class="col">
                                    <ul class="check-list">
                                        <li>Audit et stratégie digitale</li>
                                        <li>UX/UI orientée conversion</li>
                                        <li>SEO local et technique</li>
                                        <li>Suivi des performances</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="check-list">
                                        <li>Sites vitrine et e-commerce</li>
                                        <li>Contenus optimisés SEO</li>
                                        <li>Maintenance et évolutivité</li>
                                        <li>Accompagnement humain</li>
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


        
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2">
                        <h6 class="accent-color">Services</h6>
                        <h3>Des solutions web qui génèrent des résultats</h3>
                        <p>De la landing page au e-commerce complet, nous construisons des sites adaptés à vos objectifs, optimisés pour le SEO et la conversion.</p>
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
                                <h4>Site E-commerce</h4>
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
                                <h4>Application Mobile</h4>
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
                                <p>Fonctionnalités sur mesure, intégrations métier et automatisations adaptées.</p>
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
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Un site performant commence par une bonne stratégie. Nous vous aidons à cadrer le message, la structure et les priorités pour générer plus de contacts et de ventes.</p>
                    <div>
                        <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>

        
       <div class="section portfolio-banner">
    <div class="hero-container">
        <div class="d-flex flex-column gspace-4 position-relative z-2">
            <div class="d-flex flex-column gspace-2 align-items-center text-center">
                <h6 class="accent-color">Réalisations</h6>
                <h3>Des projets qui transforment</h3>
                <p>
                    Une sélection de réalisations et d’accompagnements pensés pour la performance et la visibilité.
                </p>
            </div>
            <div class="row row-cols-xl-2 row-cols-md-2 row-cols-1 
                        grid-spacer-3 grid-spacer-xl-5 justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-10">

                    <div class="portfolio-layout animate-box animated fast animate__animated"
                         data-animate="animate__fadeInUp">

                        <div class="portfolio-header">
                            <div class="portfolio-image-wrapper">
                                <div class="image-container portfolio-image">
                                    <img src="./assets/images/lapouge-paysage.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <h4 class="number">01</h4>
                        </div>

                        <div class="portfolio-content">
                            <h5>Site vitrine pour un paysagiste</h5>

                            <div class="d-flex flex-row gspace-4">
                                <div class="portfolio-meta">
                                    <i class="fa-solid fa-users"></i>
                                    <div class="d-grid">
                                        <span class="title">Client</span>
                                        <p>Lapouge Paysage</p>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <div class="d-grid">
                                        <span class="title">Date</span>
                                        <p>Janvier 2026</p>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-description">
                                <p>
                                    Site vitrine permettant à l’entreprise Lapouge Paysage de présenter ses services.
                                </p>
                                <div class="portfolio-btn-wrapper">
                                    <div class="portfolio-btn">
                                        <a href="https://lapougepaysage.fr" target="_blank" class="button">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
              <div class="col-xl-5 col-lg-6 col-md-10">

                    <div class="portfolio-layout animate-box animated animate__animated"
                         data-animate="animate__fadeInUp">

                        <div class="portfolio-header">
                            <div class="portfolio-image-wrapper">
                                <div class="image-container portfolio-image">
                                    <img src="./assets/images/lcr-digital.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <h4 class="number">02</h4>
                        </div>

                        <div class="portfolio-content">
                            <h5>Sitre vitrine LCR DIGITAL</h5>

                            <div class="d-flex flex-row gspace-4">
                                <div class="portfolio-meta">
                                    <i class="fa-solid fa-users"></i>
                                    <div class="d-grid">
                                        <span class="title">Client</span>
                                        <p>LCR DIGITAL</p>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <div class="d-grid">
                                        <span class="title">Date</span>
                                        <p>Décembre 2025</p>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-description">
                                <p>
                                    Site vitrine permettant à l’entreprise Lapouge Paysage de présenter ses services.
                                </p>
                               <div class="portfolio-btn-wrapper">
                                    <div class="portfolio-btn">
                                        <a href="https://lcr-digital.fr" target="_blank" class="button">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <p class="text-center mt-4 opacity-75">
                Ces projets ne sont qu’un aperçu : de nombreuses autres réalisations ont vu le jour,
                mais toutes ne peuvent être présentées ici.
            </p>

        </div>
    </div>
</div>


        
  <div class="section">
    <div class="hero-container">
        <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">

            <!-- COL GAUCHE -->
            <div class="col col-xl-4">
                <div class="d-flex flex-column flex-md-row flex-xl-column gspace-2">

                    <!-- STRATÉGIE DIGITALE -->
                    <div class="card card-featured creative-solution animate-box animated animate__animated"
                         data-animate="animate__fadeInLeft">
                        <h4>Stratégie digitale</h4>
                        <p>
                            Positionnement, message et structure pour concevoir
                            des sites clairs, efficaces et orientés conversion.
                        </p>
                        <div>
                            <a href="<?= e(route_with_city("agence-digitale", $city_slug)) ?>" class="btn btn-accent-2">
                                <div class="d-flex flex-row align-items-center gspace-1">
                                    <span>Découvrir l’agence</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- ACCESSIBILITÉ -->
                    <div class="card card-featured bussines-avaliable animate-box animated animate__animated"
                         data-animate="animate__fadeInDown">
                        <div class="d-flex flex-row gspace-1 align-items-center">
                            <i class="fa-solid fa-check"></i>
                            <h5>Solutions accessibles</h5>
                        </div>
                        <p>
                            Des offres pensées pour les TPE, PME et indépendants,
                            avec un accompagnement simple et transparent.
                        </p>
                    </div>

                </div>
            </div>

            <!-- COL DROITE -->
            <div class="col col-xl-8">
                <div class="d-flex flex-column gspace-2">

                    <div class="d-flex flex-md-row flex-column gspace-2">

                        <!-- SITE VITRINE -->
                        <div class="card card-featured animate-box animated animate__animated"
                             data-animate="animate__fadeIn">
                            <h4>Création de site vitrine</h4>
                            <p>
                                Présentez votre activité avec un site professionnel,
                                rapide et optimisé pour le référencement local.
                            </p>
                            <div>
                                <a href="<?= e(route_with_city("creation-site-vitrine", $city_slug)) ?>" class="btn btn-accent-2">
                                    <div class="d-flex flex-row align-items-center gspace-1">
                                        <span>Voir l’offre</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- DÉVELOPPEMENT SUR MESURE -->
                        <div class="card card-featured solid-development animate-box animated animate__animated"
                             data-animate="animate__fadeInUp">
                            <h4>Développement web sur mesure</h4>
                            <p>
                                Des sites fiables, sécurisés et évolutifs,
                                conçus pour accompagner votre croissance.
                            </p>
                            <div>
                                <a href="<?= e(route_with_city("developpement-web-sur-mesure", $city_slug)) ?>" class="btn btn-accent-2">
                                    <div class="d-flex flex-row align-items-center gspace-1">
                                        <span>Découvrir le service</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- ACCOMPAGNEMENT -->
                    <div class="card card-featured experience animate-box animated animate__animated"
                         data-animate="animate__fadeInRight">
                        <h4>Accompagnement & suivi</h4>
                        <p>
                            Un suivi clair à chaque étape : conception, mise en ligne,
                            évolutions futures et optimisation continue.
                        </p>
                        <div>
                            <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent-2">
                                <div class="d-flex flex-row align-items-center gspace-1">
                                    <span>Discuter du projet</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
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
                            <h3>Ce que nos clients apprécient</h3>
                            <p>Réactivité, clarté et résultats. Nous construisons des sites qui servent vos objectifs business.</p>
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
                                                "Grâce au site vitrine, j'ai gagné en visibilité.""
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
                                             "L'application personnalisée m'a permis de gérer mon stock.""
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
    <script src="./assets/js/banner.js"></script>
    <script src="./assets/js/swiper-script.js"></script>
    <script src="./assets/js/submit-form.js"></script>
    <script src="./assets/js/video_embedded.js"></script>
</body>
</html>
