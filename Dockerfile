# Use PHP 8.2 CLI image
FROM php:8.2-cli

# Update and install system dependencies
RUN apt-get update -y && apt-get install -y \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev

# Install PHP extensions (including zip)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mbstring zip

RUN apt-get update
RUN apt-get install -y default-mysql-client

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy application files
COPY . /app

# Install PHP dependencies via Composer
RUN composer install

# Expose port 8000
EXPOSE 8000

# Start the PHP application using Artisan
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]