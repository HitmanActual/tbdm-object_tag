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

$router->group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function() use($router)
{

    $router->get('object-tags','ObjectTagsController@index');
    $router->post('object-tags','ObjectTagsController@store');
    $router->get('object-tags/{object-tag}','ObjectTagsController@show');
    $router->put('object-tags/{object-tag}','ObjectTagsController@update');
    $router->patch('object-tags/{object-tag}','ObjectTagsController@update');
    $router->delete('object-tags/{object-tag}','ObjectTagsController@destroy');
    $router->delete('object-tags/{object-tag}','ObjectTagsController@destroy');
});