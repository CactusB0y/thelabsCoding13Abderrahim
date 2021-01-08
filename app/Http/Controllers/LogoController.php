<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class LogoController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Logo::find($id);
        
        if($update->src == "big-logo.png" && $update->src_intervention == 'logo.png'){
            $update->src = 'newbig-logo.png';
            $update->src_intervention = 'newlogo.png';
            Image::make($request->file('src'))->resize(504,148)->save('img/newbig-logo.png');
            Image::make($request->file('src'))->resize(111,32)->save('img/newlogo.png');
            $update->save();
            return redirect()->back();
        } else {
            Storage::disk('public')->delete('img/'.$update->src);
            Storage::disk('public')->delete('img/'.$update->src_intervention);
            Image::make($request->file('src'))->resize(504,148)->save('img/newbig-logo.png');
            Image::make($request->file('src'))->resize(111,32)->save('img/newlogo.png');
            $update->save();
            return redirect()->back();
        }
    }

    public function titlechange(Request $request,$id)
    {
        $titlechange = Logo::find($id);
        $titlechange->titre = $request->titre;
        $titlechange->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
