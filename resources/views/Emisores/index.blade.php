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
                    <th>Para:</th>
                    <th>Asunto</th>
                    <th>Status</th>
                    <th>Fecha</th>
        <th style="color: red;">ACCIONES</th>
	</tr>
    </thead>
    <tbody>
    @foreach($emisores as $emisor)
<tr style="color: black;">
	
 

                <td>{!! $emisor->users->nombre!!}</td>
                <td>{!! $emisor->servicios->nombre_servicio !!}</td>
                <td>{!! $emisor->status !!}</td>
                <td>{!! $emisor->created_at !!}</td>
              

<td>
	<a class="btn btn-primary btn-lg" href="{!!'emisor/'.$emisor->id!!}">VER MENSAJE</a>
	 
  
</td>

</tr>


@endforeach

</tbody>
 


</table>
<br/>
 

     </div> 
         </div> 
     
@endsection()