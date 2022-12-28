<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', PostController::class . '@index');
Route::get('/post', PostController::class . '@index');
Route::get('/post/{id}', function($id) {
    $controller = new PostController();
    return $controller->showPost($id);
});

Route::get('backend/index', BackendController::class . '@index');
Route::get('backend/', BackendController::class . '@index');
Route::get('backend/create', BackendController::class . '@create');
Route::get('backend/posts-list', BackendController::class . '@getPostsList');

Route::get('/index/{id}/{action}', function ($id, $action) {
    $class = new IndexController();
    return $class->index($id, $action);
});

