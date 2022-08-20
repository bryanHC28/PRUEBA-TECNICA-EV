
@extends('template2.master')
@section('contenido_central')

  
<br />
		<br />
 
<h3>Nombre: {!! $usuario->nombre !!}</h3>
		<h3>Apellido: {!! $usuario->apellido !!}</h3>
		<h3>Edad: {!! $usuario->edad !!}</h3>
		<h3>Username: {!! $usuario->username!!}</h3>
		<h3>Password: {!! $usuario->password!!}</h3>
		 
		 
		 
		<br />
		<br />
		<br />
   
<a href="{!! asset('usuarios') !!}" class="btn btn-secondary w-30">Regresar</a>
<br />
<br />

@endsection()

 