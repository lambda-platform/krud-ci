<?php

namespace Krud\Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('lambda/krud', [
    'namespace' => 'Krud\Controllers',
    'filter' => 'jwt',
], function (RouteCollection $routes) {

    $routes->post('(:any)/(:any)', 'KrudController::crud/$1/$2', []);
    $routes->post('(:any)/(:any)/(:any)', 'KrudController::crud/$1/$2/$3', []);

    $routes->delete('delete/(:any)/(:any)', 'KrudController::delete/$1/$2', []);
});
$routes->group('lambda/krud', [
    'namespace' => 'Krud\Controllers',

], function (RouteCollection $routes) {

    $routes->post('upload', 'KrudController::fileUpload', []);

});


