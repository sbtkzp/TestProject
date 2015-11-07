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

use Service\UserService;

Route::get('/', function () {
    $data = new stdclass;
    $data->query = UserService::getQuery();
    return view('top', ['data' => $data]);
});
