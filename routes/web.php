<?php

use App\Http\Controllers\NavbarController;
use App\Models\Navbar;
use Illuminate\Support\Facades\Auth;
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
    $navbars = Navbar::all();
    return view('welcome',compact('navbars'));
});

Route::get('/service', function () {
    $navbars = Navbar::all();
    return view('service',compact('navbars'));
});

Route::get('/blog', function () {
    $navbars = Navbar::all();
    return view('blog',compact('navbars'));
});

Route::get('/contact', function () {
    $navbars = Navbar::all();
    return view('contact',compact('navbars'));
});

Route::resource('navbar', NavbarController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
