FROM php:8.4-cli-bookworm

RUN apt-get update && apt-get install -y \
    git curl unzip zip libpq-dev \
    && docker-php-ext-install pdo_pgsql pdo mbstring \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

COPY . .

RUN mkdir -p storage/framework/sessions storage/framework/views \
    storage/framework/cache storage/framework/testing \
    storage/logs bootstrap/cache \
    && chmod -R 755 storage bootstrap/cache

EXPOSE 8000

CMD php artisan migrate --force && php artisan serve --host 0.0.0.0 --port ${PORT:-8000}
