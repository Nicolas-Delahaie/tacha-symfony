ARG PHP_VERSION

FROM php:${PHP_VERSION}-apache

ARG APP_ENV
ARG LOG_LEVEL
ARG HOST_NAME

WORKDIR /var/www
# !!!TODO créer le fichier .env.php

# # Copies the .env.prod file to environment to override the .env file
# RUN export $(grep -E '^[A-Za-z_][A-Za-z0-9_]*=' .env.${APP_ENV} | xargs)
# RUN composer dump-env ${APP_ENV}

RUN apt-get update \
    && apt-get install -qq -y --no-install-recommends \
    locales \
    coreutils \
    apt-utils \
    git \
    libpng-dev \
    libonig-dev \
    && echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen \
    && locale-gen fr_FR.UTF-8 \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:2.1 /usr/bin/composer /usr/local/bin/composer

# Installer les extensions PHP via install-php-extensions
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions \
    && sync \
    && install-php-extensions pdo_mysql mysqli gd opcache zip dom mbstring apcu \
    && a2enmod rewrite

COPY ./composer.json /var/www/

RUN 

# Dockerfile should be in the root of the project
# WARNING : keeps a copy after building. Changes needs rebuilding with this copy 
# COPY . /var/www
# !!! TODO selectionner dossiers un à uns en prod
# !!! TODO Installer les deps
# !!! TODO ajouter le cli
# !!! TODO ajouter php bin/console server:log

# Donner les permissions nécessaires au dossier var/ pour l'utilisateur www-data
# RUN chown -R www-data:www-data /var/www
# RUN chmod -R 775 /var/www

# COPY ./apache2.conf etc/apache2/apache2.conf
RUN echo "ServerName ${HOST_NAME}" >> /etc/apache2/apache2.conf
RUN echo "LogLevel ${LOG_LEVEL}" >> /etc/apache2/apache2.conf

# Needed 
RUN mkdir -p var && \
    chown -R www-data:www-data var && \
    chmod -R 775 var
# !!! TODO Initialiser la base de données