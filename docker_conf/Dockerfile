FROM php:7.1.8-apache

MAINTAINER Paul Redmond

COPY . /var/www/service
COPY docker_conf/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/service

RUN docker-php-ext-install mbstring pdo pdo_mysql \
    && a2enmod headers \
    && a2enmod rewrite \
    && chown -R www-data:www-data /var/www/service

RUN service apache2 restart

RUN apt-get update -y && apt-get install -y openssl zip unzip git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer