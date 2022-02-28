FROM php:8.1.3-apache

RUN apt-get -yqq update
RUN apt-get -yqq upgrade

RUN apt-get install -yqq git

RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available
COPY usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN a2enmod rewrite
