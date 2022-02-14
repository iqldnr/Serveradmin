FROM php:7.4-apache

COPY index.php /var/www/html

RUN useradd -G www-data iqbal
RUN chown -R www-data:www-data /var/www/
RUN chmod -R 774 /var/www

RUN docker-php-ext-install mysqli

