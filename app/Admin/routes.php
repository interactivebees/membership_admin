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

    $router->resource('registers', MemberRegistersController::class);

    $router->resource('individual-registers', IndividualMemberRegistersController::class);
    $router->resource('hospital-registers', HospitalMemberRegistersController::class);

    $router->resource('faqs', FaqController::class);
});
