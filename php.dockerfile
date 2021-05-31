FROM php:7.4-fpm-alpine

RUN addgroup -g 1000 app && adduser -G app -g app -s /bin/sh -D app

RUN mkdir -p /var/www/html

RUN chown app:app /var/www/html

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql