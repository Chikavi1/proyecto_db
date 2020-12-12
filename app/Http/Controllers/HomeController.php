<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyectos;

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
        $proyectos = Proyectos::all();
        $total = $proyectos->count();
        return view('home',compact('proyectos','total'));
    }

}
