# Use an official PHP Apache image as the base
FROM php:8.0-apache



# Copy the application files to the container
COPY ./src /var/www/html/

# Install system dependencies
RUN apt-get update && \
    apt-get install -y \
    git \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP extensions required by your application

RUN docker-php-ext-install mysqli






