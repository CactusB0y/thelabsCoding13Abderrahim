<?php

namespace App\Http\Controllers;

use App\Models\Caroussel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class CarousselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $store = new Caroussel;
        $store->src = $request->src;
        $store->src = $request->file('src')->hashName();
        $store->save();
        Image::make($request->file('src'))->resize(1920,1274)->save('img/'.$store->src);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function show(Caroussel $caroussel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function edit(Caroussel $caroussel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caroussel $caroussel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Caroussel::find($id);
        if($delete->src == '01.jpg' || $delete->src == '02.jpg'){
            $delete->delete();
            return redirect('/navbar');
        } else {
            Storage::disk('public')->delete('img/'.$delete->src);
            $delete->delete();
            return redirect('/navbar');
        }
    }
}
