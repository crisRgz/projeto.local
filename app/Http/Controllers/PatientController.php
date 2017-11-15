<?php

namespace SocioSanitario\Http\Controllers;
use View;
use Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SocioSanitario\Employee;
use SocioSanitario\Treatment;
use SocioSanitario\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
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
        //Create an object with all the fields for the DB
        $registro= new Patient;

        // Insert on table with request data
        $registro->NIF = $request['NIF'];
        $registro->name = $request['name'];
        $registro->lastName1 = $request['lastName1'];
        $registro->lastName2 = $request['lastName2'];
        $registro->address = $request['address'];
        $registro->phone = $request['phone'];
        $registro->contactPerson = $request['contactPerson'];
        $registro->contactPhone = $request['contactPhone'];
        $registro->lat = $request['lat'];
        $registro->long = $request['long'];
        $registro->idUser= Auth::user()->id;

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
            'NIF' => 'required|min:9',
            'name'=> 'required|min:5',
            'lastName1'=> 'min:5',
            'lastName2'=> 'min:5',
            'address'=> 'min:10',
            'phone'=> 'required|min:9|numeric',
            'idUser'=> Auth::user()->id,
            'contactPerson'=>'required|min:5',
            'contactPhone'=>'required|min:9|numeric',
            'lat'=>'float',
            'long'=>'float'
            ]);

        Patient::create($request->all());
        return redirect('/patients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id); // builder instance

        return view('patient_show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id); // builder instance
        return view('patient_edit', compact('patient'))
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
        // Delete the user in USER table
        DB::table('users')->where('id','=',Auth::User()->id )->delete();
        // Delete the patient in the Patientes table
        DB::table('patients')->where('id','=',$id)->delete();
       
        return redirect('/');
    }
}