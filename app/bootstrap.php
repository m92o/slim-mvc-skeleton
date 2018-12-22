<?php
require 'environment.php';
require APP_DIR . '../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require CONFIGS_DIR . 'settings.php';
$app = new Slim\App($settings);

// Set up dependencies
require CONFIGS_DIR . 'dependencies.php';

// Register middleware
require CONFIGS_DIR . 'middleware.php';

// Register routes
require CONFIGS_DIR . 'routes.php';

// Run app
$app->run();
