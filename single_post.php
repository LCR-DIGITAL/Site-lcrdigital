<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Article - LCR DIGITAL";
$page_description = "Article de blog LCR DIGITAL sur le web, le SEO et le marketing digital.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
</head>
<body>
    
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
                    <h6>SEO</h6>
                    <h2>SEO local : comment dominer les recherches à Rouen</h2>
                    <h1 class="banner-h1">LCR DIGITAL - SEO local : comment dominer les recherches à Rouen</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#">Blog</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">SEO local : comment dominer les recherches à Rouen</a>
                    </nav>
                    <div class="d-flex flex-row align-self-center gspace-3">
                        <div class="d-flex flex-row align-items-center gspace-1">
                            <i class="fa-solid fa-calendar-days text-accent-color"></i>
                            <p class="mb-0">10 mai 2024</p>
                        </div>
                        <div class="d-flex flex-row align-items-center gspace-1">
                            <i class="fa-solid fa-message text-accent-color"></i>
                            <p class="mb-0">0 commentaire</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">
                    <div class="col col-xl-8">
                        <div class="blog-post-container">
                            <div class="d-flex flex-column gspace-2">
                                <p>
                                    Le SEO local est la clé pour attirer des clients proches de vous. En travaillant la cohérence de vos informations, vos pages de service et vos avis, vous gagnez en visibilité sur Google.
                                </p>
                                <p>
                                    L’objectif est simple : apparaître sur les requêtes locales qui comptent et transformer cette visibilité en contacts qualifiés.
                                </p>
                                <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                    <div class="col">
                                        <div class="image-container">
                                            <img src="./assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="image-container">
                                            <img src="./assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <h4>Points clés</h4>
                                <p>Votre fiche Google Business Profile, vos pages services et vos contenus doivent parler le langage de vos clients.</p>
                                <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                    <div class="col">
                                        <div class="image-container">
                                            <img src="./assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <ul class="check-list">
                                            <li>Optimisez votre fiche Google.</li>
                                            <li>Créez des pages par service.</li>
                                            <li>Travaillez vos avis clients.</li>
                                            <li>Ajoutez des contenus locaux utiles.</li>
                                            <li>Améliorez la vitesse du site.</li>
                                            <li>Suivez vos conversions.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="underline-blog"></div>
                                <div class="d-flex flex-row align-items-center justify-content-between gspace-2">
                                    <h5>Partager l’article</h5>
                                    <div class="social-container">
                                        <a href="https://www.facebook.com/profile.php?id=61586348482305#" target="_blank" class="social-item">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>                               
                                        <a href="https://www.instagram.com/lcr__digital/" target="_blank" class="social-item">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="underline-blog"></div>
                                <h5>Laisser un commentaire</h5>
                                <p>Votre email ne sera pas publié. Les champs obligatoires sont marqués *</p>
                                <form action="" id="reply-form" method="POST" class="form">
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input type="text" name="name" id="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Site web</label>
                                        <input type="url" name="website" id="website">
                                    </div>

                                    <div class="d-flex flex-row align-items-center gspace-1">
                                        <div>
                                            <input type="checkbox" name="save" class="form-control-2 me-2">
                                        </div>
                                        <label for="save">Enregistrer mon nom, email et site pour la prochaine fois</label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="comment">Commentaire</label>
                                        <textarea name="comment" id="comment" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-accent w-100">Envoyer</button>
                                    </div>
                                    <div id="successMessage-reply" class="mt-2 success d-none">
                                        <p><span class="fa-solid fa-check text-success"></span> Message envoyé.</p>
                                    </div>            
                                    <div id="errorMessage-reply" class="mt-2 failed d-none">
                                        <p><span class="fa-solid fa-times text-danger"></span> Échec de l’envoi. Réessayez.</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4">
                        <div class="d-flex flex-column gspace-2">
                            <form action="/recherche-site" method="GET" class="search-form">
                                <input type="text" name="q" placeholder="Search...">
                            </form>

                            <div class="card other-post-card animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                <h4>Articles récents</h4>
                                <div class="other-post-content">
                                    <div class="post-image">
                                        <img src="./assets/images/dummy-img-600x400.jpg" alt="" class="image-fluq">
                                    </div>
                                    <div class="d-grid">
                                        <a href="/article-agence-digitale-rouen" class="other-blog-link">SEO local : comment dominer les recherches à Rouen</a>
                                        <span class="meta-data recent-post">10 mai 2024 - 0 commentaire</span>
                                    </div>
                                </div>
                                <div class="other-post-content">
                                    <div class="post-image">
                                        <img src="./assets/images/dummy-img-600x400.jpg" alt="" class="image-fluq">
                                    </div>
                                    <div class="d-grid">
                                        <a href="/article-agence-digitale-rouen" class="other-blog-link">5 optimisations pour convertir plus avec votre site</a>
                                        <span class="meta-data recent-post">02 mai 2024 - 0 commentaire</span>
                                    </div>
                                </div>
                                <div class="other-post-content">
                                    <div class="post-image">
                                        <img src="./assets/images/dummy-img-600x400.jpg" alt="" class="image-fluq">
                                    </div>
                                    <div class="d-grid">
                                        <a href="/article-agence-digitale-rouen" class="other-blog-link">Créer un contenu qui répond aux vraies questions clients</a>
                                        <span class="meta-data recent-post">24 avril 2024 - 0 commentaire</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cta-banner animate-box animated slow animate__animated" data-animate="animate__fadeInRight">
                                <h4>Un projet web en tête ?</h4>
                                <p>Nous vous aidons à construire un site qui attire et convertit.</p>
                                <div>
                                    <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent">Nous contacter</a>
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
