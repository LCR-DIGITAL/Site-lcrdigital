<?php
/**
 * Script pour générer le sitemap complet
 * Usage: php generate_sitemap.php
 */

require_once __DIR__ . '/city_bootstrap.php';

$domain = 'https://lcr-digital.fr';
$date = date('Y-m-d');

$pages = [
    'agence-web' => ['priority' => '1.0', 'city_priority' => '0.9'],
    'agence-digitale' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'contact-agence-web' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'tarifs-creation-site-web' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'services-web' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'creation-site-one-page' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'creation-site-vitrine' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'creation-site-catalogue' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'creation-site-ecommerce' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'creation-application-mobile' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'developpement-web-sur-mesure' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'questions-frequentes-agence-digitale' => ['priority' => '0.8', 'city_priority' => '0.7'],
];

$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Page d'accueil
$xml .= "  <url>\n";
$xml .= "    <loc>{$domain}/</loc>\n";
$xml .= "    <lastmod>{$date}</lastmod>\n";
$xml .= "    <changefreq>monthly</changefreq>\n";
$xml .= "    <priority>1.0</priority>\n";
$xml .= "  </url>\n";

// Pages sans ville
foreach ($pages as $page => $config) {
    $xml .= "  <url>\n";
    $xml .= "    <loc>{$domain}/{$page}</loc>\n";
    $xml .= "    <lastmod>{$date}</lastmod>\n";
    $xml .= "    <changefreq>monthly</changefreq>\n";
    $xml .= "    <priority>{$config['priority']}</priority>\n";
    $xml .= "  </url>\n";
}

// Pages avec ville
foreach ($cities as $slug => $name) {
    foreach ($pages as $page => $config) {
        $xml .= "  <url>\n";
        $xml .= "    <loc>{$domain}/{$page}/{$slug}</loc>\n";
        $xml .= "    <lastmod>{$date}</lastmod>\n";
        $xml .= "    <changefreq>monthly</changefreq>\n";
        $xml .= "    <priority>{$config['city_priority']}</priority>\n";
        $xml .= "  </url>\n";
    }
}

$xml .= "</urlset>\n";

file_put_contents(__DIR__ . '/sitemap2.xml', $xml);

$total_urls = 1 + count($pages) + (count($cities) * count($pages));
echo "Sitemap généré avec {$total_urls} URLs (" . count($cities) . " villes)\n";
