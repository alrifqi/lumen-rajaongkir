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

$router->group(['prefix'=>'api'], function () use ($router) {
    $router->get('province', ['uses'=>'ProvinceController@showAll']);
    $router->get('province/{id}', ['uses'=>'ProvinceController@showOne']);
    $router->get('city', ['uses'=>'CityController@showAll']);
    $router->get('city/{id}', ['uses'=>'CityController@showOne']);
});

$router->group(['prefix'=>'search'], function () use ($router) {
    $router->get('provinces', ['uses'=>'ProvinceController@search']);
    $router->get('cities', ['uses'=>'CityController@search']);
});