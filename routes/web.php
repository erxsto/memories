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
