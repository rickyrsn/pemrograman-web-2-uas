# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy Apache vhost file
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Enable the site configuration
RUN a2ensite 000-default

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
