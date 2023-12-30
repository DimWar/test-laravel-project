<?php

use App\Http\Controllers\CategoryVideoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/videos',[VideoController::class,'index']);
// Route::get('/videos', 'App\Http\Controllers\VideoController@index');

Route::get('/',[IndexController::class,'index'])->name('index') ;

Route::get('/videos/create',[VideoController::class,'create'])->name('videos.create') ;

Route::post('/videos',[VideoController::class,'store'])->name('videos') ;

Route::get('/videos/{video:slug}',[VideoController::class,'show'])->name('videos.show');

Route::get('/videos/{video}/edit',[VideoController::class,'edit'])->name('videos.edit');

Route::post('/videos/{video}',[VideoController::class,'edited'])->name('videos.edited');

Route::get('/categories/{category}/videos' , [CategoryVideoController::class , 'index'])->name('categories.videos.index') ;