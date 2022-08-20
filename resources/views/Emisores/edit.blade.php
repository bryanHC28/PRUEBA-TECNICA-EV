

@extends('template2.master')
@section('contenido_central')

<br>
<br>
<br>
<div class="container">	
<div  class="text-center wow fadeInDown">
	 
	 
<h1 style="color: black;">MENSAJERIA</h1>
</div>

<div class="col-sm-5 col-sm-offset-1">
{!! Form::open(['method'=>'PATCH','url'=>'/emisor/'.$servicio->id,'style'=>'color:black;','id'=>'main-contact-form','class'=>'contact-form','name'=>'contact-form'])!!}
 


<div class="form-group">
{!! Form::label ('id_usuario','Id receptor:')!!}
{!! Form::text ('id_usuario',$servicio->id_usuario,['placeholder'=>'Seleccionar','class'=>'form-control'])!!}


</div> 

 
<div class="form-group">

{!! Form::label ('id_servicio','Id servicio:')!!}
{!! Form::text ('id_servicio',$servicio->id,['placeholder'=>'Ingresa nombre','class'=>'form-control'])!!}

</div>


<div class="form-group">
{!! Form::label ('descripcion','Mensaje:')!!}
{!! Form::text ('descripcion',null,['placeholder'=>'Ingresa descripcion','class'=>'form-control'])!!}


</div> 
   
 
<div class="form-group">


{!! Form::label ('status','Estatus:')!!}
{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$servicio->status,['placeholder'=>'Seleccionar','class'=>'form-control'])!!}
</div> 
<br>
  
{!! Form::submit('Enviar ',['class'=>'btn btn-primary btn-lg'])!!}
{!! Form::close() !!}
<br>
<a class="btn btn-primary btn-lg" href="{!! asset('servicios')!!}">Ver Servicios</a>
 </div>
 
</div>
    
@endsection()

 