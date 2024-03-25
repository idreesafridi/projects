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

Route::get('/',[PostController::class,'index'])->name('home');
Route::middleware(['auth'])->group(function () {

Route::get('/search',[ PostController::class, 'search']); 
Route::get('/add-post',[PostController::class,'show'])->name('show.post');
Route::post('/add-post', [PostController::class, 'store'])->name('add-post');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comment_view', [CommentController::class, 'view'])->name('comments.view');
Route::get('/posts/{id}/comments', [CommentController::class,'getPostComments'])->name('posts.comments');


Route::Post('/logout', [LogoutController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
Route::any('/register-form', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::Post('/register', [RegisterController::class, 'store'])->name('users.register');

Route::any('/login-form', [LoginController::class, 'showLoginForm'])->name('login');
Route::Post('/login', [LoginController::class, 'login'])->name('user.login');
});


