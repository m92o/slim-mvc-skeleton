<?php
namespace Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Controllers\AppController;
use Models\User;
use Libs\Log;

class HomeController extends AppController {
    public function index(Request $request, Response $response, array $args) {
        $user = User::find(1);
        //LOG::info('User', ['fullName' => $user->fullName]);
        return $this->view->render($response, 'home.phtml', ['user_name' => $user->fullName]);
    }
}