#FROM ubuntu:18.04

# BLOCK : OBLIGATOIRE pour que php7.0 fonctionne
#RUN apt-get update
#RUN apt-get -y install software-properties-common
#RUN add-apt-repository ppa:ondrej/php
# FIN BLOCK

#RUN apt-get -y update && apt-get install -y \
#    php7.0 \
#    php7.0-fpm \
#    php7.0-mysql \
#    php7.0-json \
#    php7.0-curl \
#    php7.0-sqlite3 \
#    php7.0-xml \
#    php7.0-bcmath \
#    php7.0-zip \
#    php7.0-mbstring \
#    php-xdebug \
#    php-ast

#WORKDIR /var/www/html
#CMD ["php-fpm"]

#EXPOSE 9000

#FROM php7-fpm

# PHP extensions

#RUN docker-php-ext-install pdo pdo_mysql

FROM php:7-fpm

## PHP
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        graphviz \
        libxrender1 libfontconfig \
    && docker-php-ext-install mysqli pdo gd mbstring bcmath zip opcache

CMD ["php-fpm"]