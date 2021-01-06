<?php

use App\Http\Controllers\CarousselController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavbarController;
use App\Models\Caroussel;
use App\Models\Navbar;
use App\Models\Logo;
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
    $logos = Logo::all();
    $caroussels = Caroussel::all();
    return view('welcome',compact('navbars','logos','caroussels'));
});

Route::get('/service', function () {
    $navbars = Navbar::all();
    $logos = Logo::all();
    return view('service',compact('navbars','logos'));
});

Route::get('/blog', function () {
    $navbars = Navbar::all();
    $logos = Logo::all();
    return view('blog',compact('navbars','logos'));
});

Route::get('/contact', function () {
    $navbars = Navbar::all();
    $logos = Logo::all();
    return view('contact',compact('navbars','logos'));
});

Route::resource('navbar', NavbarController::class);
Route::post('/titlechange/{id}', [LogoController::class, 'titlechange']);
Route::resource('logo', LogoController::class);
Route::resource('caroussel', CarousselController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
