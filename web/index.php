<?php
if (session_status() == true) {
    session_start();
}
require '../vendor/autoload.php';
require '../Router.php';

$router = new Router();

$router->get('/register', 'RegisterController::register');
$router->post('/new_user', 'RegisterController::add');
$router->get('/login', 'LoginController::login');
$router->post('/connect', 'LoginController::connect');
$router->get('/', 'MainController::main');
$router->get('/logout', 'MainController::logout');
$router->get('/gallery', 'ImageController::gallery');
$router->get('/gallery_user', 'ImageController::gallery_user');
$router->post('/remember', 'ImageController::remember');
$router->post('/unremember', 'ImageController::unremember');
$router->get('/search', 'SearchController::search');
$router->post('/image', 'ImageController::add');
$router->_404('ErrorController::_404');

$view = $router->dispatch();
$view->render();
