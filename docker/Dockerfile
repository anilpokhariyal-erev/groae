# Use official PHP image as the base
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    nano \
    libonig-dev \
    libzip-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install Composer
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# Copy the existing application directory to the container
COPY . .

# Set folder permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Expose port 8000 for artisan serve
EXPOSE 8000

# Run Laravel's artisan commands (optimize and migrate)
# Serve the Laravel app with the container's IP on port 8000
CMD php artisan key:generate && php artisan optimize && php artisan serve --host=0.0.0.0 --port=8000
