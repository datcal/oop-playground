FROM composer:2

RUN addgroup -g 1000 app && adduser -G app -g app -s /bin/sh -D app

WORKDIR /var/www/html