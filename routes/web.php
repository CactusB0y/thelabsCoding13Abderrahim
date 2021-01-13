<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarousselController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\IconeController;
use App\Http\Controllers\IconePrimeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicePrimeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Models\About;
use App\Models\Article;
use App\Models\Caroussel;
use App\Models\Categorie;
use App\Models\Choice;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Ready;
use App\Models\Service;
use App\Models\ServicePrime;
use App\Models\Tag;
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
    $pagination = Service::paginate(9);
    return view('welcome',compact('navbars','logos','caroussels','abouts','testimonials','tab','random','random2','choix','ready','contact','footer','randomServices','pagination'));
});

Route::get('/servicepage', function () {
    $navbars = Navbar::all();
    $logos = Logo::all();
    $contact = Contact::first();
    $footer = Footer::first();
    $pagination = Service::paginate(9);
    $titre = Titre::all();
    $tab = [];
    foreach($titre as $title){
        $str = Str::of($title->titre)->replace('(', '<span>');
        $str2 = Str::of($str)->replace(')','</span>');
        array_push($tab, $str2);
    }
    $servicesPrimes = ServicePrime::all()->sortDesc()->take(6);
    $limite = 0;
    $articleRapides = Article::all()->sortDesc()->take(3);
    return view('service',compact('navbars','logos','contact','footer','pagination','tab','servicesPrimes','limite','articleRapides'));
});

Route::get('/blog', function () {
    $navbars = Navbar::all();
    $logos = Logo::all();
    $footer = Footer::first();
    $categories = Categorie::all();
    $tags = Tag::all();
    $articles = Article::where('confirmed',true)->paginate(3);
    return view('blog',compact('navbars','logos','footer','categories','tags','articles'));
});

Route::get('/contactpage', function () {
    $navbars = Navbar::all();
    $logos = Logo::all();
    $contact = Contact::first();
    $footer = Footer::first();
    $map = Map::first();
    return view('contact',compact('navbars','logos','contact','footer','map'));
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
Route::resource('icon', IconeController::class);
Route::resource('iconPrime', IconePrimeController::class);
Route::resource('service', ServiceController::class);
Route::resource('serviceprime', ServicePrimeController::class);
Route::resource('categorie', CategorieController::class);
Route::resource('tag', TagController::class);
Route::get('search', [ArticleController::class,'search']);
Route::get('/attente', [ArticleController::class,'attente']);
Route::post('/validation/{id}', [ArticleController::class,'validation']);
Route::resource('article', ArticleController::class);
Route::resource('comment', CommentController::class);
Route::resource('maps', MapController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
