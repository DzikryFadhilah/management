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
  if(\Auth::check()){
      return view('welcome');
  }
  else{
    return redirect('login');
  }

});


Route::group(['middleware' => 'web'], function() {
  Route::get('login','Auth\AuthController@getLogin');
  Route::get('logout','Auth\AuthController@getLogout');
  Route::post('login','Auth\AuthController@postLogin');
});

Route::get('greeting','MailerController@index');
Route::post('greeting','MailerController@store');

Route::get('/input_data',['as'=>'view_input','uses'=>'DataController@view_input']);
Route::get('/view_data',['as'=>'view_data','uses'=>'DataController@view_data']);
Route::post('/update_data',['as'=>'update_data','uses'=>'DataController@update_data']);
Route::get('/delete_data/{id}',['as'=>'delete_data','uses'=>'DataController@delete_data']);
Route::get('/edit_data/{id}',['as'=>'edit_data','uses'=>'DataController@edit_data']);
Route::post('/data_penyewa/add',['as'=>'add_data','uses'=>'DataController@add_data']);
Route::get('/input_akun/add',['as'=>'input_akun','uses'=>'DataController@input_akun']);
Route::get('/lihat_akun',['as'=>'lihat_akun','uses'=>'DataController@lihat_akun']);
Route::post('post_akun', ['as' => 'post_akun', 'uses' => 'DataController@post_akun']);
// Route::get('/login','DataController@view_login');
