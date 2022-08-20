@extends('template2.master')
@section('contenido_central')


<br>
    <br>
    <br>
<div class="container">    
<div  class="text-center wow fadeInDown">
	<h1 style="color: black;">Mensajes</h1>
    
<br>
<br>

<br>
<br>
<br>
<br>
<table id="tabla" class="display" style="width:100%">
    <thead>
	<tr style="color: black;">
                    <th>Enviado por</th>
                    <th>Asunto</th>
                    <th>Status</th>
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
	<a class="btn btn-primary btn-lg" href="{!!'servicios/'.$servicio->id!!}">VER MENSAJE</a>
	 
    {!! Form::open(['method' =>'DELETE','url'=>
    '/servicios/'.$servicio->id])!!}
    {!!Form::submit('Eliminar',['class'=>'btn btn-primary btn-lg'])!!}
    {!! Form::close() !!}
  
</td>

</tr>


@endforeach

</tbody>
 


</table>
<br/>
 

     </div> 
         </div> 
     
@endsection()