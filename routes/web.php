<?php
use app\Models\Post;
use Illuminate\Support\Facades\Route;
use app\Models\User;

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
    return view('index');
});
Route::get('/details/{post}',function($slug){

    //trova un post con chiave $slug e passalo alla vista "post"

    ddd(User::test());
    $post = Post::find($slug);
    

    return view('post',[
        'post'=>$post
    ]);

    
})->whereNumber('post');