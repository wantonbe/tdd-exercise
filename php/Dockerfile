FROM php:8.2-cli

RUN apt-get update && apt-get install -y --no-install-recommends --no-install-suggests \
        libzip-dev \
        git \
        zip \
    && docker-php-ext-install -j$(nproc) \
        zip \
    && rm -rf /tmp/* /var/lib/apt/lists/*

COPY --from=composer /usr/bin/composer /usr/bin/composer
