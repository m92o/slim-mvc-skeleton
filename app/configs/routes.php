<?php
use Controllers\HomeController;

// Routes
$app->get('/', HomeController::class . ':index');
