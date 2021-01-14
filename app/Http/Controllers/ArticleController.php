<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\News;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\ArticlePublished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('backoffice.articlePage',compact('articles'));
    }

    public function attente()
    {
        $articles = Article::all();
        return view('backoffice.articleValidation',compact('articles'));
    }

    public function validation($id)
    {
        $validation = Article::find($id);
        $newsletter = News::all();
        $users = User::all();
        $validation->confirmed = true;
        $validation->save();
        foreach ($newsletter as $e) {
            $e->notify(new ArticlePublished($validation));
        }
        foreach ($users as $e) {
            $e->notify(new ArticlePublished($validation));
        }
        return redirect('/attente');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('backoffice.articleAdd',compact('tags','categories'));
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $articles = Article::where('titre','LIKE','%'. $search_text .'%')->get();
        $categories = Categorie::all();
        $tags = Tag::all();
        $footer = Footer::first();
        $logos = Logo::all();
        $navbars = Navbar::all();
        return view('searchpage', compact('articles','tags','categories','footer','logos','navbars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Article;
        $store->titre = $request->titre;
        $store->texte = $request->texte;
        $store->user_id = Auth::user()->id;
        $store->src = $request->file('src')->hashName();
        $store->save();
        Image::make($request->file('src'))->resize(755,270)->save('img/blog/'.$store->src);
        $store->tags()->attach($request->tab);
        $store->categories()->sync($request->tab2);
        return redirect('/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Article::find($id);
        $footer = Footer::first();
        $logos = Logo::all();
        $navbars = Navbar::all();
        return view('blogShow',compact('show','footer','logos','navbars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Article::find($id);
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('backoffice.articleEdit',compact('edit','tags','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Article::find($id);
        $update->titre = $request->titre;
        $update->texte = $request->texte;
        $update->save();
        $tab = [];
        foreach ($update->tags as $tag) {
            array_push($tab, $tag->id);
        }
        $update->tags()->detach($tab);
        $tab2 = [];
        foreach ($update->categories as $cate) {
            array_push($tab2, $cate->id);
        }
        $update->categories()->detach($tab2);
        $update->tags()->attach($request->tab);
        $update->categories()->sync($request->tab2);
        return redirect('/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Article::find($id);
        $delete->delete();
        return redirect('/article');
    }
}
