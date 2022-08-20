
@extends('template2.master')
@section('contenido_central')
<br />
<br />
<br>
    <br>
    <br>
 
<h1>Para: {!! $emisor->users->nombre!!}</h1>
                <h1>Nombre servicio: {!! $emisor->servicios->nombre_servicio !!}</h1>
                <h1>Mensaje enviado: {!! $emisor->descripcion !!}</h1>
             
		<br />
		<br />
		<br />
		<br />
		 
   
<a href="{!! asset('emisor') !!}" class="btn btn-secondary w-130">Regresar</a>
<br />
<br />


@endsection()
 