FROM php:7.2-apache

RUN apt-get update && apt-get install -y cron git-core jq unzip vim zip \
  libjpeg-dev libpng-dev libpq-dev libsqlite3-dev libwebp-dev libzip-dev && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-configure zip --with-libzip && \
  docker-php-ext-configure gd --with-png-dir --with-jpeg-dir --with-webp-dir && \
  docker-php-ext-configure pcntl && \
  docker-php-ext-install exif gd mysqli opcache pdo_pgsql pdo_mysql zip pcntl

RUN { \
    echo 'opcache.memory_consumption=256'; \
    echo 'opcache.interned_strings_buffer=8'; \
    echo 'opcache.max_accelerated_files=4000'; \
    echo 'opcache.revalidate_freq=2'; \
    echo 'opcache.fast_shutdown=1'; \
    echo 'opcache.enable_cli=1'; \
  } > /usr/local/etc/php/conf.d/docker-oc-opcache.ini

RUN { \
    echo 'log_errors=on'; \
    echo 'display_errors=off'; \
    echo 'upload_max_filesize=32M'; \
    echo 'post_max_size=32M'; \
    echo 'memory_limit=256M'; \
    echo 'expose_php=Off'; \
    echo 'max_execution_time=60'; \
    echo 'set_time_limit=60'; \
  } > /usr/local/etc/php/conf.d/docker-oc-php.ini

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.10.16 && \
  /usr/local/bin/composer global require hirak/prestissimo

RUN a2enmod rewrite

COPY . /var/www/html/

RUN git submodule init && \
  git submodule update && \
  composer install --no-interaction --prefer-dist --no-scripts && \
  composer dumpautoload && \
  composer clearcache && \
  php artisan horizon:assets && \
  chown -R www-data:www-data /var/www/html && \
  git checkout modules

CMD ["apache2-foreground"]
