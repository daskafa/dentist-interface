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

Route::view('', 'welcome')->name('home');
Route::view('/tedavilerimiz', 'therapy')->name('therapy');
Route::view('/hakkimizda', 'hakkimizda')->name('hakkimizda');
Route::view('/tedavilerimiz/discekimi', 'discekimi')->name('discekimi');
Route::view('/tedavilerimiz/implant', 'implant')->name('implant');
Route::view('/tedavilerimiz/kanaltedavisi', 'kanaltedavisi')->name('kanaltedavisi');
Route::view('/tedavilerimiz/disbeyazlatma', 'disbeyazlatma')->name('disbeyazlatma');
Route::view('/tedavilerimiz/cocukdishekimligi', 'cocukdishekimligi')->name('cocukdishekimligi');
Route::view('/tedavilerimiz/dolgu', 'dolgu')->name('dolgu');
Route::view('/tedavilerimiz/estetikdishekimligi', 'estetikdishekimligi')->name('estetikdishekimligi');
Route::view('/tedavilerimiz/disetitedavileri', 'disetitedavileri')->name('disetitedavileri');
Route::view('/tedavilerimiz/zirkonyum', 'zirkonyum')->name('zirkonyum');
Route::view('/tedavilerimiz/porselen', 'porselen')->name('porselen');
Route::view('/fotografgalerisi', 'fotografgalerisi')->name('fotografgalerisi');
Route::view('/iletisim', 'iletisim')->name('iletisim');
Route::view('/insankaynaklari', 'insankaynaklari')->name('insankaynaklari');
