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

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Define how it works on post registering employees
     * @ param Request  contains $_POST data
     */
    public function create(Request $request)
    {
        //Create an object with all the fields for the DB
        $registro= new Employee;

        // Insert on table with request data
        $registro->NIF = $request['NIF'];
        $registro->name= $request['name'];
        $registro->lastName1= $request['lastName1'];
        $registro->lastName2= $request['lastName2'];
        $registro->address= $request['address'];
        $registro->phone= $request['phone'];
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
            'phone'=> 'required|min:5|numeric',
            'idUser'=> Auth::user()->id,
            ]);

        Employee::create($request->all());
        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id); // builder instance

        return view('employee_show', compact('employee'));
    }

    /*
    List of all treatments in course by Employee id
     
    public function listTreatments(Employee $Employee)
    {
        $empoTreat = Tratamento::where('idEmpo', $Employee->id)->with('usuario')->get();
        return view('Employee', compact('Employee', 'empoTreat'));
    }*/
    /*
    List of all treatments by Employee id and idUser 
    
    public function listTreatment(Employee $Employee)
    {
        if($idUsu==0){
            return view('Employee')->with('idUsu',0);
        }
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id); // builder instance
        return view('employee_edit', compact('employee'));
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
    // Control constraint to delete from 1 side and the other
    public function destroy($id)
    { 
        // Delete the user in USER table
        DB::table('users')->where('id','=',Auth::User()->id )->delete();
        // Delete the employee in the Employee table
        DB::table('employees')->where('id','=',$id)->delete();
       
        return redirect('/');
    }
}
