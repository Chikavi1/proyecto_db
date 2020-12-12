<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyectos;
class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }


    public function create()
    {
        $proyectos = Proyectos::all();
        $total = $proyectos->count();
        return view('proyectos.create',compact('proyectos','total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $link_file = "public/archivos/";
        $archivo = $req->file('archivo')->store($link_file);
        $nombre = str_replace('public/','storage/', $archivo);

        $proyecto = new Proyectos();
        $proyecto->nombre = $req->nombre;
        $proyecto->fecha  = $req->fecha;
        $proyecto->archivo = $nombre;
        $proyecto->comentario = $req->comentario;

        
      


        $proyecto->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyectos = Proyectos::all();
        $total = $proyectos->count();
        $proyec = Proyectos::findOrFail($id);
        return view('proyectos.show',compact('proyectos','proyec','total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyectos = Proyectos::all();
        $total = $proyectos->count();
        $proyec = Proyectos::findOrFail($id);
        return view('proyectos.edit',compact('proyectos','proyec','total'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $proyecto = Proyectos::findOrFail($id);
        $proyecto->nombre     = $req->nombre;
        $proyecto->fecha      = $req->fecha;
        $proyecto->archivo    = $req->archivo;
        $proyecto->comentario = $req->comentario;
        $proyecto->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyectos::findOrFail($id);
        $proyecto->delete();
        return redirect('/home');
    }
}
