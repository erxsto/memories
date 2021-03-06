<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('planes')->get('planes/', 'UsuariosController@planes');

//--------------registro--------------//

// Route::name('registro')->get('registro/','UsuariosController@registro');
// Route::name('guardar_registro')->post('guardar_registro/','UsuariosController@guardar_registro');

// //--------------login--------------//
// Route::name('login')->get('login/','LoginController@login');
// Route::name('validar')->post('validar/','LoginController@validar');
// Route::name('logout')->get('logout/','LoginController@logout');
Route::name('perfil')->get('perfil/', 'LoginController@perfil');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

//braintree suscription

Route::get('/plans', 'PlansController@index');


Route::group(['middleware' => 'auth'], function () {
    //--------------files--------------//
    Route::name('indexf')->get('indexf/', 'FileController@indexf');
    Route::name('storef')->post('storef/', 'FileController@storef');
    Route::name('storeff')->post('storeff/', 'FileController@storeff');
    Route::name('createf')->get('createf/', 'FileController@createf');
    Route::name('showf')->get('showf/{file}', 'FileController@showf');
    Route::name('updatef')->put('updatef/{file}', 'FileController@updatef');
    Route::name('destroyf')->delete('destroyf/{file}', 'FileController@destroyf');
    Route::name('editf')->get('editf/{file}', 'FileController@editf');
    Route::name('eliminarArticulo')->get('eliminarArticulo/{id}', 'FileController@eliminarArticulo');

    Route::get('/plan/{plan}', 'PlansController@show');
    Route::get('/braintree/token', 'BraintreeTokenController@token');
    Route::post('/subscribe', 'SubscriptionsController@store');
    Route::name('textcreates')->get('textcreates/', 'TextsController@textcreates');
    Route::name('store')->post('store/', 'TextsController@store');
    Route::name('textindex')->get('textindex/', 'TextsController@textindex');
    Route::name('texteditar')->get('texteditar/{text}', 'TextsController@texteditar');
    Route::name('update')->put('update/{text}', 'TextsController@update');
    Route::name('destroy')->delete('destroy/{text}', 'TextsController@destroy');

    // Registro Herederos

    Route::name('registro_h')->get('registro_h/', 'HerederosController@registro_h');
    Route::name('guardar_registro')->post('guardar_registro/', 'HerederosController@guardar_registro');
    Route::name('mis_herederos')->get('mis_herederos/', 'HerederosController@mis_herederos');
    Route::name('eliminar_h')->delete('eliminar_h/{hro}', 'HerederosController@eliminar_h');

    //Youtube
    Route::resource('video', 'VideoController');
});
//Perfil 
Route::name('perfil')->get('perfil/', 'UsuariosController@perfil');
Route::name('editar_usr')->get('editar_usr/{id}', 'UsuariosController@editar_usr');
Route::name('salvar')->put('salvar/{id}', 'UsuariosController@salvar');
Route::name('actimg')->post('actimg/', 'UsuariosController@actimg');

// Heredero login
Route::name('login_h')->get('login_h/', 'HerederosController@login_h');
Route::name('validar_h')->get('validar_h/', 'HerederosController@validar_h');
Route::name('index_h')->get('index_h/', 'HerederosController@index_h');
Route::name('downloadfile')->get('download/{id}', 'HerederosController@show');

