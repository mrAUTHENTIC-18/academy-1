FROM php:8.2-fpm

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html
