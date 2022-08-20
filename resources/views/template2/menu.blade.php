  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
 
            <div class="container px-4 px-lg-5">
                <a style="color:red;" class="navbar-brand" href="/servicios">Empresa Virtual</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <br>
    <br>
    <br>

    @auth
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a style="color:red;" class="nav-link">Usuario: {{$usuarioactual->nombre}} {{$usuarioactual->apellido}}</a></li>
                        <li class="nav-item"><a style="color:red;" class="nav-link" href="/mis_servicios">Mis servicios</a></li>
                        <li class="nav-item"><a style="color:red;" class="nav-link" href="/servicios">Servicios</a></li>
                        <li class="nav-item"><a style="color:red;" class="nav-link" href="/emisor">Enviados</a></li>
                        <li class="nav-item"><a style="color:red;" class="nav-link" href="/receptor">Recibidos</a></li>
                        <li class="nav-item"><a style="color:red;" class="nav-link" href="/cerrarsesion">Salir</a></li>
                    </ul>
                </div>
            </div>

            @else


            @endauth
        </nav>