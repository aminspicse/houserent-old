<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CreatePost;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppsData;
use App\Http\Controllers\mst\AppsCountryController;
use App\Http\Controllers\mst\AppsDivisionController;



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

	// COuntry
	Route::resource('/country',AppsCountryController::class);
	Route::resource('/division',AppsDivisionController::class);
});

Route::get('/create',[CreatePost::class,'index']);
Route::post('/getdivision', [AppsData::class,'getDivision']);
Route::post('/getdistrict', [AppsData::class,'getDistrict']);
Route::post('/getthana', [AppsData::class,'getThana']);
Route::post('/getunion', [AppsData::class,'getUnion']);

Route::group(['prefix' => 'agent','middleware' => ['auth', 'verified','agent']], function() {
	Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/create',[CreatePost::class,'index'])->name('create');
	//Route::get('/getdivision/{id}', [CreatePost::class,'getdivision']);
    Route::post('/post/store',[CreatePost::class,'store']);

});

Route::group(['middleware' => ['auth', 'verified']], function() {
	Route::get('/change-profile', [ProfileController::class, 'create'])->name('change-profile');
	Route::post('/change-profile', [ProfileController::class, 'store'])->name('change-profile');
	Route::post('/update-profile', [ProfileController::class, 'update'])->name('update-profile');

});
