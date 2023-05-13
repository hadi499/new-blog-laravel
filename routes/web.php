<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('home',[
        'title' => 'home',
        'active' => 'home'
    ]);
});

Route::get('/about', function() {
    return view('about', [
        'title' => 'about',
        'active' => 'about'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',    
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by category : $category->name",
        'active' => 'posts',
        'posts' => $category->posts //satu category mempunyai banyak posts
      
    ]);
});


Route::get('/authors/{author:username}', function(User $author) {

    return view('posts', [
        'title' => "Post by author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts
       
    ]);

});