

@extends('template2.master')
@section('contenido_central')


<div class="container">	
<div  class="text-center wow fadeInDown">
	 
	 
<h1 style="color: black;">Editar Servicio</h1>
</div>

<div class="col-sm-5 col-sm-offset-1">
{!! Form::open(['method'=>'PATCH','url'=>'/servicios/'.$servicio->id,'style'=>'color:black;','id'=>'main-contact-form','class'=>'contact-form','name'=>'contact-form'])!!}
 
 
<div class="form-group">

{!! Form::label ('nombre_servicio','Nombre del servicio:')!!}
{!! Form::text ('nombre_servicio',$servicio->nombre_servicio,['placeholder'=>'Ingresa nombre','class'=>'form-control'])!!}

</div>


<div class="form-group">
{!! Form::label ('id_usuario','Nombre del creador:')!!}
{!! Form::select ('id_usuario',$usuario->pluck('nombre','id')->all(),$servicio->users->id,['placeholder'=>'Seleccionar','class'=>'form-control'])!!}


</div> 

 

<div class="form-group">
{!! Form::label ('Descripcion','Descripcion:')!!}
{!! Form::text ('Descripcion',$servicio->descripcion,['placeholder'=>'Ingresa descripcion','class'=>'form-control'])!!}


</div> 
 

<div class="form-group">
{!! Form::label ('marca','Marca:')!!}
{!! Form::text ('marca',$servicio->marca,['placeholder'=>'Ingresa marca','class'=>'form-control'])!!}


</div> 
 
<div class="form-group">
{!! Form::label ('contacto','Contacto:')!!}
{!! Form::text ('contacto',$servicio->contacto,['placeholder'=>'Ingresa contacto','class'=>'form-control'])!!}


</div> 
 
<div class="form-group">


{!! Form::label ('status','Estatus:')!!}
{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$servicio->status,['placeholder'=>'Seleccionar','class'=>'form-control'])!!}
</div> 
<br>
  
{!! Form::submit('Guardar ',['class'=>'btn btn-primary btn-lg'])!!}
{!! Form::close() !!}
<br>
<a class="btn btn-primary btn-lg" href="{!! asset('servicios')!!}">Ver Servicios</a>
 </div>
 
</div>
    
@endsection()

 