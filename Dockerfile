FROM php:8.2-apache
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    vim \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql gd

RUN a2enmod rewrite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer create-project --prefer-dist laravel/laravel .

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache
