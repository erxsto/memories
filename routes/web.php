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
Route::name('index')->get('index/','MemoriesController@index');
Route::name('apartado2')->get('apartado2/','MemoriesController@apartado2');
Route::name('apartado3')->get('apartado3/','MemoriesController@apartado3');
Route::name('apartado4')->get('apartado4/','MemoriesController@apartado4');
Route::name('planes')->get('planes/','UsuariosController@planes');
Route::name('registro')->get('registro/','UsuariosController@registro');
Route::name('guardar_registro')->post('guardar_registro/','UsuariosController@guardar_registro');
//--------------files--------------//
Route::name('indexf')->get('indexf/','FileController@indexf');
Route::name('storef')->post('storef/','FileController@storef');
Route::name('createf')->get('createf/','FileController@createf');
Route::name('showf')->get('showf/{file}','FileController@showf');
Route::name('updatef')->put('updatef/{file}','FileController@updatef');
Route::name('destroyf')->delete('destroyf/{file}','FileController@destroyf');
Route::name('editf')->get('editf/{file}','FileController@editf');
