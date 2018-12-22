FROM php:7.2-apache
RUN pecl install xdebug-2.6.1 && docker-php-ext-enable xdebug
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite
RUN apt-get update && apt-get install -y imagemagick