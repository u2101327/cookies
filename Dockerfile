# Use official PHP image with Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy source code to container
COPY . /var/www/html

# Set up Apache configurations
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite for .htaccess
RUN a2enmod rewrite

# Expose port 5000 for access
EXPOSE 5000

# Start Apache
CMD ["apache2-foreground"]
