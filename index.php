<?php 

ob_start();

session_start();

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CONVENCIÓN JAS PUEBLA SUR - 2022</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>

      html{

        max-height:100%;

      }
	h1{font-size: 2 vw;}
	h2{font-size: 1.5 vw;}
	h3{font-size: 1 vw;}


    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container-fluid">

    <a class="navbar-brand" href="#">JAS Puebla Sur</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">

          <a class="nav-link active" aria-current="page" href="#" id="Home">Inicio</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" aria-current="page" href="#" id="Galeria">Conoce el Guarda</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" aria-current="page" href="#" id="actividades">Cronograma de Actividades</a>

        </li>

        <?php 

                if (isset($_SESSION['ok'])) {

                    echo '<li class="nav-item">

                    <a class="nav-link" aria-current="page" href="#" id="inscritos">Lista de Inscritos</a>

                  </li>';

                }

        ?>

      </ul>

      <form class="d-flex" style="margin-right:10px;">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-right:10px;">

        <li class="nav-item dropdown" style="margin-right:10px;">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                <?php 

                if (isset($_SESSION['ok'])) {

                    echo $_SESSION['email'];

                }else{

                    echo "Iniciar Sesión";

                }

                ?>

            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-right:10px;">

                <?php 

                if (isset($_SESSION['ok'])) {

                    echo '<li><a class="dropdown-item" href="#" id="logout">Cerrar Sesión</a></li>';

                }else{

                    echo '<li><a class="dropdown-item" href="#" id="login">Iniciar Sesión</a></li>

                    <li><hr class="dropdown-divider"></li>

                    <li><a class="dropdown-item" href="#" id="registro">Registrarse</a></li>';

                }

                ?>

            </ul>

            </li>

      </ul>

      </form>

    </div>

  </div>

</nav>

<div id="contenido">

</div>

<!-- Button trigger modal -->

<button type="button" id="loginModalButton" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal" style="display:none;">

  Launch demo modal

</button>



<!-- Modal -->

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>

      <div class="modal-body">

        <form id="formlogin">

        <div class="mb-3 row">

            <label for="staticEmail" class="col-sm-2 col-form-label">Correo Electrónico</label>

            <div class="col-sm-10">

            <input type="text" class="form-control" id="staticEmail" value="email@example.com" required>

            </div>

        </div>

        <div class="mb-3 row">

            <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>

            <div class="col-sm-10">

            <input type="password" class="form-control" id="inputPassword" required>

            </div>

        </div>

        <div class="mb-3 row text-center">

            <div class="col-sm-12 text-center">

                <input type="submit" class="btn btn-success" id="submitLogin" value="Iniciar Sesión">

            </div>

        </div>

        </form>

      </div>

    </div>

  </div>

</div>

</body>

</html>

<script>

$(document).ready(function(){

    $("#contenido").load("pages/home.html");

    $("#Galeria").click(function(){

      $("#contenido").load("pages/galeria.php");

    });

    $("#Home").click(function(){

      $("#contenido").load("pages/home.html");

    });

    $("#actividades").click(function(){

      $("#contenido").load("pages/actividades.html");

    });

    $("#inscritos").click(function(){

      $("#contenido").load("pages/inscritos.php");

    });

    $("#login").click(function(){

        $("#loginModalButton").trigger('click');

    });

    $("#logout").click(function(){

        $.ajax({

          url: "logout.php",

          method:"POST",

          data:{logout:true},

          success:function(r){

            location.reload();

          }

        });

    });

    $("#formlogin").submit(function(event){

      event.preventDefault();

        $.ajax({

            url: "login.php",

            method: "POST",

            data:{email:$("#staticEmail").val(),pass:$("#inputPassword").val()},

            success: function(r){

                if(r == 1){

                    alert("Sesión iniciada con éxito");

                    location.reload();

                }else{

                    alert("Contraseña o correo electrónico incorrectos");

                    location.reload();

                }

            }

        });

    });

    $("#registro").click(function(){

        window.location.href="registro.php";

    });

});

</script>