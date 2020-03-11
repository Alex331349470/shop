<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('users','UsersController@index');
    $router->get('goods','GoodsController@index');
    $router->get('goods/create','GoodsController@create');
    $router->post('goods','GoodsController@store');
    $router->get('goods/{id}/edit', 'GoodsController@edit');
    $router->put('goods/{id}', 'GoodsController@update');

    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');
});
