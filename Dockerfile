FROM php:8.0-apache
WORKDIR /var/www/html
RUN a2enmod rewrite
RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install pdo pdo_mysql