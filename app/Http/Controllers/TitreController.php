<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Caroussel;
use App\Models\Choice;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('Connexion2');
    }

    public function index()
    {
        $titres = Titre::all();
        $teams = Team::all();
        $choice = Choice::first();
        $testimonials = Testimonial::all();
        return view('backoffice.titrePage',compact('titres','teams','choice','testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Titre::find($id);
        $this->authorize('adminWebmaster');
        return view('backoffice.titreEdit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Titre::find($id);
        $update->titre = $request->titre;
        $update->save();
        return redirect('/titre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        //
    }
}
