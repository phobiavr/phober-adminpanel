<?php

use Illuminate\Support\Str;

return [

  /*
  |--------------------------------------------------------------------------
  | Default Database Connection Name
  |--------------------------------------------------------------------------
  |
  | Here you may specify which of the database connections below you wish
  | to use as your default connection for all database work. Of course
  | you may use many connections at once using the Database library.
  |
  */

  'default' => env('DB_CONNECTION', 'mysql'),

  /*
  |--------------------------------------------------------------------------
  | Database Connections
  |--------------------------------------------------------------------------
  |
  | Here are each of the database connections setup for your application.
  | Of course, examples of configuring each database platform that is
  | supported by Laravel is shown below to make development simple.
  |
  |
  | All database work in Laravel is done through the PHP PDO facilities
  | so make sure you have the driver for your particular database of
  | choice installed on your machine before you begin development.
  |
  */

  'connections' => [

    'sqlite' => [
      'driver' => 'sqlite',
      'url' => env('DATABASE_URL'),
      'database' => env('DB_DATABASE', database_path('database.sqlite')),
      'prefix' => '',
      'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
    ],

    'mysql' => [
      'driver' => 'mysql',
      'url' => env('DATABASE_URL'),
      'host' => env('DB_HOST', '127.0.0.1'),
      'port' => env('DB_PORT', '3306'),
      'database' => env('DB_DATABASE', 'forge'),
      'username' => env('DB_USERNAME', 'forge'),
      'password' => env('DB_PASSWORD', ''),
      'unix_socket' => env('DB_SOCKET', ''),
      'charset' => 'utf8mb4',
      'collation' => 'utf8mb4_unicode_ci',
      'prefix' => '',
      'prefix_indexes' => true,
      'strict' => true,
      'engine' => null,
      'options' => extension_loaded('pdo_mysql') ? array_filter([
        PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
      ]) : [],
    ],

    'pgsql' => [
      'driver' => 'pgsql',
      'url' => env('DATABASE_URL'),
      'host' => env('DB_HOST', '127.0.0.1'),
      'port' => env('DB_PORT', '5432'),
      'database' => env('DB_DATABASE', 'forge'),
      'username' => env('DB_USERNAME', 'forge'),
      'password' => env('DB_PASSWORD', ''),
      'charset' => 'utf8',
      'prefix' => '',
      'prefix_indexes' => true,
      'schema' => 'public',
      'sslmode' => 'prefer',
    ],

    'sqlsrv' => [
      'driver' => 'sqlsrv',
      'url' => env('DATABASE_URL'),
      'host' => env('DB_HOST', 'localhost'),
      'port' => env('DB_PORT', '1433'),
      'database' => env('DB_DATABASE', 'forge'),
      'username' => env('DB_USERNAME', 'forge'),
      'password' => env('DB_PASSWORD', ''),
      'charset' => 'utf8',
      'prefix' => '',
      'prefix_indexes' => true,
    ],

    'db_auth' => [
      'driver' => env('DB_AUTH_CONNECTION', 'mysql'),
      'host' => env('DB_AUTH_HOST', '127.0.0.1'),
      'port' => env('DB_AUTH_PORT', '3306'),
      'database' => env('DB_AUTH_DATABASE', 'phober_auth'),
      'username' => env('DB_AUTH_USERNAME', 'forge'),
      'password' => env('DB_AUTH_PASSWORD', ''),
    ],

    'db_device' => [
      'driver' => env('DB_DEVICE_CONNECTION', 'mysql'),
      'host' => env('DB_DEVICE_HOST', '127.0.0.1'),
      'port' => env('DB_DEVICE_PORT', '3306'),
      'database' => env('DB_DEVICE_DATABASE', 'phober_device'),
      'username' => env('DB_DEVICE_USERNAME', 'forge'),
      'password' => env('DB_DEVICE_PASSWORD', ''),
    ],

    'db_media' => [
      'driver' => env('DB_MEDIA_CONNECTION', 'mysql'),
      'host' => env('DB_MEDIA_HOST', '127.0.0.1'),
      'port' => env('DB_MEDIA_PORT', '3306'),
      'database' => env('DB_MEDIA_DATABASE', 'phober_media'),
      'username' => env('DB_MEDIA_USERNAME', 'forge'),
      'password' => env('DB_MEDIA_PASSWORD', ''),
    ],

    'db_crm' => [
      'driver' => env('DB_CRM_CONNECTION', 'mysql'),
      'host' => env('DB_CRM_HOST', '127.0.0.1'),
      'port' => env('DB_CRM_PORT', '3306'),
      'database' => env('DB_CRM_DATABASE', 'phober_crm'),
      'username' => env('DB_CRM_USERNAME', 'forge'),
      'password' => env('DB_CRM_PASSWORD', ''),
    ],

    'db_staff' => [
      'driver' => env('DB_STAFF_CONNECTION', 'mysql'),
      'host' => env('DB_STAFF_HOST', '127.0.0.1'),
      'port' => env('DB_STAFF_PORT', '3306'),
      'database' => env('DB_STAFF_DATABASE', 'phober_staff'),
      'username' => env('DB_STAFF_USERNAME', 'forge'),
      'password' => env('DB_STAFF_PASSWORD', ''),
    ],

    'db_notification' => [
      'driver' => env('DB_NOTIFICATION_CONNECTION', 'mysql'),
      'host' => env('DB_NOTIFICATION_HOST', '127.0.0.1'),
      'port' => env('DB_NOTIFICATION_PORT', '3306'),
      'database' => env('DB_NOTIFICATION_DATABASE', 'phober_notification'),
      'username' => env('DB_NOTIFICATION_USERNAME', 'forge'),
      'password' => env('DB_NOTIFICATION_PASSWORD', ''),
    ],

    'db_config' => [
      'driver' => env('DB_CONFIG_CONNECTION', 'mysql'),
      'host' => env('DB_CONFIG_HOST', '127.0.0.1'),
      'port' => env('DB_CONFIG_PORT', '3306'),
      'database' => env('DB_CONFIG_DATABASE', 'phober_config'),
      'username' => env('DB_CONFIG_USERNAME', 'forge'),
      'password' => env('DB_CONFIG_PASSWORD', ''),
    ],

    'db_log' => [
      'driver' => env('DB_LOG_CONNECTION', 'mysql'),
      'host' => env('DB_LOG_HOST', '127.0.0.1'),
      'port' => env('DB_LOG_PORT', '3306'),
      'database' => env('DB_LOG_DATABASE', 'phober_log'),
      'username' => env('DB_LOG_USERNAME', 'forge'),
      'password' => env('DB_LOG_PASSWORD', ''),
    ],

  ],

  /*
  |--------------------------------------------------------------------------
  | Migration Repository Table
  |--------------------------------------------------------------------------
  |
  | This table keeps track of all the migrations that have already run for
  | your application. Using this information, we can determine which of
  | the migrations on disk haven't actually been run in the database.
  |
  */

  'migrations' => 'migrations',

  /*
  |--------------------------------------------------------------------------
  | Redis Databases
  |--------------------------------------------------------------------------
  |
  | Redis is an open source, fast, and advanced key-value store that also
  | provides a richer body of commands than a typical key-value system
  | such as APC or Memcached. Laravel makes it easy to dig right in.
  |
  */

  'redis' => [

    'client' => env('REDIS_CLIENT', 'phpredis'),

    'options' => [
      'cluster' => env('REDIS_CLUSTER', 'redis'),
      'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_') . '_database_'),
    ],

    'default' => [
      'url' => env('REDIS_URL'),
      'host' => env('REDIS_HOST', '127.0.0.1'),
      'password' => env('REDIS_PASSWORD', null),
      'port' => env('REDIS_PORT', '6379'),
      'database' => env('REDIS_DB', '0'),
    ],

    'cache' => [
      'url' => env('REDIS_URL'),
      'host' => env('REDIS_HOST', '127.0.0.1'),
      'password' => env('REDIS_PASSWORD', null),
      'port' => env('REDIS_PORT', '6379'),
      'database' => env('REDIS_CACHE_DB', '1'),
    ],

  ],

];
