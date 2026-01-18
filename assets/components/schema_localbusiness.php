<?php
// Données géographiques par ville (slug => [code_postal, latitude, longitude])
$city_geo_data = [
    "rouen" => ["76000", "49.4431", "1.0993"],
    "le-havre" => ["76600", "49.4944", "0.1079"],
    "caen" => ["14000", "49.1829", "-0.3707"],
    "cherbourg-en-cotentin" => ["50100", "49.6337", "-1.6222"],
    "evreux" => ["27000", "49.0241", "1.1508"],
    "dieppe" => ["76200", "49.9225", "1.0800"],
    "sotteville-les-rouen" => ["76300", "49.4097", "1.0900"],
    "saint-etienne-du-rouvray" => ["76800", "49.3833", "1.1000"],
    "le-grand-quevilly" => ["76120", "49.4167", "1.0500"],
    "alencon" => ["61000", "48.4300", "0.0900"],
    "elbeuf" => ["76500", "49.2867", "1.0100"],
    "vernon" => ["27200", "49.0900", "1.4800"],
    "louviers" => ["27400", "49.2200", "1.1700"],
    "mont-saint-aignan" => ["76130", "49.4600", "1.0800"],
    "canteleu" => ["76380", "49.4400", "1.0200"],
    "oissel" => ["76350", "49.3400", "1.0900"],
    "yvetot" => ["76190", "49.6200", "0.7500"],
    "barentin" => ["76360", "49.5400", "0.9500"],
    "fecamp" => ["76400", "49.7600", "0.3700"],
    "saint-lo" => ["50000", "49.1200", "-1.0900"],
    "bayeux" => ["14400", "49.2800", "-0.7000"],
    "honfleur" => ["14600", "49.4200", "0.2300"],
    "deauville" => ["14800", "49.3600", "0.0700"],
    "trouville-sur-mer" => ["14360", "49.3700", "0.0800"],
    "etretat" => ["76790", "49.7100", "0.2000"],
    "lisieux" => ["14100", "49.1500", "0.2300"],
    "avranches" => ["50300", "48.6800", "-1.3600"],
    "granville" => ["50400", "48.8400", "-1.6000"],
    "pont-audemer" => ["27500", "49.3600", "0.5200"],
    "cabourg" => ["14390", "49.2900", "-0.1200"],
    "giverny" => ["27620", "49.0800", "1.5300"],
    "vire" => ["14500", "48.8400", "-0.8900"],
    "val-de-reuil" => ["27100", "49.2700", "1.2000"],
    "bois-guillaume" => ["76230", "49.4700", "1.1100"],
    "bolbec" => ["76210", "49.5700", "0.4700"],
    "maromme" => ["76150", "49.4800", "1.0400"],
    "gisors" => ["27140", "49.2800", "1.7800"],
    "saint-valery-en-caux" => ["76460", "49.8700", "0.7100"],
    "touques" => ["14800", "49.3400", "0.1000"],
    "beuzeville" => ["27210", "49.3400", "0.3400"],
    "pontorson" => ["50170", "48.5500", "-1.5100"],
    "port-en-bessin-huppain" => ["14520", "49.3500", "-0.7600"],
    "houlgate" => ["14510", "49.3000", "-0.0800"],
    "herouville-saint-clair" => ["14200", "49.2100", "-0.3200"],
    "eu" => ["76260", "50.0500", "1.4200"],
    "bernay" => ["27300", "49.0900", "0.6000"],
    "mortagne-au-perche" => ["61400", "48.5200", "0.5500"],
    "bagnoles-de-l-orne-normandie" => ["61140", "48.5600", "-0.4200"],
    "argentan" => ["61200", "48.7400", "-0.0200"],
    "carpiquet" => ["14650", "49.1800", "-0.4500"],
];

// Récupérer les données de la ville actuelle ou utiliser Rouen par défaut
$current_city_slug = $city_slug !== "" ? $city_slug : "rouen";
$geo_data = isset($city_geo_data[$current_city_slug]) ? $city_geo_data[$current_city_slug] : $city_geo_data["rouen"];

$postal_code = $geo_data[0];
$latitude = $geo_data[1];
$longitude = $geo_data[2];

$address_locality = $city !== "" ? $city : "Rouen";
$area_served = $city !== "" ? $city : "Normandie";

$schema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "@id" => "https://lcr-digital.fr/#localbusiness",
    "name" => "LCR DIGITAL",
    "description" => "Agence web specialisee en creation de sites internet, applications mobiles et SEO en Normandie.",
    "url" => "https://lcr-digital.fr",
    "logo" => "https://lcr-digital.fr/assets/images/lcr-digital-logo.png",
    "image" => "https://lcr-digital.fr/assets/images/lcr-digital-logo.png",
    "telephone" => "+33 6 66 15 80 58",
    "email" => "contact@lcr-digital.fr",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "",
        "addressLocality" => $address_locality,
        "addressRegion" => "Normandie",
        "postalCode" => $postal_code,
        "addressCountry" => "FR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => $latitude,
        "longitude" => $longitude
    ],
    "areaServed" => [
        "@type" => "Place",
        "name" => $area_served
    ],
    "priceRange" => "$$",
    "openingHoursSpecification" => [
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens" => "09:00",
            "closes" => "18:00"
        ]
    ],
    "sameAs" => [
        "https://www.facebook.com/profile.php?id=61586348482305#",
        "https://www.instagram.com/lcr__digital"
    ],
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => "Services de creation web",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Creation de site vitrine",
                    "description" => "Conception de sites vitrines professionnels et responsives"
                ]
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Creation de site e-commerce",
                    "description" => "Developpement de boutiques en ligne performantes"
                ]
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Creation d'application mobile",
                    "description" => "Developpement d'applications mobiles sur mesure"
                ]
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "SEO et referencement",
                    "description" => "Optimisation pour les moteurs de recherche"
                ]
            ]
        ]
    ]
];
?>
<script type="application/ld+json">
<?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>
