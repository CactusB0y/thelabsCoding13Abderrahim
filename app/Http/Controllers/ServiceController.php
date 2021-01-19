<?php

namespace App\Http\Controllers;

use App\Models\Icone;
use App\Models\IconePrime;
use App\Models\Service;
use App\Models\ServicePrime;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $services = Service::paginate(5);
        $servicePrimes = ServicePrime::paginate(5);
        $icons = Icone::all();
        $iconprimes = IconePrime::all();
        return view('backoffice.servicePage',compact('services','servicePrimes','icons','iconprimes'));
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
        $store = new Service;
        $store->titre = $request->titre;
        $store->text = $request->text;
        $store->icone_id = $request->icone_id;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Service::find($id);
        $icons = Icone::all();
        return view('backoffice.serviceEdit',compact('edit','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Service::find($id);
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->icone_id = $request->icone_id;
        $update->save();
        return redirect('/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Service::find($id);
        $delete->delete();
        return redirect('/service');
    }
}
