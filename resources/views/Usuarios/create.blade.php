@extends('template2.master')
@section('contenido_central')

<div class="container">	
<div  class="text-center wow fadeInDown">
<h1 style="color: black;">Crear Usuario</h1>
 </div>

<div class="col-sm-5 col-sm-offset-1">
{!! Form::open(['url'=>'/usuarios','style'=>'color:black;','id'=>'main-contact-form','class'=>'contact-form','name'=>'contact-form'])!!}
 
  <div class="form-group">
 
  <div class="form-group">
{!! Form::label ('nombre','Nombre del usuario:')!!}
{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre ','class'=>'form-control' ,'required','onkeyup'=>'validaciones();'])!!}
</div> 
  <div class="form-group">
{!! Form::label ('apellido','Apellidos:')!!}
{!! Form::text ('apellido',null,['placeholder'=>'Ingresa sus apellidos','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}
</div> 
<div class="form-group">
{!! Form::label ('edad','Edad:')!!}
{!! Form::number ('edad',null,['placeholder'=>'Ingresa su edad','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}
</div> 
  <div class="form-group">
{!! Form::label ('username','Email:')!!}
{!! Form::text ('username',null,['placeholder'=>'Ingresa email','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}
</div> 

  <div class="form-group">
{!! Form::label ('password','Contraseña:')!!}
{!! Form::text ('password',null,['placeholder'=>'Ingresa nueva contraseña','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}

</div> 
  <div class="form-group">

{!! Form::label ('status','Estatus:')!!}
{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Seleccionar','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}
</div> 


{!! Form::submit('Guardar ',['class'=>'btn btn-primary btn-lg'])!!}
{!! Form::close() !!}

 <a class="btn btn-primary btn-lg" href="{!! asset('usuarios')!!}">Ver Usuarios</a>
 </div>
 </div>


 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

@endsection()


 