<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>AGRO SMS</title>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

    *{
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
    }
    #menuBarra{
        background-color: transparent;
        position: fixed; 
        top: 0;
        left: 0; 
        width: 100%; 
        z-index: 1000;  
    }
    /* /color barra de navegacio/ */
    #menuBarra ul li a {
        color: white;
        text-decoration: none;
    }



    /* colores predeterminados */
    :root {
        --bg-color: #1c1c1c;
        --font-color: #fff;
        --secondary-bg-color: #00ff37;
        --font: "Poppins";
    }

    html{
        scroll-behavior: smooth;
    }
    /* barra de navegacion  */


    /* Section inicio */

    .inicio-section {
        background-image: linear-gradient(rgba(0, 0, 0, 0.82), rgba(0, 0, 0, 0.691)), url('images/fondo.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .logo {
        max-width: 200px;
        margin-bottom: 20px;
    }

    .slogan {
        font-size: 18px;
        color: #ffffff;
    }

    /* estilos para las cards */
    .card {
        transition: transform .3s; 
    }
    
    .card:hover {
        transform: scale(1.05); 
    }
    .card a {
        color: #f2f8ff; 
    }
    .card {
        margin-bottom: 20px;
    }
    .card img {
        max-width: 100%;
        height: auto;
    }
    .card a:hover {
        color: #000000; 
        text-decoration: none; 
    }
    
    .card .card-img-top {
        transition: transform .3s;
    }
    
    .card:hover .card-img-top {
        transform: scale(1.1);
    }
        body {
            font-family: 'Roboto', sans-serif;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .card-title {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg" id="menuBarra" >
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" width="65" height="60" class="d-inline-block align-top" alt="Logo" > 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav ml-auto" >
    <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Biblioteca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ayudanos a mejorar <i class="fa-regular fa-envelope"></i> </a>
                </li>
    </ul>
  </div>
</nav>


    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Agregar el JS de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AGRO S.M.S</title>
  <!-- Agregar el CSS de Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>


</body>
</html>