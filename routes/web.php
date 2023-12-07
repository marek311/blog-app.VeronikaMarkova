<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;


use App\Models\Post;
use App\Models\Category;
use App\Models\User;


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

/*
Route::get('/', function () {
    return view('blog');
}); */

//Route::get('/', function () {
 //   return view('posts', ['posts' => Post::all()]);
//});



Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest()->with('category','author') ->get()
    ]);
});

//route mmodel binding      mena musia matchovat variable name with wild card name

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post]);
});


Route::get('categories/{category:slug}', function (Category $category ) {
    return view('posts', [
        'posts' => $category->posts->load(['category','author'])
    ]);
});

Route::get('authors/{author:username}', function (User $author ) {
    return view('posts', [
        'posts' => $author->posts->load(['category','author'])
    ]);
});


Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');  //musi byt autorizovany
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest')->name('login');  //display
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest'); //proces
Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth'); //proces


Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');

Route::get('login',[SessionController::class,'create'])->middleware('guest');
Route::post('login',[SessionController::class,'store'])->middleware('guest');
Route::post('logout',[SessionController::class,'destroy'])->middleware('auth');

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('posts/{comment}/edit', [PostCommentsController::class, 'edit'])->name('comments.edit');
Route::put('posts/{comment}/update', [PostCommentsController::class, 'update'])->name('comments.update');



Route::delete('posts/{comment}/destroy', [PostCommentsController::class, 'destroy'])->name('comments.delete');





Route::get('create', [PostController::class, 'create'])->middleware('auth');


