<?php require __DIR__ . "/component_bootstrap.php"; ?>
<footer>
    <div class="section footer-banner">
        <div class="hero-container">
            <div class="d-flex flex-column gspace-2">
                <div class="footer-header">
                    <div class="logo-container footer">
                        <img src="./assets/images/lcr-digital-logo.png" alt="LCR DIGITAL" class="img-fluid">
                    </div>
                    <p>Agence web LCR DIGITAL : creation de sites performants, visibles et pensés pour convertir.</p>
                    <div class="social-container">
                        <a href="https://www.facebook.com/profile.php?id=61586348482305#" target="_blank" class="social-item">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/lcr__digital/" target="_blank" class="social-item">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>

                
                <div class="footer-link">
                    <div class="underline-footer"></div>
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 g-3">
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-xl-start text-center align-items-xl-start align-items-center">
                                <h5 class="accent-color">Contact</h5>
                                <div class="footer-list-underline"></div>
                                <div class="d-flex flex-row align-items-center gspace-2">
                                    <i class="fa-solid fa-md fa-phone accent-color"></i>
                                    <div class="d-flex flex-column gspace-1">
                                        <p class="mb-0">Téléphone</p>
                                        <p class="mb-0">06 66 15 80 58</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center gspace-2">
                                    <i class="fa-solid fa-md fa-envelope accent-color"></i>
                                    <div class="d-flex flex-column gspace-1">
                                        <p class="mb-0">Email</p>
                                        <p class="mb-0">contact@lcr-digital.fr</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center gspace-2">
                                    <i class="fa-solid fa-md fa-location-dot accent-color"></i>
                                    <div class="d-flex flex-column gspace-1">
                                        <p class="mb-0">Adresse</p>
                                        <p class="mb-0"><?= city_text("Rouen", $city) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-xl-start text-center align-items-xl-start align-items-center">
                                <h5 class="accent-color">Liens rapides</h5>
                                <div class="footer-list-underline"></div>
                                <ul class="footer-list">
                                    <li><a href="<?= e(route_with_city("agence-digitale", $city_slug)) ?>">A propos</a></li>
                                    <li><a href="<?= e(route_with_city("questions-frequentes-agence-digitale", $city_slug)) ?>">FAQ</a></li>
                                    <li><a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-xl-start text-center align-items-xl-start align-items-center">
                                <h5 class="accent-color">Services</h5>
                                <div class="footer-list-underline"></div>
                                <ul class="footer-list">
                                    <li><a href="<?= e(route_with_city("creation-site-one-page", $city_slug)) ?>">One Page</a></li>
                                    <li><a href="<?= e(route_with_city("creation-site-vitrine", $city_slug)) ?>">Site vitrine</a></li>
                                    <li><a href="<?= e(route_with_city("creation-site-catalogue", $city_slug)) ?>">Site catalogue</a></li>
                                    <li><a href="<?= e(route_with_city("creation-site-ecommerce", $city_slug)) ?>">Site e-commerce</a></li>
                                    <li><a href="<?= e(route_with_city("creation-application-mobile", $city_slug)) ?>">Application mobile</a></li>
                                    <li><a href="<?= e(route_with_city("developpement-web-sur-mesure", $city_slug)) ?>">Développement personnalisé</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-xl-start text-center align-items-xl-start align-items-center">
                                <h5 class="accent-color">Conseils & contact</h5>
                                <div class="footer-list-underline"></div>
                                <p>Recevez des conseils web et SEO. Contactez-nous pour les recevoir.</p>
                                <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                    <div class="underline-footer"></div>
                </div>

                <div class="copyright-container">
                    <p>Copyright © 2024 LCR DIGITAL, tous droits reserves.</p>

                    <div class="d-flex flex-row align-items-center gspace-2">
                        <a href="#" class="legal-link">Politique de confidentialite</a>
                        <a href="#" class="legal-link">Conditions d'utilisation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
