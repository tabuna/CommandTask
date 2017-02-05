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

Route::get('/', 'WelcomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::controller('accounts','AccountsController',[
        'getEdit' => 'account.edit',
        'getPassword' => 'account.password',
        'putUpdate' => 'account.update',
        'putPassword' => 'account.update.password',
]);


Route::get('/chat', function (){
    return view('chat.main');
});

Route::get('/organizations', function (){
    return view('organizations.index');
});

Route::get('/organizations/edit', function (){
    return view('organizations.edit');
});



Route::resource('organization','Organization\OrganizationController');
Route::resource('organization.user','Organization\UserController');



Route::controller('client', 'ClientController', [
    'getIndex' => 'client.list',
    'getCreate' => 'client.create',
    'postStore' => 'client.store',
]);

Route::controller('task', 'TaskController', [
    'getIndex' => 'task.list',
]);


Route::get('image/{path}', 'ImageController@index')->where('path', '.+');