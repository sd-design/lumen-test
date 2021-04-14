<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->environment();
});

$router->get('/controller', 'MyController@hello');

$router->get('/data', 'DataController@store');
$router->get('/data/users', 'DataController@users');
$router->get('/data/users/facades', 'DataController@usersDB');

$router->get('/store', 'MyController@store');
$router->get('/405', 'My2Controller@hello');
