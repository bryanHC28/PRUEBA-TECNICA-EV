<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servicios;
use App\Models\users;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuarioactual=\Auth::user();
        $idusuarioactual=auth()->user()->id;
        $servicios = servicios::where('id_usuario','<>',$idusuarioactual)->orderBy('nombre_servicio')->get();
return view ('Servicios.index')->with('servicios',$servicios)
->with('usuarioactual',$usuarioactual);
    }

    public function mis_servicios(){


        $usuarioactual=\Auth::user();
        $idusuarioactual=auth()->user()->id;
        $servicios = servicios::where('id_usuario',$idusuarioactual)->orderBy('nombre_servicio')->get();
return view ('Misservicios')->with('servicios',$servicios)
->with('usuarioactual',$usuarioactual);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $idusuarioactual=auth()->user()->id;
        $usuarioactual=\Auth::user();
        $usuarios= users::select('id','nombre')
                   ->where('status',1)
                   ->orderBy('nombre')->get();
        return view('Servicios.create')
        ->with('usuarios',$usuarios)
        ->with('usuarioactual',$usuarioactual)
        ->with('idusuarioactual',$idusuarioactual);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datos= $request->all();
        servicios::create($datos);
        return redirect('/servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarioactual=\Auth::user();
        $servicio=servicios::find($id);
        return view('Servicios.read')->with('servicio',$servicio)
        ->with('usuarioactual',$usuarioactual);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarioactual=\Auth::user();
        $servicio = servicios::find($id);
        $usuario = users::select('id','nombre')
        ->where('status',1)
        ->orderBy('nombre')->get();
        return view('Servicios.edit')
        ->with('servicio',$servicio)
        ->with('usuario',$usuario)
        ->with('usuarioactual',$usuarioactual);
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
        $datos = $request->all();
$servicio= servicios::find($id);
$servicio->update($datos);
return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio= servicios::find($id);
        $servicio->status = 0;
        $servicio->save();
        return redirect('/servicios');
    }
}
