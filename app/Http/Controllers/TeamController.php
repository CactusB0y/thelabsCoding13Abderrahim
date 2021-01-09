<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class TeamController extends Controller
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
        return view('backoffice.teamAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Team;
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->role = $request->role;
        $store->src = $request->file('src')->hashName();
        $store->src_avatar = $request->file('src')->hashName();
        $store->save();
        Image::make($request->file('src'))->resize(360,448)->save('img/team/'.$store->src);
        Image::make($request->file('src'))->resize(117,117)->save('img/avatar/'.$store->src_avatar);
        return redirect('/titre');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Team::find($id);
        return view('backoffice.teamEdit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Team::find($id);
        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->save();
        return redirect('/titre');
    }

    public function teamProfil(Request $request,$id)
    {
        $teamprofil = Team::find($id);
        if($teamprofil->src == '2.jpg' || $teamprofil->src == '3.jpg' || $teamprofil->src == '1.jpg' ){
            $teamprofil->src = 'new'.$teamprofil->src;
            $teamprofil->src_avatar = 'new'.$teamprofil->src_avatar;
            Image::make($request->file('src'))->resize(360,448)->save('img/team/'.$teamprofil->src);
            Image::make($request->file('src'))->resize(117,117)->save('img/avatar/'.$teamprofil->src_avatar);
            $teamprofil->save();
        } else {
            Storage::disk('public')->delete('img/team/'.$teamprofil->src);
            Storage::disk('public')->delete('img/avatar/'.$teamprofil->src);
            $teamprofil->src = 'new'.$teamprofil->src;
            $teamprofil->src_avatar = 'new'.$teamprofil->src_avatar;
            Image::make($request->file('src'))->resize(360,448)->save('img/team/'.$teamprofil->src);
            Image::make($request->file('src'))->resize(117,117)->save('img/avatar/'.$teamprofil->src_avatar);
            $teamprofil->save();
        }
        return redirect('/titre');
    }

    public function main(Request $request, $id)
    {
        $main = Choice::find($id);
        $main->team_id = $request->team_id;
        $main->save();
        return redirect('/titre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Team::find($id);
        if ($delete->src == '2.jpg' || $delete->src == '3.jpg' || $delete->src == '1.jpg'){
            $delete->delete();
        } else {
            Storage::disk('public')->delete('img/team/'.$delete->src);
            Storage::disk('public')->delete('img/avatar/'.$delete->src_avatar);
            $delete->delete();
        }
        return redirect('/titre');
    }
}
