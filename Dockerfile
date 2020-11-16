FROM php:7.3-apache

COPY docker/apache2.4/site.conf /etc/apache2/sites-available/000-default.conf
COPY docker/apache2.4/mpm_prefork.conf /etc/apache2/mods-available/
COPY docker/php7/php.ini /usr/local/etc/php/
COPY docker/php7/xdebug.ini /usr/local/etc/php/conf.d/

RUN apt-get update && apt-get install yarn git iputils-ping mariadb-client libgmp-dev libjpeg-dev libpng-dev libzip-dev libfreetype6-dev zip vim gnupg2 software-properties-common gnupg2 -y \
    && curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
    && curl -sL https://deb.nodesource.com/setup_12.x | bash - \
    && echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list \
    && docker-php-ext-install gmp pdo pdo_mysql mysqli exif zip opcache \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && a2enmod rewrite \
    && a2enmod alias \
    && mkdir -p /var/www/d8-config-sync && chmod a+rw /var/www/d8-config-sync \
    && pecl install xdebug redis \
    && touch /tmp/xdebug.log \
    && chown www-data:www-data /tmp/xdebug.log \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis \
    && rm -rf /var/lib/apt/lists/*

VOLUME /var/www/config-sync
WORKDIR /var/www/
COPY web web
COPY patches patches
COPY docker/drupal9 ./web/sites/default/
COPY docker/drupal9 ./web/sites/
COPY docker/drupal9 ./web/sites/default/
COPY composer.json ./
COPY composer.lock ./
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && composer install --prefer-dist \
    && composer dump-autoload \
    && rm composer-setup.php \
    && chmod ugo-w /var/www/web/sites/default/* \
    && chmod ugo-w /var/www/web/sites/default \
    && mkdir -p /var/www/web/sites/default/files \
    && chmod -R a+rw /var/www/web/sites/default/files
ENV PATH="/var/www/vendor/bin:${PATH}"
# Recaptcha ajax issue: https://www.drupal.org/project/recaptcha/issues/2493183
COPY docker/bin/start-drupal9-foreground.sh /usr/local/bin/
CMD start-drupal9-foreground.sh
