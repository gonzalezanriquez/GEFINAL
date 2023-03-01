<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\UserRoleController;
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

//Architecture
Route::view('/architecture', 'architecture')->name('arc');

//Welcome
Route::view('/','welcome');

//Home
Route::get('/home',[HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

// Users
Route::middleware(['auth', 'role:administrador'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('/users/update', [UserController::class, 'update'])->name('users.update');
    Route::put('/users/delete/{id}',[UserController::class, 'destroy'])->name('users.delete');
});

//Professors n' Students
Route::get('/profesores', [UserController::class, 'index'])->middleware(['auth', 'role:profesor'])->name('profesores.index');
Route::get('/alumnos', [UserController::class, 'index'])->middleware(['auth', 'role:alumno'])->name('alumnos.index');

//Posts
Route::middleware(['auth', 'role:administrador'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts/show', [PostController::class, 'show'])->name('posts.show');
    Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
    Route::patch('/posts', [PostController::class, 'update'])->name('posts.update');
    Route::put('/posts/delete/{id}',[PostController::class, 'destroy'])->name('posts.delete');
});

// Noticias Internas
Route::controller(UserPostController::class)->group(function () {
   Route::get('/noticias', 'index')->name('noticiasinternas.index');
   Route::get('/noticias/{post}', 'show');
});

// Noticias Externas
Route::controller(UserPostController::class)->group(function () {
    Route::get('/noticias', 'index')->name('noticiasexternas.index');
    Route::get('/noticias/{post}', 'show');
});

//Roles
Route::get('/users/roles', [RoleController::class, 'index'])->name('roles.index');
Route::post('/users/roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('/users/{userId}/delete/{roleId}', [RoleController::class, 'destroy'])->name('roles.delete');

//Materias
Route::middleware('auth')->group(function () {
    Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
    Route::get('/subjects/edit/{subject}', [SubjectController::class, 'edit'])->name('subjects.edit');
    Route::get('/subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
    Route::get('/subjects/show', [SubjectController::class, 'show'])->name('subjects.show');
    Route::post('/subjects/create', [SubjectController::class, 'store'])->name('subjects.store');
    Route::patch('/subjects', [SubjectController::class, 'update'])->name('subjects.update');
    Route::put('/subjects/delete/{id}',[SubjectController::class, 'destroy'])->name('subjects.delete');
});
Route::post('/contact_us', [App\Http\Controllers\ContactController::class, 'contact_us'])->name("contact_us");
// Route::get('/contact', function () {return view('welcome');})->name("contact");
  Route::get('/contact', [App\Http\Controllers\ContactController::class,'contact'])->name('contact');

//Images
//Route::post('/posts/update', [ImageController::class, 'update'])->name('posts.update');


require __DIR__.'/auth.php';




/*//Authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

