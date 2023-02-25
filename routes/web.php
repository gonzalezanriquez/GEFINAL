<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//conjunto de urls protegidas por login
Route::group(['middleware'=>['auth']],function(){
    Route::resource('posts', PostController::class);

//     Route::get('/get_messages', [ContactController::class, 'get_messages'] )
// ->name("get_messages");

});
Route::post('/contact_us', [App\Http\Controllers\ContactController::class, 'contact_us'])->name("contact_us");
// Route::get('/contact', function () {return view('welcome');})->name("contact");
  Route::get('/contact', [App\Http\Controllers\ContactController::class,'contact'])->name('contact');

Route::get('/noticias', [App\Http\Controllers\PostController::class,'noticias'])->name('noticias');
