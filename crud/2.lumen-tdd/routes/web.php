<?php

/*
Accept: application/json
Authorization: TOKEN
_method: DELETE
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/api/login', 'UserController@login');
$router->post('/api/user', 'UserController@store');

$router->group(['prefix' => 'api', 'middleware' => 'auth'],function($router){
    $router->get('/user/{id}', 'UserController@view');
    $router->delete('/user/{id}', 'UserController@delete');
    $router->get('/users', 'UserController@list');
    $router->put('/user/{id}', 'UserController@update');
    $router->post('/logout', 'UserController@logout');
});

$router->group(['prefix' => 'produtos', 'middleware' => 'auth'],function($router){
    $router->get('/view', 'ProdutosControlador@index');
});


