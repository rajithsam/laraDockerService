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

$router->get('/', function () use ($router) 
{
    return $router->app->version();
});


//Product Routes
$router->get('api/product','ProductController@index');
 
$router->get('api/product/{id}','ProductController@show');
 
$router->post('api/product','ProductController@save');
 
$router->put('api/product/{id}','ProductController@update');
 
$router->delete('api/product/{id}','ProductController@delete');