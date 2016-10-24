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

Route::get('/',['as' => 'front.index','uses' => 'FrontController@index']);
Route::resource('front','FrontController');
Route::get('/',['as' => 'front.create','uses' => 'FrontController@create']);
Route::resource('front','FrontController');

Route::group(['prefix'=>'electronica','middleware'=>'auth'],function(){

  Route::get('/', ['as' => 'electronica.index', function () {
      return view('index');
  }]);

  Route::resource('users','UsersController');
  Route::get('user/{id}/destroy',['uses'=>'UsersController@destroy',
                                  'as' => 'electronica.users.destroy']);

  Route::resource('estudiantes','EstudiantesController');
  Route::get('estudiante/{id}/destroy',['uses'=>'EstudiantesController@destroy',
                                  'as' => 'electronica.estudiantes.destroy']);
});

Route::get('electronica/auth/login',['uses'=>'Auth\AuthController@getLogin',
                                'as' =>'electronica.auth.login']);

Route::post('electronica/auth/login',['uses'=>'Auth\AuthController@postLogin',
                              'as' =>'electronica.auth.login']);

Route::get('electronica/auth/logout',['uses'=>'Auth\AuthController@logout',
                                'as' =>'electronica.auth.logout']);

/*
Route::group(['prefix' => 'admin'], function (){

    Route::resource('users','UsersController');

});
*/