ARG PHP_VERSION

FROM php:${PHP_VERSION}-apache

ARG APP_ENV
ARG LOG_LEVEL
ARG HOST_NAME

WORKDIR /var/www

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

RUN echo "ServerName ${HOST_NAME}" >> /etc/apache2/apache2.conf
RUN echo "LogLevel ${LOG_LEVEL}" >> /etc/apache2/apache2.conf

RUN chown -R www-data:www-data /var/www && \
    chmod -R 775 /var/www

COPY --chown=www-data:www-data . /var/www 
# Essayer de déplacer le copy après le user pour retirer le chown

USER www-data

RUN composer install --no-dev --optimize-autoloader

# Dockerfile should be in the root of the project
# !!! TODO ajouter php bin/console server:log

RUN php bin/console cache:clear --env=prod --no-debug  
RUN php bin/console cache:warmup --env=prod
RUN composer dump-env prod