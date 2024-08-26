FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libjpeg62-turbo-dev \
    libwebp-dev \
    libpq-dev \
    zip unzip \
    # Clear cache
    && apt-get clean && rm -rf /var/lib/apt/lists/* \
    # Install PHP extensions
    && docker-php-ext-install mysqli pdo pdo_pgsql pgsql mbstring exif intl pcntl bcmath \
    && docker-php-ext-configure gd --with-webp --with-jpeg \
    && docker-php-ext-install gd

WORKDIR /var/www

EXPOSE 9000

CMD ["php-fpm"]

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
