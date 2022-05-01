<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DepartmentController;

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
Route::get('/login',              [AuthController::class, 'login']);
Route::post('/checklogin',        [AuthController::class, 'checklogin']);
Route::get('/admin',              [AuthController::class,  'admin']);
//Login tugashi
//Articles 
Route::get('/articles',           [ArticlesController::class, 'index']);
Route::get('/addarticles',        [ArticlesController::class, 'create']);
Route::post('/addarticlescode',   [ArticlesController::class, 'store']);
Route::post('/editarticles',      [ArticlesController::class, 'edit']);
Route::post('/editarticlescode',  [ArticlesController::class, 'update']);
Route::post('/deletearticles',    [ArticlesController::class, 'destroy']);
//Articles tugashi 
//About
Route::get('/about',              [AboutController::class, 'index']);
Route::get('/addabout',           [AboutController::class, 'create']);
Route::post('/addaboutcode',      [AboutController::class, 'store']);
Route::post('/editabout',         [AboutController::class,  'edit']);
Route::post('/editaboutcode',     [AboutController::class,  'update']);
Route::post('/deleteabout',       [AboutController::class,  'destroy']);
//About tugashi
// Departments
Route::get('/department',        [DepartmentController::class, 'index']);
//Departments







