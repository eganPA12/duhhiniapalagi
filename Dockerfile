# Gunakan PHP 8.4
FROM php:8.4-cli

# Set working directory
WORKDIR /app

# Install dependencies sistem
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy semua file project
COPY . .

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader

# Expose port (Railway pakai $PORT)
EXPOSE 8080

# Jalankan Laravel
CMD php artisan serve --host=0.0.0.0 --port=${PORT}
