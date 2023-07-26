<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ComunityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeamController;
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

Route::get('/laravel', function () {
    return view('welcome');
});

// imitasi
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/comunity', [ComunityController::class, 'index']);

// halaman semua post
Route::get('/blog', [PostsController::class, 'index']);
// halaman single post
Route::get('/posts/{post:slug}', [PostsController::class, 'show']);

// halaman categories
Route::get('/categories', [CategoriesController::class, 'index']);

// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// halaman register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');



// halaman post by category
    // Route::get('/categories/{category:slug}', function(Category $category){
    //     return view('posts', [
    //         'title' => "Post by Category : $category->name",
    //         'posts' => $category->posts->load('author', 'category'),
    //     ]);
    // });


// halam post by author
    // Route::get('/authors/{author:username}', function(User $author){
    //     return view('posts', [
    //         'title' => "Post by Author : $author->name",
    //         'posts' => $author->posts->load('category', 'author')
    //     ]);
    // });