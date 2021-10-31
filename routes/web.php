<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppsData;

//guest
use App\Http\Controllers\guest\HomeController;
use App\Http\Controllers\guest\PropertyController;
use App\Http\Controllers\guest\SearchController;

// Master Data Controller for admin
use App\Http\Controllers\mst\AppsCountryController;
use App\Http\Controllers\mst\AppsDivisionController;
use App\Http\Controllers\mst\AppsDistrictController;
use App\Http\Controllers\mst\AppsUpazilaController;
use App\Http\Controllers\mst\AppsUnionController;
use App\Http\Controllers\mst\PropertyTypeController;
use App\Http\Controllers\mst\PropertyForController;
use App\Http\Controllers\admin\ManagePostController;

// Admin
use App\Http\Controllers\admin\AdminDashboardController;

// Agent
use App\Http\Controllers\agent\AgentDashboardController;

// User
use App\Http\Controllers\user\UserDashboardController;

// common access controller
use App\Http\Controllers\post\PostController;
use App\Http\Controllers\ActivityController;

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/property',[PropertyController::class,'index']);
Route::get('/property-single/{id}',[HomeController::class, 'show']);
Route::get('/search/',[SearchController::class, 'search']);


Auth::routes();

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin','middleware' => ['auth', 'verified','admin']], function() {
	Route::get('/', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
	Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
    

	// COuntry
	Route::resource('/country',AppsCountryController::class);
	Route::resource('/division',AppsDivisionController::class);
	Route::resource('/district',AppsDistrictController::class);
	Route::resource('/upazila',AppsUpazilaController::class);
	Route::resource('/union',AppsUnionController::class);
	Route::resource('/property-type',PropertyTypeController::class);
	Route::resource('/property-for',PropertyForController::class);
	
	Route::get('/post-type/{post_id}/{type_id}',[ManagePostController::class,'PostType']);
	Route::get('/active-post',[ManagePostController::class,'activepost']);
	Route::get('/inactive-post',[ManagePostController::class,'inactivePost']);
	Route::get('/pending-post',[ManagePostController::class,'pendingPost']);
	Route::get('/view-post/{id}',[ManagePostController::class,'viewPost']);
	Route::get('/change-status/{post_id}/{status_id}',[ManagePostController::class,'changeStatus']);
});


Route::group(['prefix' => 'agent','middleware' => ['auth', 'verified','agent']], function() {
	Route::get('/', [AgentDashboardController::class, 'dashboard'])->name('dashboard');
	//Route::resource('/post',PostController::class);
    
});

Route::group(['prefix' => 'user','middleware' => ['auth', 'verified','user']], function() {
	Route::get('/',[UserDashboardController::class,'dashboard']);
	//Route::resource('/post',PostController::class);
});

// common access user, agent and admin
Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::resource('/post',PostController::class);
	Route::get('/post/delete/{id}',[PostController::class, 'deletePost']);
	Route::get('/activity',[ActivityController::class,'index']);
});


Route::post('/getdivision', [AppsData::class,'getDivision']);
Route::post('/getdistrict', [AppsData::class,'getDistrict']);
Route::post('/getthana', [AppsData::class,'getThana']);
Route::post('/getunion', [AppsData::class,'getUnion']);
