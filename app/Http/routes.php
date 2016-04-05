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

Route::get('/', 'MainController@index');

Route::get('/hello', function () {
    return 'hello world';
});

Route::get('/welcome/{id}', 'WelcomeController@showHello');

Route::get('/test', 'TestController@getTestPage');

Route::get('/test/middleware', ['middleware' => ['abcd'], function() {
	echo 'progressing request';
}]);


/*
Route::get('pages/aboutus', 'pageController@aboutus');
Route::get('pages/location', 'pageController@location');
Route::get('pages/copyright', 'pageController@copyright');
*/
Route::get('/pages/{pageId}', 'pageController@page');

//Route::post('todo', 'TodoController@store');
Route::post('todo/done/{id}','TodoController@done');
Route::resource('todo','TodoController');