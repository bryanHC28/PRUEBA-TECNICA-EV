@extends('template2.master')
@section('contenido_central')

<br>
<br>
<br>
<div class="container">	
<div  class="text-center wow fadeInDown">
<h1 style="color: black;">Crear Servicio</h1>
 </div>

<div class="col-sm-5 col-sm-offset-1">
{!! Form::open(['url'=>'/servicios','style'=>'color:black;','id'=>'main-contact-form','class'=>'contact-form','name'=>'contact-form'])!!}
 
  <div class="form-group">
 
  <div class="form-group">

{!! Form::label ('id_usuario','Nombre creador:')!!}
{!! Form::select ('id_usuario',$usuarios->pluck('nombre','id')->all(),null,['placeholder'=>'Seleccionar','class'=>'form-control','required'])!!}

</div> 


  <div class="form-group">
{!! Form::label ('nombre_servicio','Nombre del servicio:')!!}
{!! Form::text ('nombre_servicio',null,['placeholder'=>'Ingresa nombre ','class'=>'form-control' ,'required','onkeyup'=>'validaciones();'])!!}
</div> 
  <div class="form-group">
{!! Form::label ('descripcion','Descripcion:')!!}
{!! Form::text ('descripcion',null,['placeholder'=>'Ingresa la descripcion','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}
</div> 
 
  <div class="form-group">
{!! Form::label ('marca','Marca:')!!}
{!! Form::text ('marca',null,['placeholder'=>'Ingresa el nombre de la marca','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}
</div> 

  <div class="form-group">
{!! Form::label ('contacto','Contacto:')!!}
{!! Form::text ('contacto',null,['placeholder'=>'Ingresa tu contacto','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}

</div> 
  <div class="form-group">

{!! Form::label ('status','Estatus:')!!}
{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Seleccionar','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}
</div> 
<br>
<br>

{!! Form::submit('Guardar ',['class'=>'btn btn-primary btn-lg'])!!}
{!! Form::close() !!}

 <a class="btn btn-primary btn-lg" href="{!! asset('servicios')!!}">Ver Servicios</a>
 </div>
 </div>


 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@endsection()
 