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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::controller('accounts','AccountsController',[
        'getEdit' => 'account.edit',
        'getPassword' => 'account.password',
        'putUpdate' => 'account.update',
        'putPassword' => 'account.update.password',
]);


Route::controller('organization', 'OrganizationController', [
    'getIndex' => 'organization.list',
    'getCreate' => 'organization.create',
    'postStore' => 'organization.store',
]);


Route::controller('client', 'ClientController', [
    'getIndex' => 'client.list',
    'getCreate' => 'client.create',
    'postStore' => 'client.store',
]);

Route::controller('task', 'TaskController', [
    'getIndex' => 'task.list',
]);


Route::get('image/{path}', 'ImageController@index')->where('path', '.+');