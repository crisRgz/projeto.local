<?php

namespace SocioSanitario\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use View;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // when register as user returns home, through this controller
        // use the active id User
        $idUser = Auth::User()->id;
        // Make sure they are registered on their appropiate table
        $consulta=NULL;
       
        if(Auth::User()->rol == 'Employee'){
            $consulta = DB::table('employees')
            ->select('employees.id')
            ->where('employees.idUser', '=', $idUser)
            ->get();
        }elseif (Auth::User()->rol == 'Patient') {
            $consulta = DB::table('patients')
            ->select('patients.id')
            ->where('patients.idUser', '=', $idUser)
            ->get();
        }

        if(!isset($consulta[0]->id)){
            $id=0;
            return view('home')->with('id', $id);
        }else{
            $id=$consulta[0]->id;
            return view('welcomeUsers')->with('id', $id);
        }
        
        //return $id.' '.Auth::User()->rol;

        
    }

}
