FROM php:7.1-fpm-alpine

RUN apk update
RUN apk add curl
RUN curl https://getcomposer.org/composer.phar -o /usr/bin/composer
RUN chmod +x /usr/bin/composer
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apk add autoconf
RUN apk add gcc
RUN apk add libc-dev
RUN apk add make
RUN apk add automake
RUN pecl install xdebug

COPY xdebug.ini /usr/local/etc/php/conf.d/
COPY www.conf /usr/local/etc/php-fpm.d/
COPY zz-docker.conf /usr/local/etc/php-fpm.d/