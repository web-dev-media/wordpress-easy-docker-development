FROM wordpress:latest

RUN apt-get update && apt-get install -y \
    libxml2-dev \
    libzip-dev \
    libbz2-dev \
    htop \
    unzip wget

RUN pecl install xdebug && \
    docker-php-ext-enable xdebug

# Copy xdebug configration for remote debugging
COPY configs/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
COPY configs/uploads.ini /usr/local/etc/php/conf.d/uploads.ini
COPY configs/error-logging.ini /usr/local/etc/php/conf.d/error-logging.ini
