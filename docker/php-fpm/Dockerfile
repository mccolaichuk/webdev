FROM php:7.4-fpm

RUN pecl install xdebug-2.9.5 \
    && docker-php-ext-enable xdebug

COPY php.ini $PHP_INI_DIR

CMD ["php-fpm"]

EXPOSE 9000

WORKDIR /var/www
