<?php
function slugify_city($value) {
    $value = trim($value);
    $value = str_replace(["’", "'", "‑", "–", "—"], "-", $value);
    $value = iconv("UTF-8", "ASCII//TRANSLIT", $value);
    $value = strtolower((string) $value);
    $value = preg_replace("/[^a-z0-9]+/", "-", $value);
    return trim($value, "-");
}

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

$cities_file = __DIR__ . "/ville.txt";
$cities = [];
if (is_readable($cities_file)) {
    $lines = file($cities_file, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $city = trim($line);
        if ($city === "") {
            continue;
        }
        $slug = slugify_city($city);
        if ($slug !== "") {
            $cities[$slug] = $city;
        }
    }
}

$city_slug = isset($_GET["ville"]) ? strtolower(trim($_GET["ville"])) : "";
if ($city_slug !== "" && !isset($cities[$city_slug])) {
    $city_slug = "";
}
$city = $city_slug !== "" ? $cities[$city_slug] : "";

function city_phrase($prefix, $suffix = "") {
    global $city;
    if ($city === "") {
        return "";
    }
    return $prefix . e($city) . $suffix;
}

function city_or_default($fallback) {
    global $city;
    return $city === "" ? $fallback : e($city);
}

function route_with_city($base, $city_slug) {
    $base = ltrim($base, "/");
    if ($city_slug === "") {
        return "/" . $base;
    }
    return "/" . $base . "/" . $city_slug;
}

function city_text($fallback, $city) {
    return $city === "" ? $fallback : e($city);
}
