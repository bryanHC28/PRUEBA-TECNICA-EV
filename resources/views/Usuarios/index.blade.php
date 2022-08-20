@extends('template2.master')
@section('contenido_central')
 


<div class="container">    
<div  class="text-center wow fadeInDown">
	<h1 style="color: black;">LISTADO DE USUARIOS</h1>
    <br>
    <br>
    <
<a class="btn btn-primary btn-lg" href="{!! asset('usuarios/create')!!}">CREAR NUEVA USUARIO</a>


<br>
<br>
<br>
<br>
<table id="tabla" class="display" style="width:100%">
    <thead>
	<tr style="color: black;">
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>EDAD</th>
                    <th>CORREO</th>
        <th style="color: red;">ACCIONES</th>
	</tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
<tr style="color: black;">
	
 
<td>{!! $usuario->id !!}</td>
                <td>{!! $usuario->nombre !!}</td>
                <td>{!! $usuario->edad !!}</td>
                <td>{!! $usuario->username !!}</td>

<td>
	<a class="btn btn-primary btn-lg" href="{!!'usuarios/'.$usuario->id!!}">DETALLE</a>
    <a class="btn btn-primary btn-lg" href="{!!'usuarios/'.$usuario->id.'/edit'!!}">Editar</a>
	 
    {!! Form::open(['method' =>'DELETE','url'=>
    '/usuarios/'.$usuario->id])!!}
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



 