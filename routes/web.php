<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
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
    Route::patch('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::put('/users/delete/{id}',[UserController::class, 'destroy'])->name('users.delete');
});

//Professors
Route::get('/profesores', [ProfessorController::class, 'index'])->middleware(['auth', 'role:profesor|administrador'])->name('profesores.index');
Route::get('/profesores/{id}', [ProfessorController::class, 'show'])->middleware(['auth', 'role:profesor|administrador'])->name('profesores.show');

// Students
Route::get('/alumnos', [StudentController::class, 'index'])->middleware(['auth', 'role:alumno|profesor|administrador'])->name('alumnos.index');
Route::get('/alumnos/{id}', [StudentController::class, 'show'])->middleware(['auth', 'role:alumno|profesor|administrador'])->name('alumnos.show');

//Posts
Route::middleware(['auth', 'role:administrador'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts/show', [PostController::class, 'show'])->name('posts.show');
    Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
    Route::patch('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::put('/posts/delete/{id}',[PostController::class, 'destroy'])->name('posts.delete');
});

// News
Route::controller(UserPostController::class)->group(function () {
   Route::get('/noticiasint', 'index')->middleware(['auth', 'role:administrador'])->name('noticiasint.index');
    Route::get('/noticiasext', 'index')->middleware(['auth', 'role:administrador'])->name('noticiasext.index');
   Route::get('/noticias/{id}', 'show')->name('noticias.show');
});


//Roles
Route::get('/users/roles', [RoleController::class, 'index'])->middleware(['auth', 'role:administrador'])->name('roles.index');
Route::post('/users/roles', [RoleController::class, 'store'])->middleware(['auth', 'role:administrador'])->name('roles.store');
Route::get('/users/{userId}/delete/{role}', [RoleController::class, 'destroy'])->middleware(['auth', 'role:administrador'])->name('roles.delete');

// Contact
Route::post('/contact_us', [App\Http\Controllers\ContactController::class, 'contact_us'])->name("contact_us");
// Route::get('/contact', function () {return view('welcome');})->name("contact");
  Route::get('/contact', [App\Http\Controllers\ContactController::class,'contact'])->name('contact');

require __DIR__.'/auth.php';




/*//Authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

