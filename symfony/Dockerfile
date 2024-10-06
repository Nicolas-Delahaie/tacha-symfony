ARG PHP_VERSION

FROM php:${PHP_VERSION}-apache

WORKDIR /var/www

COPY . /var/www

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update \
    && apt-get install -qq -y --no-install-recommends \
    cron \
    vim \
    locales \
    coreutils \
    apt-utils \
    git \
    libicu-dev \
    g++ \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    libxslt-dev \
    && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen \
    && echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen \
    && locale-gen en_US.UTF-8 fr_FR.UTF-8 \
    && docker-php-ext-configure intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:2.1 /usr/bin/composer /usr/local/bin/composer

# Installer les extensions PHP via install-php-extensions
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions amqp pdo_mysql mysqli gd opcache intl zip calendar dom mbstring xsl apcu

RUN a2enmod rewrite
