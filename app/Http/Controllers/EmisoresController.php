<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emisores;
use App\Models\Receptores;
use App\Models\Servicios;
class EmisoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idusuarioactual=auth()->user()->id;
        $usuarioactual=\Auth::user();
        $emisores = Emisores::where('id_usuario','<>',$idusuarioactual)->orderBy('id')->get();
return view ('Emisores.index')->with('emisores',$emisores)
->with('usuarioactual',$usuarioactual);
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicio= Servicios::find(8);
        $idusuarioactual=auth()->user()->id;
        $usuarioactual=\Auth::user();
        
        return view('Emisores.create')
        ->with('usuarioactual',$usuarioactual)
        ->with('servicio',$servicio)
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
        Emisores::create($datos);
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
        $emisor=Emisores::find($id);
        return view('Emisores.read')->with('emisor',$emisor)
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
        return view('Emisores.edit')
        ->with('servicio',$servicio)
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
        $emisor= Emisores::find($id);
        $emisor->update($datos);
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
        //
    }
}
