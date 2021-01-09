<?php

namespace App\Http\Controllers;

use App\Models\Ready;
use Illuminate\Http\Request;

class ReadyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ready = Ready::first();
        return view('backoffice.readyPage',compact('ready'));
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
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function show(Ready $ready)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function edit(Ready $ready)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Ready::find($id);
        $update->titre = $request->titre;
        $update->sous_titre = $request->sous_titre;
        $update->bouton_nom = $request->bouton_nom;
        $update->bouton_url = $request->bouton_url;
        $update->save();
        return redirect('/ready');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ready $ready)
    {
        //
    }
}
