<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

//Route for Main Page
Route::get('/',[PagesController::class, 'index']);
//Route for About Us Page
Route::get('/about',[PagesController::class, 'about']);
//Route for Service Page
Route::get('/services',[PagesController::class, 'services']);
//Route for Posts
Route::get('/posts',[PostsController::class, 'index']);
Route::get('/posts/{id}',[PostsController::class, 'show']);
Route::get('/posts_create',[PostsController::class, 'create']);
Route::post('/posts_store',[PostsController::class, 'store']);
Route::get('/posts_edit/{id}',[PostsController::class, 'edit']);
Route::post('/posts_update',[PostsController::class, 'update']);
Route::post('/posts_delete',[PostsController::class, 'destroy']);

//Return "<h1> HELLO THERE <h1>";
Route::get('/hello', function () {
   return "test.hello";
});

Route::get('/user/{id}', function ($id) {
    return 'HELLO' .$id. "!";
 });
