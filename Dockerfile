FROM php:8.4-apache

LABEL org.opencontainers.image.source=https://github.com/erwann-dms/webpack

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY start-apache /usr/local/bin
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN docker-php-ext-install pdo pdo_mysql

## ajout du site dans le conteneur
COPY ./src /var/www/
RUN chown -R www-data:www-data /var/www

CMD ["start-apache"]