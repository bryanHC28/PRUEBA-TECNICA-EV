
@extends('template2.master')
@section('contenido_central')
<br />
<br />
<br>
    <br>
    <br>
<h3>ID: {!! $servicio->id !!}</h3>
 
         <h3>Nombre servicio: {!! $servicio->nombre_servicio !!}</h3>
                <h3>Marca: {!! $servicio->marca !!}</h3>
                <h3>Descripcion: {!! $servicio->descripcion !!}</h3>
                <h3>Contacto: {!! $servicio->contacto !!}</h3>
                <h3>Nombre creador: {!! $servicio->users->nombre !!}</h3>
                
		<br />
		<br />
		<br />
		<br />
		 
   
<a href="{!! asset('servicios') !!}" class="btn btn-secondary w-130">Regresar</a>
<br />
<br />


@endsection()
 