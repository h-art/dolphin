FROM php:7.1-fpm-alpine

RUN apk update
RUN apk add curl
RUN curl https://getcomposer.org/composer.phar -o /usr/bin/composer
RUN chmod +x /usr/bin/composer
RUN docker-php-ext-install mysqli pdo pdo_mysql
