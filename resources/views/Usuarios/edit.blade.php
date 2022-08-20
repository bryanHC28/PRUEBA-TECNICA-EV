@extends('template2.master')
@section('contenido_central')

<div class="container">	
<div  class="text-center wow fadeInDown">
	 
	 
<h1 style="color: black;">Editar Usuario</h1>
</div>

<div class="col-sm-5 col-sm-offset-1">
{!! Form::open(['method'=>'PATCH','url'=>'/usuarios/'.$usuario->id,'style'=>'color:black;','id'=>'main-contact-form','class'=>'contact-form','name'=>'contact-form'])!!}
 
 
  <div class="form-group">
{!! Form::label ('nombre','Nombre empleado:')!!}
{!! Form::text ('nombre',$usuario->nombre,['placeholder'=>'Ingresa nombre ','class'=>'form-control'])!!}


</div> 
  <div class="form-group">
{!! Form::label ('apellido','Apellidos:')!!}
{!! Form::text ('apellido',$usuario->apellido,['placeholder'=>'Ingresa sus apellidos','class'=>'form-control'])!!}


</div> 

<div class="form-group">
{!! Form::label ('edad','Edad:')!!}
{!! Form::number ('edad',$usuario->edad,['placeholder'=>'Ingresa tu edad','class'=>'form-control'])!!}
</div>    


  <div class="form-group">

{!! Form::label ('correo','Email:')!!}
{!! Form::text ('correo',$usuario->username,['placeholder'=>'Ingresa email','class'=>'form-control'])!!}

</div>
<div class="form-group">
{!! Form::label ('password','Contraseña:')!!}
{!! Form::text ('password',$usuario->password,['placeholder'=>'Ingresa contraseña','class'=>'form-control'])!!}
</div>    

   
  <div class="form-group">


{!! Form::label ('status','Estatus:')!!}
{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$usuario->status,['placeholder'=>'Seleccionar','class'=>'form-control'])!!}
</div> 
  <br>
{!! Form::submit('Guardar ',['class'=>'btn btn-primary btn-lg'])!!}
{!! Form::close() !!}
<br>
<a class="btn btn-primary btn-lg" href="{!! asset('usuarios')!!}">Ver Usuarios</a>
 </div>
 
</div>

@endsection()
 