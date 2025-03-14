FROM php:8.1-apache

RUN a2enmod rewrite

COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

COPY . .

EXPOSE 80

CMD ["apache2-foreground"]
