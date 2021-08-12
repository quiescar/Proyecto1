<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formula 1</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('img') }}/f1.ico" type="" />

</head>

<body>
    <!---Navbar----->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <img src="{{ asset('img') }}/f1.png">

                    >

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inicio">Lo Ultimo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes-somos">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca-de">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!---End Navbar----->
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="background-color:#f02912">
                <br><br>
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">1</li>

                    <li class="list-group-item">2</li>

                    <li class="list-group-item">3</li>

                    <li class="list-group-item">4</li>

                    <li class="list-group-item">5</li>
                </ul>
                <br><br>
            </div>
            <!---content----->
            <div class="col-md-9" style="background-color:#f6f6f6">
                @yield('content')
            </div>
            <!---End content----->

        </div>

    </div>

    <!---footer----->
    <footer style="background-color:#D9B504">
        <div class="text-center">
            Insertar un pie de página
            <br>
            Puedes crear tu propio encabezado o pie de página con un logotipo de organización y un aspecto
            personalizado, y guardarlos en la galería; o puedes utilizar algún diseño predeterminado y modificarlo o
            utilizarlo tal cual se muestra.
        </div>
    </footer>
    <!---end footer----->
</body>

</html>
