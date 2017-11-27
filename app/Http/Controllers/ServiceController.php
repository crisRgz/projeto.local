<?php

namespace SocioSanitario\Http\Controllers;
use View;
use Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SocioSanitario\Treatment;
use SocioSanitario\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $services = Service::All(); // builder instance
        return view('services_list', compact('services','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //Create an object with all the fields for the DB
        $registro= new Service;

        // Insert on table with request data
        $registro->name = $request['name'];
        $registro->description = $request['description'];
        $registro->idType = $request['idType'];

        //Save
        $registro->save();

        // Redirect to HOME
        return redirect('/home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required|min:5',
            'description'=>'required',
            'idType'=>'required'
            ]);

        Service::create($request->all());
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $idPat)
    {
        $service = Service::find($id); // builder instance
        return view('service_show', compact('service','idPat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id); // builder instance
        return view('service_edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete the Service in the Services table
        DB::table('services')->where('id','=',$id)->delete();
       
        return redirect('/');
    }
}
