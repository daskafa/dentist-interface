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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/tedavilerimiz', function(){
    return view('therapy');
});
Route::get('/tedavilerimiz/discekimi', function(){
    return view('discekimi');
});
Route::get('/tedavilerimiz/implant', function(){
    return view('implant');
});
Route::get('/tedavilerimiz/kanaltedavisi', function(){
    return view('kanaltedavisi');
});
Route::get('/tedavilerimiz/disbeyazlatma', function(){
    return view('disbeyazlatma');
});
Route::get('/tedavilerimiz/cocukdishekimligi', function(){
    return view('cocukdishekimligi');
});
Route::get('/tedavilerimiz/dolgu', function(){
    return view('dolgu');
});
Route::get('/tedavilerimiz/estetikdishekimligi', function(){
    return view('estetikdishekimligi');
});
Route::get('/tedavilerimiz/disetitedavileri', function(){
    return view('disetitedavileri');
});
Route::get('/tedavilerimiz/zirkonyum', function(){
    return view('zirkonyum');
});
Route::get('/tedavilerimiz/porselen', function(){
    return view('porselen');
});




Route::get('/fotografgalerisi', function(){
    return view('fotografgalerisi');
});
Route::get('/insankaynaklari', function(){
    return view('insankaynaklari');
});
Route::get('/iletisim', function(){
    return view('iletisim');
});
Route::get('/insankaynaklari', function(){
    return view('insankaynaklari');
});

