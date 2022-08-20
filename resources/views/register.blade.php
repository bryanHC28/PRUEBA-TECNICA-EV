@extends('template.master')
@section('contenido_central')
<br>
<br>
<br>
<br>
<div class="jumbotron">
     <script src="{!!asset('js/valreg.js')!!}"></script>
    <h1 style="color: black;">REGISTRAR NUEVO USUARIO</h1>
    
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <form method="POST" role="form" class="contactForm" action="registerss">
                        {{ csrf_field() }}
                        <br>
<br>
                        <div class="form-group">
                            <input required="" type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre"/>
                            <div class="validation"></div>
                        </div>
                        <br>
<br>
                        <div class="form-group">
                            <input required="" type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido "/>
                            <div class="validation"></div>
                        </div>
                        <br>
<br>
                        <div class="form-group">
                            <input required="" type="number" name="edad" class="form-control" id="edad" placeholder="Edad"/>
                            <div class="validation"></div>
                        </div>
                        <br>
<br>
                        <div class="form-group">
                            <input required onkeyup="validacionesprima();" type="text" name="username" class="form-control" id="username" placeholder="Username"/>
                            <div class="validation"></div>
                        </div>
                        
                        <br>
<br>
                        
                        <div class="form-group">
                            <input required="" type="password" class="form-control" name="password" id="password" placeholder="Password" data-msg="Capturar password"/>
                            <div class="validation"></div>
                        </div>
                        <br>
<br>
                        <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Registrar
                                </button>
                        </div>
                    </form>>
            </div>
            <div class="col-sm-5">
                 <h2 style="color: red;">!GRACIAS POR TU PREFERENCIA¡</h2>
				 
            </div>
            <div class="col-sm-2">

            </div>
        </div>
    </div>

@endsection()