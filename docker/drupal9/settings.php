<?php
/**
 * @var string $app_root
 * @var string $site_path
 * @var $class_loader
 */
$databases['default']['default'] = array(
  'database' => $_ENV['MYSQL_DATABASE'],
  'username' => $_ENV['MYSQL_USERNAME'],
  'password' => $_ENV['MYSQL_PASSWORD'],
  'host' => $_ENV['MYSQL_HOST'],
  'port' => $_ENV['MYSQL_PORT'],
  'driver' => 'mysql',
  'prefix' => '',
  'collation' => 'utf8mb4_general_ci',
);

$settings['config_sync_directory'] = '/var/www/config-sync';

$settings['hash_salt'] = $_ENV['SITE_HASH_SALT'];

$settings['update_free_access'] = FALSE;

if (!empty($_ENV['REVERSE_PROXY_ENABLED'])) {
  $settings['reverse_proxy'] = TRUE;
  $settings['reverse_proxy_addresses'] = array($_SERVER['REMOTE_ADDR']);
}

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';


$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

if (!empty($_ENV['MODE']) && $_ENV['MODE'] == 'DEV') {
  include 'settings.development.php';
}

if (!empty($_ENV['STRIPE_SECRET_KEY']) && !empty($_ENV['STRIPE_PUBLIC_KEY'])) {
  $settings['stripe_secret_key'] = $_ENV['STRIPE_SECRET_KEY'];
  $settings['stripe_public_key'] = $_ENV['STRIPE_PUBLIC_KEY'];
}

if (!empty($_ENV['STRIPE_WEBHOOK_SECRET'])) {
  $settings['stripe_webhook_secret'] = $_ENV['STRIPE_WEBHOOK_SECRET'];
}

if (!empty($_ENV['REGISTRATION_ADMIN_EMAIL'])) {
  $settings['registration_admin_email'] = $_ENV['REGISTRATION_ADMIN_EMAIL'];
}

if (!empty($_ENV['REDIS_CACHE'])) {
  $settings['redis.connection']['interface'] = 'PhpRedis';
  $settings['redis.connection']['host'] = !empty($_ENV['REDIS_HOST']) ? $_ENV['REDIS_HOST'] : 'redis';
  $settings['redis.connection']['port'] = !empty($_ENV['REDIS_PORT']) ? $_ENV['REDIS_PORT'] : '6379';
  $settings['cache_prefix'] = 'y';
  $settings['cache']['default'] = 'cache.backend.redis';
  $settings['cache']['bins']['bootstrap'] = 'cache.backend.chainedfast';
  $settings['cache']['bins']['discovery'] = 'cache.backend.chainedfast';
  $settings['cache']['bins']['config'] = 'cache.backend.chainedfast';
  // settings['container_yamls'][] = 'modules/contrib/redis/example.services.yml';
  $settings['container_yamls'][] = 'modules/contrib/redis/redis.services.yml';
  $class_loader->addPsr4('Drupal\\redis\\', 'modules/contrib/redis/src');
}

$settings['whitelisted_domains'] = [
  'colosseumdental.com',
  'oral.fi',
  'smile.se',
  'colosseum.no',
  'colosseumklinikken.dk',
  'swiss-smile.com',
  'odontosalute.it',
  'colosseumdental.co.uk',
  'colosseumdental.de',
  'twinkle.fi'
];
