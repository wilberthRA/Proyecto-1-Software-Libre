<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
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

Route::get('/', function () {
    $posts = Post::latest();

    if(request('search')){
        $posts->where('title','like','%' . request('search') . '%')
        ->orWhere('body','like','%' . request('search') . '%');
    }
    return view('posts' , [
        'posts' => Post::latest()->get(),
        'categories' => Category::all()
    ]);
})->name('home');

Route::get('posts/{post:slug}', function (Post $post){
    return view('post', [
        'post' => $post
    ]);  
    
})->name('category');

Route::get('categories/{category:slug}', function(Category $category){
    return view('posts' , [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('authors/{author:username}', function(User $author){
    return view('posts' , [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
