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

Route::name('planes')->get('planes/','UsuariosController@planes');

//--------------registro--------------//

// Route::name('registro')->get('registro/','UsuariosController@registro');
// Route::name('guardar_registro')->post('guardar_registro/','UsuariosController@guardar_registro');

// //--------------login--------------//
// Route::name('login')->get('login/','LoginController@login');
// Route::name('validar')->post('validar/','LoginController@validar');
// Route::name('logout')->get('logout/','LoginController@logout');
Route::name('perfil')->get('perfil/','LoginController@perfil');



//--------------files--------------//
Route::name('indexf')->get('indexf/','FileController@indexf');
Route::name('storef')->post('storef/','FileController@storef');
Route::name('createf')->get('createf/','FileController@createf');
Route::name('showf')->get('showf/{file}','FileController@showf');
Route::name('updatef')->put('updatef/{file}','FileController@updatef');
Route::name('destroyf')->delete('destroyf/{file}','FileController@destroyf');
Route::name('editf')->get('editf/{file}','FileController@editf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

//braintree suscription

Route::get('/plans', 'PlansController@index');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/plan/{plan}', 'PlansController@show');
    Route::get('/braintree/token', 'BraintreeTokenController@token');
    Route::post('/subscribe', 'SubscriptionsController@store');
});

Route::name('textcreates')->get('textcreates/','TextsController@textcreates');
Route::name('store')->post('store/','TextsController@store');
Route::name('textindex')->get('textindex/','TextsController@textindex');
Route::name('texteditar')->get('texteditar/','TextsController@texteditar');