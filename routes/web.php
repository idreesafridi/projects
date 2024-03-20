<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::get('/',[PostController::class,'index']); 
Route::get('/add-post',[PostController::class,'show'])->name('show.post');
Route::post('/add-post', [PostController::class, 'store'])->name('add-post');
Route::any('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comment_view', [CommentController::class, 'view'])->name('comments.view');
Route::get('/search',[ PostController::class, 'search']);


Route::get('/register-form', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('user.register');

Route::get('/login-form', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('user.login');;

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
