<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Agua</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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
    <div class="content">
        <div class="table1">

        <div class="container order-md-1">
                    <div class="col-md-12 mt-3">
                        <p style="text-align: center;"><strong></strong></p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">CUE</label>
                                    <input class="form-control" type="text" value="123" id="date-cue" placeholder="####-##-####">       
                                </div> 
                        </div>
                        <div class="col-md-6  mb-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">CUC</label>
                                    <input class="form-control" type="text" value="123" id="date-cuc" placeholder="###-#-####-###">   
                                </div>           
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col-md-4  mb-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">PUNTO DE MUESTREO</label>
                                    <input class="form-control" type="text" value="CAT-01" id="date-cuc" placeholder="">   
                                </div>       
                        </div>
                        <div class="col-md-8  mb-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">FECHA</label>
                                    <input class="form-control" type="date" type="text" value="2019-07-20" id="date-cuc" placeholder="">   
                                </div>
                        </div>

                    </div>
                    <div class="row">
                         <div class="col-md-12  mb-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">OBSERVACIÓN</label>
                                    <input class="form-control" type="text" value="Blockchain" id="date-cuc" placeholder="">   
                                </div>                   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3  mb-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">ZONA</label>
                                    <select name="" id="" class="form-control">
                                        <option>escoger</option>
                                        <option selected>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                    </select>  
                                </div>        
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">ESTE</label>
                                    <input class="form-control" type="text" value="" id="date-cuc" placeholder="6 cifras (metros)">  
                                </div>        
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">NORTE</label>
                                    <input class="form-control" type="text" value="" id="date-cuc" placeholder="6 cifras (metros)">  
                                </div>        
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-label" style="color: #9A9A9A;">DATUM</label>
                                        <input class="form-control" type="text" value="" id="date-cuc" placeholder="">                       
                                    </div>        
                         </div>
                         <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-label" style="color: #9A9A9A;">ALTITUD</label>
                                        <input class="form-control" type="text" value="" id="date-cuc" placeholder="3 cifras (msnm)">  
                                    </div>  
                         </div>
                         <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-label" style="color: #9A9A9A;">PRECISIÓN</label>
                                        <input class="form-control" type="text" value="" id="date-cuc" placeholder="1 cifra (metros)">  
                                    </div>  
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-5 order-md-1 mb-4">
                            <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">P.H</label>
                                    <input class="form-control" type="text" id="dato-ph" placeholder="" value="5">  
                             </div>
                             <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">CE</label>
                                    <input class="form-control" type="text" value="8" id="dato-ce" placeholder="">  
                             </div>
                             <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">OD</label>
                                    <input class="form-control" type="text"  id="dato-od" placeholder="" value="3">  
                             </div>
                             <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">Temperatura</label>
                                    <input class="form-control" type="text" id="dato-temp" placeholder="" value="20">  
                            </div>
                            <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">Profundidad</label>
                                    <input class="form-control" type="text" id="dato-profun" placeholder="" >  
                            </div>
                            <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">Condición climática</label>
                                    <input class="form-control" type="text" value="" id="dato-clima" placeholder="">  
                            </div>
                            <button class="btn btn-primary" onclick="calcular()">Calcular</button>
                        </div>
                        <div class="col-md-7 order-md-2 p-5">
                                  <canvas id="myChart" width="470" height="470"></canvas>    
                        </div>
                    </div>
                </div>
         </div>
  
         <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var data = [];
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['pH', 'CE uS/cm', 'OD mg/L', 'T C°', 'Profundidad'],
                    datasets: [{
                        label: ' Valores Estándar',
                        data: [ 6.5,10,5,3,8],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },{
                        label:'Valores del Reporte',
                        data: data,
                        backgroundColor: 'rgba(0, 99, 132, 0.2)',
                        borderColor: 'rgba(0, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            function calcular(){
                  var value1 = document.getElementById('dato-ph').value;
                  var value2 = document.getElementById('dato-ce').value;
                  var value3 = document.getElementById('dato-od').value;
                  var value4 = document.getElementById('dato-temp').value;
                  var value5 = document.getElementById('dato-profun').value;
                  console.log(data);
                  if(data.length == 0){
                    data.push(value1,value2,value3,value4,value5);
                    myChart.data.datasets[1].data = data;
                    console.log(data);
                    myChart.update();
                }else{
                    data.splice(0,data.length);
                    data.push(value1,value2,value3,value4,value5);
                    myChart.data.datasets[1].data = data;
                    myChart.update();
                    console.log(data);   
                }
            }
        </script>
        <script src="js/firebase2.php"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>