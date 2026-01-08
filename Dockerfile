FROM php:8.2-apache

# Dépendances système nécessaires (TLS + Composer)
RUN apt-get update && apt-get install -y \
    ca-certificates \
    openssl \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Apache
RUN a2enmod rewrite

# Dossier de travail
WORKDIR /var/www/html

# Copier le projet
COPY . .

# Installer les dépendances PHP (PHPMailer)
RUN composer install --no-dev --optimize-autoloader

# Autoriser .htaccess
RUN sed -i 's#AllowOverride None#AllowOverride All#g' /etc/apache2/apache2.conf

EXPOSE 80
