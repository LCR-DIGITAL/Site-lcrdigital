<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Tarifs création site web & développement" . city_phrase(" à ") . " | LCR DIGITAL";
$page_description = "Consultez nos tarifs pour la création de site internet, le développement d’applications mobiles et les services web personnalisés" . city_phrase(" à ") . ".";
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
                    <h2>Tarifs</h2>
                    <h1 class="banner-h1">Nos tarifs pour vos projets web et mobiles<?= city_phrase(' à ') ?></h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Tarifs</a>
                    </nav>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container overflow-visible">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column gspace-2 text-center">
                        <h6 class="accent-color">Tarifs</h6>
                        <h3>Des forfaits simples et transparents</h3>
                        <p>Prix mensuel + mise en place. Application mobile et développement personnalisé : sur devis.</p>
                    </div>
                    <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 grid-spacer-2">
                        <div class="col order-1">
                            <div class="card card-pricing-wrapper animate-box animated fast animate__animated" data-animate="animate__fadeInUp">
                                <div class="card-pricing">
                                    <h4>Essentiel (One Page)</h4>
                                    <p>Une landing page claire pour capter des leads rapidement.</p>
                                    <div class="d-flex flex-row gspace-1 align-items-end">
                                        <span class="price">150€/mois</span>
                                        <p class="price-details">Forfait</p>
                                    </div>
                                    <ul class="check-list">
                                        <li>One page optimisée</li>
                                        <li>Design responsive</li>
                                        <li>Prestation SEO</li>
                                        <li>Optimisation des performances</li>
                                        <li>Accès à l’application mobile</li>
                                        <li>Formation</li>
                                        <li>Maintenance</li>
                                    </ul>
                                    <div class="d-flex flex-row gspace-1 align-items-end price-setup">
                                        <span class="price">400€</span>
                                        <p class="price-details">Mise en place</p>
                                    </div>
                                    <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent">Demander un devis</a>
                                </div>
                            </div>
                        </div>
                        <div class="col order-3 order-xl-2 align-items-center mx-auto">
                            <div class="card card-pricing-wrapper animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="card-pricing popular">
                                    <div class="card popular-card">
                                    <span>Offre la plus demandée</span>
                                </div>
                                    <h4>Standard (Vitrine)</h4>
                                    <p>Un site vitrine complet pour présenter votre activité.</p>
                                    <div class="d-flex flex-row gspace-1 align-items-end">
                                        <span class="price primary-accent">230€/mois</span>
                                        <p class="price-details">Forfait</p>
                                    </div>
                                    <ul class="check-list">
                                        <li>Site vitrine multipage</li>
                                        <li>Design responsive</li>
                                        <li>Prestation SEO renforcée</li>
                                        <li>Optimisation des performances</li>
                                        <li>Accès à l’application mobile</li>
                                        <li>Formation</li>
                                        <li>Maintenance</li>
                                    </ul>
                                    <div class="d-flex flex-row gspace-1 align-items-end price-setup">
                                        <span class="price primary-accent">600€</span>
                                        <p class="price-details">Mise en place</p>
                                    </div>
                                    <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent-3">Demander un devis</a>
                                </div>
                            </div>
                        </div>
                        <div class="col order-2 order-xl-3">
                            <div class="card card-pricing-wrapper animate-box animated slow animate__animated" data-animate="animate__fadeInUp">
                                <div class="card-pricing">
                                    <h4>Business (Catalogue)</h4>
                                    <p>Catalogue structuré pour présenter vos produits et services.</p>
                                    <div class="d-flex flex-row gspace-1 align-items-end">
                                        <span class="price">350€/mois</span>
                                        <p class="price-details">Forfait</p>
                                    </div>
                                    <ul class="check-list">
                                        <li>Catalogue</li>
                                        <li>Design responsive</li>
                                        <li>Prestation SEO renforcée</li>
                                        <li>Optimisation des performances</li>
                                        <li>Accès à l’application mobile</li>
                                        <li>Formation</li>
                                        <li>Maintenance</li>
                                        <li>Option e-commerce : +150€/mois / +500€</li>
                                    </ul>
                                    <div class="d-flex flex-row gspace-1 align-items-end price-setup">
                                        <span class="price">900€</span>
                                        <p class="price-details">Mise en place</p>
                                    </div>
                                    <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent">Demander un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-md-2 row-cols-1 grid-spacer-2 mt-3">
                        <div class="col">
                            <div class="card card-pricing-wrapper animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="card-pricing">
                                    <h4>Application mobile</h4>
                                    <p>Application iOS/Android dédiée à vos besoins.</p>
                                    <div class="d-flex flex-row gspace-1 align-items-end">
                                        <span class="price">Sur devis</span>
                                        <p class="price-details">Projet sur mesure</p>
                                    </div>
                                    <ul class="check-list">
                                        <li>Développement sur mesure</li>
                                        <li>Maintenance</li>
                                        <li>Déploiement iOS/Android</li>
                                    </ul>
                                    <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent">Nous contacter</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-pricing-wrapper animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="card-pricing">
                                    <h4>Développement personnalisé</h4>
                                    <p>Fonctionnalités spécifiques et intégrations métier.</p>
                                    <div class="d-flex flex-row gspace-1 align-items-end">
                                        <span class="price">Sur devis</span>
                                        <p class="price-details">Projet sur mesure</p>
                                    </div>
                                    <ul class="check-list">
                                        <li>Automatisations</li>
                                        <li>Architecture évolutive</li>
                                        <li>Support technique</li>
                                    </ul>
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

        
        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Parlons de votre budget</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Nous définissons une solution adaptée à vos besoins et à votre croissance.</p>
                    <div>
                        <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent">Demander un devis</a>
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
                            <h3>Des clients satisfaits</h3>
                            <p>Clarté, performance et résultats mesurables.</p>
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
