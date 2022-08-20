<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

        
$usuarios = users::where('status',1)->orderBy('nombre')->get();
$usuarioactual=\Auth::user();
return view ('Usuarios.index')->with('usuarios',$usuarios)
->with('usuarioactual',$usuarioactual);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarioactual=\Auth::user();
        return view('Usuarios.create')
        ->with('usuarioactual',$usuarioactual);
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
users::create($datos);
return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=users::find($id);
        return view('usuarios.read')->with('usuario',$usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = users::find($id);
return view('Usuarios.edit')->with('usuario',$usuario);
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
$usuario= users::find($id);
$usuario->update($datos);
return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $usuario= users::find($id);
        $usuario->status = 0;
        $usuario->save();
        return redirect('/usuarios');
        //
    }
}
