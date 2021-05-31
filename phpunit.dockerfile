FROM phpunit/phpunit

RUN addgroup -g 1000 app && adduser -G app -g app -s /bin/sh -D app

WORKDIR /var/www/html