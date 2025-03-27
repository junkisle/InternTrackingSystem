<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\NotesController;

Route::get('/', [InternController::class, 'class_open_LandingPage']);
Route::get('/welcome', [InternController::class, 'class_open_LandingPage'])->name('welcome');
Route::get('/LoginPage', [InternController::class, 'class_open_LoginPage'])->name('LoginPage');
Route::get('/SignupPage', [InternController::class, 'class_open_SignupPage'])->name('SignupPage');
Route::get('/CDD_Global', [InternController::class, 'class_open_CDD_Global'])->name('CDD_Global');



//Insert signup information into database
Route::post('/SignupPage', [InternController::class, 'class_signup'])->name('insert_NewUser');

Route::post('/dashboard', [InternController::class, 'class_login'])->name('login_User');

 //Dashboard
 Route::get('/dashboard', function () {
     return view('dashboard', ['user_data' => session('user_data')]);
 })->name('dashboard.route');

//Notes
Route::get('/Notes', [NotesController::class, 'class_open_Notes'])->name('notes.index');
Route::get('/Notes/new', [NotesController::class, 'class_new_Notes'])->name('notes.new');
Route::post('/Notes', [NotesController::class, 'class_add_Notes'])->name('notes.create');

//Dashboard get user id
// Route::get()
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Insert data route
// Route::get('/account-creation', [homepageController::class,'accountCreation'])->name('accountCreation');

//Index todo dashboard
// Route::get('/todo', [TodoController::class, 'todo'])->name('todo.index');

// //Create route
// Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');

// //Store route
// Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');


// //Edit screen route
// Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');

// //Edit method
// Route::put('/todo/{todo}/update', [TodoController::class, 'update'])->name('todo.update');

// //Delete method
// Route::delete('/todo/{todo}/delete', [TodoController::class, 'delete'])->name('todo.delete');
