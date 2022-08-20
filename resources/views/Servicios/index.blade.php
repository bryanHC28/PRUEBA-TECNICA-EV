@extends('template2.master')
@section('contenido_central')

<br>
    <br>
    <br>
<div class="container">    
<div  class="text-center wow fadeInDown">
	<h1 style="color: black;">LISTADO DE SERVICIOS</h1>
    
<br>
<br>
 

<br>
<br>
<br>
<br>
<table id="tabla" class="display" style="width:100%">
    <thead>
	<tr style="color: black;">
                    <th>ID</th>
                    <th>NOMBRE SERVICIO</th>
                    <th>MARCA</th>
                    <th>CONTACTO</th>
                    <th>NOMBRE DEL CREADOR</th>
        <th style="color: red;">ACCIONES</th>
	</tr>
    </thead>
    <tbody>
    @foreach($servicios as $servicio)
<tr style="color: black;">
	
 
<td>{!! $servicio->id !!}</td>
                <td>{!! $servicio->nombre_servicio !!}</td>
                <td>{!! $servicio->marca !!}</td>
                <td>{!! $servicio->contacto !!}</td>
                <td>{!! $servicio->users->nombre !!}</td>

<td>
	<a class="btn btn-primary btn-lg" href="{!!'servicios/'.$servicio->id!!}">DETALLE</a>
    <a class="btn btn-primary btn-lg" href="{!! asset('emisor/create')!!}">MENSAJE</a>
	 
 
  
</td>

</tr>


@endforeach

</tbody>
 


</table>
<br/>
 

     </div> 
         </div> 
     
    
@endsection()
 