<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('blog-header-menus', HeaderMenuController::class);
    $router->resource('blog-header-sub-menus', HeaderSubMenu::class);

    $router->resource('logos', LogosControler::class);
    $router->resource('copy-writes', CopyWriteCotroller::class);

    $router->resource('header-texts', HeaderTextController::class);
    $router->resource('s-e-os', SEOController::class);

    $router->resource('where-ares', WhereAreController::class);
    $router->resource('steps-sales', StepsSalesrController::class);
    $router->resource('siedbars', SiedbarController::class);
    $router->resource('contacts', ContactsController::class);

    $router->resource('responces', ResponseController::class);
});
