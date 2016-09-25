FROM php:7.0-apache

RUN apt-get update && apt-get install -y git nano zip

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer

RUN a2enmod rewrite

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
RUN chmod a+x /usr/local/bin/symfony

ENV TERM xterm