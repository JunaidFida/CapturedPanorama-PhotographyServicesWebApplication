<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/booknow', function () {
    return view('booknow');
})->name('booknow');


Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/Retreivebookings', function () {
    return view('Retreivebookings');
})->name('Retreivebookings');

Route::view('register','register')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');
Route::view('login','login')->name('login');