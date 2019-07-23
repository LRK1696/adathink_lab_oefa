<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportes agua</title>
    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eada1e3dde.js"></script>
</head>
<body class="bg-light" onload="readTask()">

      <div class=""  style="" width="100%">
          <img src="img/reportes-agua.png" width="100%" height="200px" alt="">
      </div>
      <header>    
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Sobre OEFA</h4>
              <p class="text-light">“Promover el cumplimiento de las obligaciones ambientales en los agentes económicos y la mejora del Sistema Nacional de Gestión Ambiental (SNGA) de manera articulada, efectiva y transparente, contribuyendo con el desarrollo sostenible del país y el bienestar social”.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                <a href="home.php"> <h5 class="text-white">Home</h5></a>
                <a href="#"> <h5 class="text-white">Configuración</h5></a>
                <a href="index.php"> <h5 class="text-white">Cerrar Sesión</h5></a>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-light bg-light shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
        <main role="main">

            <div id="table1">
    
            <!--
            <div class="col-md-12  mt-5 table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="15" scope="col" style="text-align:center;">Monitoreo de Agua EAT Tía María</th>
                    </tr>
                    <tr>
                        <th scope="col" style="text-align:center;">Punto de Muestreo</th>
                        <th scope="col" style="text-align:center;">COC</th>
                        <th scope="col" style="text-align:center;" >CUE</th>
                        <th scope="col" style="text-align:center;">Fecha</th>
                        <th score="col" style="text-align:center;">Zona</th>
                        <th scope="col" style="text-align:center;">Norte</th>
                        <th scope="col" style="text-align:center;">Este</th>
                        <th scope="col" style="text-align:center;">Altitud</th>
                        <th scope="col" style="text-align:center;">Precisión</th>
                        <th scope="col" style="text-align:center;">Coordenadas</th>
                        <th scope="col" style="text-align:center;">CE</th>
                        <th scope="col" style="text-align:center;">OD</th>
                        <th scope="col" style="text-align:center;">Temperatura</th>
                        <th scope="col" style="text-align:center;">pH</th>
                        <th scope="col" style="text-align:center;">Condición Climática</th>
                        <th scope="col" style="text-align:center;">Detalle</th>
                        <th scope="col" style="text-align:center;">PDF</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                </tbody>
            </table>
            </div>

            <div class="col-md-12  mt-5 table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="15" scope="col" style="text-align:center;">Monitoreo de Agua EAT Tía María</th>
                    </tr>
                    <tr>
                        <th scope="col" style="text-align:center;">Punto de Muestreo</th>
                        <th scope="col" style="text-align:center;">COC</th>
                        <th scope="col" style="text-align:center;" >CUE</th>
                        <th scope="col" style="text-align:center;">Fecha</th>
                        <th score="col" style="text-align:center;">Zona</th>
                        <th scope="col" style="text-align:center;">Norte</th>
                        <th scope="col" style="text-align:center;">Este</th>
                        <th scope="col" style="text-align:center;">Altitud</th>
                        <th scope="col" style="text-align:center;">Precisión</th>
                        <th scope="col" style="text-align:center;">Coordenadas</th>
                        <th scope="col" style="text-align:center;">CE</th>
                        <th scope="col" style="text-align:center;">OD</th>
                        <th scope="col" style="text-align:center;">Temperatura</th>
                        <th scope="col" style="text-align:center;">pH</th>
                        <th scope="col" style="text-align:center;">Condición Climática</th>
                        <th scope="col" style="text-align:center;">Detalle</th>
                        <th scope="col" style="text-align:center;">PDF</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                </tbody>
            </table>
            </div>

            <div class="col-md-12  mt-5 table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="15" scope="col" style="text-align:center;">Monitoreo de Agua EAT Tía María</th>
                    </tr>
                    <tr>
                        <th scope="col" style="text-align:center;">Punto de Muestreo</th>
                        <th scope="col" style="text-align:center;">COC</th>
                        <th scope="col" style="text-align:center;" >CUE</th>
                        <th scope="col" style="text-align:center;">Fecha</th>
                        <th score="col" style="text-align:center;">Zona</th>
                        <th scope="col" style="text-align:center;">Norte</th>
                        <th scope="col" style="text-align:center;">Este</th>
                        <th scope="col" style="text-align:center;">Altitud</th>
                        <th scope="col" style="text-align:center;">Precisión</th>
                        <th scope="col" style="text-align:center;">Coordenadas</th>
                        <th scope="col" style="text-align:center;">CE</th>
                        <th scope="col" style="text-align:center;">OD</th>
                        <th scope="col" style="text-align:center;">Temperatura</th>
                        <th scope="col" style="text-align:center;">pH</th>
                        <th scope="col" style="text-align:center;">Condición Climática</th>
                        <th scope="col" style="text-align:center;">Detalle</th>
                        <th scope="col" style="text-align:center;">PDF</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                </tbody>
            </table>
            </div>

            <div class="col-md-12  mt-5 table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="15" scope="col" style="text-align:center;">Monitoreo de Agua EAT Tía María</th>
                    </tr>
                    <tr>
                        <th scope="col" style="text-align:center;">Punto de Muestreo</th>
                        <th scope="col" style="text-align:center;">COC</th>
                        <th scope="col" style="text-align:center;" >CUE</th>
                        <th scope="col" style="text-align:center;">Fecha</th>
                        <th score="col" style="text-align:center;">Zona</th>
                        <th scope="col" style="text-align:center;">Norte</th>
                        <th scope="col" style="text-align:center;">Este</th>
                        <th scope="col" style="text-align:center;">Altitud</th>
                        <th scope="col" style="text-align:center;">Precisión</th>
                        <th scope="col" style="text-align:center;">Coordenadas</th>
                        <th scope="col" style="text-align:center;">CE</th>
                        <th scope="col" style="text-align:center;">OD</th>
                        <th scope="col" style="text-align:center;">Temperatura</th>
                        <th scope="col" style="text-align:center;">pH</th>
                        <th scope="col" style="text-align:center;">Condición Climática</th>
                        <th scope="col" style="text-align:center;">Detalle</th>
                        <th scope="col" style="text-align:center;">PDF</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">LBoq1</th>
                        <td>555</td>
                        <td>237</td>
                        <td>20/07/19</td>
                        <td>8102351</td>
                        <td>8102351</td>
                        <td>19 Sur</td>
                        <td>WGS84</td>
                        <td>WGS84</td>
                        <td>-56</td>
                        <td>432432</td>
                        <td>435435</td>
                        <td>17°</td>
                        <td>8.5</td>
                        <td>Templado</td>
                        <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                        <td><a href=""><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                </tbody>
            </table>
            </div>
            -->

        </main>
<script src="js/firebase1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>