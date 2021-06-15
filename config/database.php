<?php

$redisDefaultConfiguration = [
    'options' => [
        'cluster' => env('REDIS_CLUSTER', 'redis'),
        'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
    ],

    'default' => [
        'host'     => env('REDIS_HOST', '127.0.0.1'),
        'password' => env('REDIS_PASSWORD', null),
        'port'     => env('REDIS_PORT', 6379),
        'database' => env('DB_DEFAULT_INDEX', 0),
    ],

    'cache' => [
        'host'     => env('REDIS_HOST', '127.0.0.1'),
        'password' => env('REDIS_PASSWORD', null),
        'port'     => env('REDIS_PORT', 6379),
        'database' => env('DB_CACHE_INDEX', 1),
    ],

    'queues' => [
        'url' => env('REDIS_URL'),
        'host' => env('REDIS_HOST', '127.0.0.1'),
        'password' => env('REDIS_PASSWORD', null),
        'port' => env('REDIS_PORT', 6379),
        'database' => env('DB_QUEUE_INDEX', 2),

        //'persistent' => env('REDIS_PERSISTENT', false),
        //'read_timeout' => 60,
        //'timeout' => 5
    ],
];

$redisSentinelConfiguration = [
    'cluster' => false,

    'default' => [
        [
            'host' => env('REDIS_SENTINEL_HOST', 'localhost'),
            'port' => env('REDIS_SENTINEL_PORT', 26379)
        ],
        'options' => [
            'replication' => 'sentinel',
            'service' => env('REDIS_SENTINEL_MASTER_NAME', 'service1'),
            'update_sentinels' => true,
            'parameters' => [
                'database' => env('DB_DEFAULT_INDEX', 0),
                'password' => env('REDIS_SENTINEL_PASSWORD', null)
            ]
        ]
    ],

    // optional configuration for a separate Redis 'database' for just a cache
    'cache' => [
        [
            'host' => env('REDIS_SENTINEL_HOST', 'localhost'),
            'port' => env('REDIS_SENTINEL_PORT', 26379)
        ],
        'options' => [
            'replication' => 'sentinel',
            'service' => env('REDIS_SENTINEL_MASTER_NAME', 'service2'),
            'update_sentinels' => true,
            'parameters' => [
                'database' => env('DB_CACHE_INDEX', 1), // note the differing 'database' number
                'password' => env('REDIS_SENTINEL_PASSWORD', null)
            ]
        ]
    ],

    'queues' => [
        'host' => env('REDIS_HOST', '127.0.0.1'),
        'port' => env('REDIS_PORT', 6379),
        'options' => [
            'parameters' => [
                'database' => 2,
                'password' => env('REDIS_PASSWORD', null),
            ]
        ]
    ],
];

$redisConfiguration = env('REDIS_DRIVER', 'redis') === 'redis-sentinel' 
? $redisSentinelConfiguration 
: $redisDefaultConfiguration;

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_CLASS,

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

    'default' => env('DB_CONNECTION', 'sqlite'),

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
            'driver'   => 'sqlite',
            'database' => env('DB_DATABASE', 'storage/database.sqlite'),
            'prefix'   => '',
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'localhost'),
            'port'      => env('DB_PORT', ''),
            'database'  => env('DB_DATABASE', 'database'),
            'username'  => env('DB_USERNAME', 'root'),
            'password'  => env('DB_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],

        'pgsql' => [
            'driver'    => 'pgsql',
            'host'      => env('DB_HOST', 'localhost'),
            'port'      => env('DB_PORT', '5432'),
            'database'  => env('DB_DATABASE', 'database'),
            'username'  => env('DB_USERNAME', 'root'),
            'password'  => env('DB_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
            'schema'    => 'public',
            'dump' => [
                'dump_binary_path' => '/usr/bin/',
                'use_single_transaction',
                'timeout' => 60 * 5, // 5 minute timeout
            ],
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => env('DB_HOST', 'localhost'),
            'port'     => env('DB_PORT', ''),
            'database' => env('DB_DATABASE', 'database'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'prefix'   => '',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk have not actually be run in the databases.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => $redisConfiguration,

    /*
    |--------------------------------------------------------------------------
    | Use DB configuration for testing
    |--------------------------------------------------------------------------
    |
    | When running plugin tests Winter CMS by default uses SQLite in memory.
    | You can override this behavior by setting `useConfigForTesting` to true.
    |
    | After that Winter CMS will take DB parameters from the config.
    | If file `/config/testing/database.php` exists, config will be read from it,
    | but remember that when not specified it will use parameters specified in
    | `/config/database.php`.
    |
    */

    'useConfigForTesting' => false,

];
