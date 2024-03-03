<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\crudController;

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

Route::get('/', [frontController::class, 'index']);
Route::get('article/{slug}',[frontController::class, 'article']);
Route::get('category', [frontController::class, 'category']);
Route::get('search', [frontController::class, 'search']);


Route::get('admin', [adminController::class, 'index']);
// Category
Route::get('viewcategory', [adminController::class, 'viewcategory']);
Route::post('addcategory', [crudController::class, 'insertData']);
Route::get('editcategory/{id}', [adminController::class, 'editcategory']);
Route::post('updatecategory/{id}', [crudController::class, 'updateData']);
Route::post('multipledelete', [adminController::class, 'multipleDelete']);

//Posts
Route::get('add-post', [adminController::class, 'addPost']);
Route::post('addpost', [crudController::class, 'insertData']);
Route::get('all-posts',[adminController::class, 'allPosts']);
Route::get('editpost/{id}', [adminController::class,'editPost']);
Route::post('updatepost/{id}',[crudController::class, 'updateData']);

Route::get('search-content', [frontController::class, 'searchContent']);

//Users
Route::get('all-users', [adminController::class, 'allUsers']);
Route::get('all-comments', [adminController::class, 'allCmts']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::post('addComment', [frontController::class, 'postComment']);