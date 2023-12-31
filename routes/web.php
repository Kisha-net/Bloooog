<?php

use Illuminate\Support\Facades\Route;

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

    return view ('posts');
});

Route::get('posts/{post}',function($slug){
    // return $slug;
    // Find a post by its slug and pass it to a view called ""
    $path = __DIR__ ."/../resources/posts/{$slug}.html";

    
    if(!file_exists($path)){
        // dd("file does not exist");
        // abort(404);
        return redirect('/');
    }
    $post= file_get_contents($path);
    // dd($post);
    return view('post',['post' => $post]);
});