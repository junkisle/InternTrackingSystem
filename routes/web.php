<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;


Route::get('/', [InternController::class, 'class_open_LandingPage']);
Route::get('/welcome', [InternController::class, 'class_open_LandingPage'])->name('welcome');
Route::get('/LoginPage', [InternController::class, 'class_open_LoginPage'])->name('LoginPage');
Route::get('/SignupPage', [InternController::class, 'class_open_SignupPage'])->name('SignupPage');
Route::get('/CDD_Global', [InternController::class, 'class_open_CDD_Global'])->name('CDD_Global');


//Insert signup information into database
Route::post('/SignupPage', [InternController::class, 'class_signup'])->name('insert_NewUser');

//Login user
Route::post('/dashboard', [InternController::class, 'class_login'])->name('login_User');