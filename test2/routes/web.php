<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 原本的
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('test');
// });

Route::get('/', function () {
    return view('index');
});



Route::get('/go_taishan', function () {
    return view('taishan');
});


Route::get('/f1', function () {
    return view('f1');
});
Route::get('/f2', function () {
    return view('f2');
});
Route::get('/f3', function () {
    return view('f3');
});