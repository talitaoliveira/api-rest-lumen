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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'books/'], function ($app) {
    $app->get('','BooksController@index'); //get all the routes	
    $app->get('/{id}/','BooksController@view'); //get all the routes
    $app->post('','BooksController@store'); //get all the routes
    $app->put('/{id}/','BooksController@update'); //get all the routes
});