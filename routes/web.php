<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticlesController;

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
    return view('index');
});

// Login sahifasi 
Route::get('/login',       [AuthController::class, 'login']);
Route::post('/checklogin', [AuthController::class, 'checklogin']);
Route::get('/admin', function (){
    return view('layouts.admin');
});
//Login tugashi
//Maqolalar sahifasi
Route::get('/articles',           [ArticlesController::class, 'index']);
Route::get('/addarticles',        [ArticlesController::class, 'create']);
Route::post('/addarticlescode',   [ArticlesController::class, 'store']);
Route::post('/editarticles',      [ArticlesController::class, 'edit']);
Route::post('/editarticlescode',  [ArticlesController::class, 'update']);
Route::post('/deletearticles',    [ArticlesController::class, 'destroy']);
//Maqolalar tugashi 
//Biz haqimizda
Route::get('/about',              [])
//Biz haqimizda tugashi








