<?php
$environments = [
    'production' => [
        'displayErrorDetails' => false, // set to false in production
        'addContentLengthHeader' => true, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => VIEWS_DIR,
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-mvc-app',
            'path' => LOGS_DIR . 'app.log',
            'level' => Monolog\Logger::ERROR,
        ],

        // Database settings
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'database',
            'username' => 'user',
            'password' => 'password',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
        ],
    ],
    'development-docker' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => VIEWS_DIR,
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-mvc-app',
            'path' => LOGS_DIR . 'app.log',
            'level' => Monolog\Logger::DEBUG,
        ],

        // Database settings
        'db' => [
            'driver' => 'mysql',
            'host' => 'mysql',
            'database' => 'sample',
            'username' => 'sample',
            'password' => 'ze2i4woKXnvo3f3K',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
        ],
    ],
    'development' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => VIEWS_DIR,
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-mvc-app',
            'path' => LOGS_DIR . 'app.log',
            'level' => Monolog\Logger::DEBUG,
        ],

        // Database settings
        'db' => [
            'driver' => 'sqlite',
            'database' => SQLITE_DIR . 'sample.sqlite',
        ],
    ]
];

//print_r($environment);
return [
    'settings' => (function ($environments) {
        $env = (String) getenv('SLIM_ENV');
        $key = array_key_exists($env, $environments) ? $env : 'development';
        return $environments[$key];
    })($environments)
];
