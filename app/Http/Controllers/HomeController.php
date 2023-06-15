<?php

namespace App\Http\Controllers;
use App\Models\Denuncia;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    function setDenuncias() {
        $datos = Denuncia::all();
        return view('denuncias_mapa')->with("datos",$datos);
    }
}
