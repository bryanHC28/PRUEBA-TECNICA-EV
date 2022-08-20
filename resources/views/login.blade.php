@extends('template.master')
@section('contenido_central')
<div class="jumbotron">
 
 
 
    <br>
<br>
<br><br>
<br>
<br>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<form action="loginss" method="POST" role="form">
					{{ csrf_field() }}
					<label style="color: black;" for="username">Usuario:</label>
					<input required onkeyup="validacionesprima();" type="text" name="username" class="form-control" placeholder="usuario" id="username" data-rule="minlen:3" data-msg="Capturar mas de 2 caracteres">
					<br />
					<br />
					<label style="color: black;" for="password">Password:</label>
					<input required onkeyup="validacionesprima();" type="password" class="form-control" name="password" placeholder="password" id="password">
					<div class="form-check">
						<label style="color: black;" class="form-check-label">
							<input  class="form-check-input" type="checkbox"> Remember me
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Ingresar</button>
				</form>
			</div>
			<div class="col-sm-5">
				 <h2 style="color: red;">!GRACIAS POR TU PREFERENCIA¡</h2>
				 
			</div>
			<div class="col-sm-2">
 
			</div>
		</div>
	</div>
<br>
<br>
<br>
<br>
 
@endsection()