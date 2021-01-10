<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarousselController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Models\About;
use App\Models\Caroussel;
use App\Models\Choice;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Logo;
use App\Models\Ready;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Titre;
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
    //
    $titre = Titre::all();
    $tab = [];
    foreach($titre as $title){
        $str = Str::of($title->titre)->replace('(', '<span>');
        $str2 = Str::of($str)->replace(')','</span>');
        array_push($tab, $str2);
    }
    $navbars = Navbar::all();
    $logos = Logo::all();
    $caroussels = Caroussel::all();
    $abouts = About::first();
    $testimonials = Testimonial::all()->sortDesc()->take(6);
    $choix = Choice::first();
    $random = Team::all()->except($choix->team_id)->random(1);
    $random2= Team::all()->except($choix->team_id)->except($random[0]->id)->random(1);
    $ready = Ready::first();
    $contact = Contact::first();
    $footer = Footer::first();
    $randomServices = Service::all()->random(3);
    return view('welcome',compact('navbars','logos','caroussels','abouts','testimonials','tab','random','random2','choix','ready','contact','footer','randomServices'));
});

Route::get('/service', function () {
    $navbars = Navbar::all();
    $logos = Logo::all();
    $contact = Contact::first();
    $footer = Footer::first();
    return view('service',compact('navbars','logos','contact','footer'));
});

Route::get('/blog', function () {
    $navbars = Navbar::all();
    $logos = Logo::all();
    return view('blog',compact('navbars','logos'));
});

Route::get('/contact', function () {
    $navbars = Navbar::all();
    $logos = Logo::all();
    $contact = Contact::first();
    return view('contact',compact('navbars','logos','contact'));
});

Route::resource('navbar', NavbarController::class);
Route::post('/titlechange/{id}', [LogoController::class, 'titlechange']);
Route::resource('logo', LogoController::class);
Route::resource('caroussel', CarousselController::class);
Route::post('/imagevideo/{id}', [AboutController::class, 'imagevideo']);
Route::post('/urlvideo/{id}', [AboutController::class, 'urlvideo']);
Route::resource('about', AboutController::class);
Route::resource('titre', TitreController::class);
Route::post('/teamProfil/{id}', [TeamController::class,'teamProfil']);
Route::post('/main/{id}', [TeamController::class, 'main']);
Route::resource('team', TeamController::class);
Route::resource('testimonial', TestimonialController::class);
Route::resource('ready', ReadyController::class);
Route::resource('contact', ContactController::class);
Route::resource('footer', FooterController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
