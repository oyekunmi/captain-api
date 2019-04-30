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
    return $router->app->version();
});

$router->get('/auth', function(){
    $user =new stdClass;
    $user->name = "Captain";
    return $user;
});

$router->get("/vessels", function(){
    $v = new stdClass;
    $vessels = [];
    return $vessels;
});

$router->get('/vessels/{id}', function($id){
    return 'Vessel '.$id;
});

$router->get('/certificates', function(){
    $c = new stdClass;
    $certificates = [];
    return $certificates;
});

$router->get('/certificates/{id}', function($id){
    return 'Certificate '.$id;
});