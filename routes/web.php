<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/instruinsights/signup' , [LoginController::class, 'signup']);  
Route::post('/instruinsights/signup' , [LoginController::class, 'signup_backend']);  


Route::get('/instruinsights/login' , [LoginController::class, 'login']);  
Route::post('/instruinsights/login' , [LoginController::class, 'login_backend']);  

//Route::get('/instruinsights/home' , [LoginController::class, 'home']); 
Route::get('/instruinsights/home' , [HomeController::class, 'home']); 
//Route::post('/laravelloginsystem/crud' , [LoginController::class, 'crud_backend']); 

Route::get('/instruinsights/home/logout' , [LoginController::class, 'logout']);

Route::get('/instruinsights/upload' , [HomeController::class, 'upload']);
Route::post('/instruinsights/upload' , [HomeController::class, 'upload_backend']);

Route::get('/instruinsights/subjects' , [HomeController::class, 'subjects']);
Route::get('/instruinsights/subjects/get/{id}' , [HomeController::class, 'get_subjects']); 

Route::get('/instruinsights/download' , [HomeController::class, 'download']);

Route::get('/instruinsights/download/{file}' , [HomeController::class, 'pdf_download']);

Route::post('/instruinsights/feedback/{filename}/{Sno}' , [HomeController::class, 'feedback']);