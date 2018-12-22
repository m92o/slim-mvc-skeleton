<?php
namespace Controllers;

use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;
use Libs\Facade;

/**
 * Application controller class
 */
abstract class AppController {
    private $container;
    protected $view;

    public function __construct(Container $container) {
        $this->container = $container;
        $this->view = $container['renderer'];
        Facade::setFacadeContainer($container);

        // Initilize database connection
        $this->container['db'];
    }

    public function index(Request $request, Response $response, array $args) {
        return 'index';
    }
}