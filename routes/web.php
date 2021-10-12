<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CreatePost;
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



Route::get('/',[App\Http\Controllers\HomeController::class,'index']);
Route::get('/home',[App\Http\Controllers\HomeController::class,'index']);

Route::get('/property',[App\Http\Controllers\PropertyController::class,'index']);

Route::get('/property-single', function () {
    return view('users.propertysingle');
});


Auth::routes();

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin','middleware' => ['auth', 'verified','admin']], function() {
	Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/create',[CreatePost::class,'index'])->name('create');
    Route::post('/post/store',[CreatePost::class,'store']);

});

Route::group(['prefix' => 'agent','middleware' => ['auth', 'verified','agent']], function() {
	Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/create',[CreatePost::class,'index'])->name('create');
    Route::post('/post/store',[CreatePost::class,'store']);

});
