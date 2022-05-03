<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialsController;
use App\Models\Articlies;
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
    $articlies = Articlies::all();
    return view('index')->with(['articlies' => $articlies]);
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
// About tugashi
// Departments
Route::get('/department',          [DepartmentController::class, 'index']);
Route::get('/adddepartment',       [DepartmentController::class, 'create']);
Route::post('/adddepartmentcode',  [DepartmentController::class, 'store']);
Route::post('/editdepartment',     [DepartmentController::class, 'edit']);
Route::post('/editdepartmentcode', [DepartmentController::class, 'update']);
Route::post('/deletedepartment',   [DepartmentController::class, 'destroy']);
//Departments
// Contact
Route::get('/contact',             [ContactController::class, 'index']);
Route::post('/contactcode',        [ContactController::class, 'store']);
//Contact tugashi
// Doctor
Route::get('/doctor',               [DoctorController::class,  'index']);
Route::get('/adddoctor',            [DoctorController::class,  'create']);
Route::post('/adddoctorcode',       [DoctorController::class,  'store']);
Route::post('/editdoctor',          [DoctorController::class,  'edit']);
Route::post('/editdoctorcode',      [DoctorController::class,  'update']);
Route::post('/deletedoctor',        [DoctorController::class,  'destroy']);
//Doctor tugashi
// Gallery
Route::get('/gallery',              [GalleryController::class, 'index']);
Route::get('/addgallery',           [GalleryController::class, 'create']);
Route::post('/addgallerycode',      [GalleryController::class, 'store']);
Route::post('/editgallery',         [GalleryController::class, 'edit']);
Route::post('/editgallerycode',     [GalleryController::class, 'update']);
//Gallery tugashi
//Testimomials
Route::get('/testimonial',          [TestimonialsController::class, 'index']);
Route::get('/addtestimonial',       [TestimonialsController::class, 'create']);
Route::post('/addtestimonialcode',  [TestimonialsController::class, 'store']);
Route::post('/edittestimonial',     [TestimonialsController::class, 'edit']);
Route::post('/edittestimonialcode', [TestimonialsController::class, 'update']);
Route::post('/deletetestimonial',   [TestimonialsController::class, 'destroy']);

//Testimomials tugashi




