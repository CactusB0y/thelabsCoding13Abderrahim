<?php

namespace App\Http\Controllers;

use App\Models\Icone;
use App\Models\IconePrime;
use App\Models\Service;
use App\Models\ServicePrime;
use Illuminate\Http\Request;

class ServicePrimeController extends Controller
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
     * @param  \App\Models\ServicePrime  $servicePrime
     * @return \Illuminate\Http\Response
     */
    public function show(ServicePrime $servicePrime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicePrime  $servicePrime
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ServicePrime::find($id);
        $icons = IconePrime::all();
        return view('backoffice.servicePrimeEdit',compact('edit','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicePrime  $servicePrime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = ServicePrime::find($id);
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->icone_id = $request->icone_id;
        $update->save();
        return redirect('/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicePrime  $servicePrime
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicePrime $servicePrime)
    {
        //
    }
}
