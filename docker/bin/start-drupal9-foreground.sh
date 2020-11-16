#!/usr/bin/env bash
if [[ ! -n "$XDEBUG_CONFIG" ]]; then
    rm -f /usr/local/etc/php/conf.d/xdebug.ini
fi
composer install

cd /var/www/web
drush state:set system.maintenance_mode 1 --input-format=integer
drush updatedb -y
drush cache:rebuild
drush state:set system.maintenance_mode 0 --input-format=integer
apache2-foreground
