<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Caroussel;
use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class AboutController extends Controller
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
        $navbars = Navbar::all();
        $logo = Logo::first();
        $caroussels = Caroussel::all();
        $abouts = About::first();
        return view('backoffice.aboutPage',compact('navbars','logo','caroussels','abouts'));
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = About::find($id);
        $update->col_gauche = $request->col_gauche;
        $update->col_droite = $request->col_droite;
        $update->btn_nom = $request->btn_nom;
        $update->btn_lien = $request->btn_lien;
        $update->save();
        return redirect()->back();
    }

    public function imagevideo(Request $request, $id)
    {
        $imagevideo = About::find($id);
        if($imagevideo->video_src == 'video.jpg'){
            $imagevideo->video_src = $request->video_src;
            $imagevideo->video_src = $request->file('video_src')->hashName();
            $imagevideo->save();
            Image::make($request->file('video_src'))->resize(754,407)->save('img/'.$imagevideo->video_src);
            return redirect('/navbar');
        } else {
            Storage::disk('public')->delete('img/'.$imagevideo->video_src);
            $imagevideo->video_src = $request->video_src;
            $imagevideo->video_src = $request->file('video_src')->hashName();
            $imagevideo->save();
            Image::make($request->file('video_src'))->resize(754,407)->save('img/'.$imagevideo->video_src);
            return redirect('/navbar');
        }
    }

    public function urlvideo(Request $request, $id)
    {
        $urlvideo = About::find($id);
        $crop = substr($request->video_url, 0, strpos($request->video_url, "&"));
        $urlvideo->video_url = $crop;
        $urlvideo->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
