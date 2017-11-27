<?php

namespace SocioSanitario\Http\Controllers;

use Illuminate\Http\Request;
use SocioSanitario\Employee;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($employeeId)
    {   
        $employee = Employee::find($employeeId);
        return view('treatments_list', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create an object with all the fields for the DB
        $registro= new Treatment;

        // Insert on table with request data
        $registro->dateTimeStart = $request['dateTimeStart'];
        $registro->dateTimeEnd = $request['dateTimeEnd'];
        $registro->done = $request['done'];
        $registro->reason = $request['reason'];
        $registro->idPat = $request['idPat'];
        $registro->idServ = $request['idServ'];
        $registro->idEmp = $request['idEmp'];

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
            'dateTimeStart'=> 'required|min:5',
            'done'=>'default:1',
            'idPat'=>'required',
            'idServ' => 'required',
            'idEmp'=> 'required'
            ]);

        Treatment::create($request->all());
        return redirect('/treatments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $treatment = Treatment::find($id); // builder instance
        return view('treatment_show', compact('treatment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $treatment = Treatment::find($id); // builder instance
        return view('treatment_show', compact('treatment'));
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
        // Delete the Treatment in the Treatments table
        DB::table('treatments')->where('id','=',$id)->delete();
        return redirect('/');
    }
}
