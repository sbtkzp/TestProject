<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    $data = new stdclass;
    $data->queryForUser = Service\Users::getQuery();
    $data->queryForPost = Service\Posts::getQuery();
    $data->post = Service\Posts::getPostData(1);
    return view('top', ['data' => $data]);
});

Route::get('hoge', function () {
    return 'hogehoge';
});
