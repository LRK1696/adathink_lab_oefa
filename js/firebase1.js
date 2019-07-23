var config = {
    apiKey: "AIzaSyC7JzqlZB9ucjYXVqksserzyFw8EPlYVZw",
    authDomain: "hackathonoefa-aa258.firebaseapp.com",
    databaseURL: "https://hackathonoefa-aa258.firebaseio.com",
    projectId: "hackathonoefa-aa258",
    storageBucket: "hackathonoefa-aa258.appspot.com",
    messagingSenderId: "300552608429",
    appId: "1:300552608429:web:8fbddca0b18b3dc7"
};
firebase.initializeApp(config);

var d = new Date()
var t = d.getTime()
var counter = t
document.getElementById("form").addEventListener('submit', e => {

    var task = document.getElementById("task").value
    var description = document.getElementById("description").value
    e.preventDefault()
    console.log(task + " " + description)
    createTask(task, description)
    form.reset()
})

function readTask() {
    var task = firebase.database().ref("reportesagua/")
    task.on("child_added", data => {
        var taskValue = data.val()
        console.log(taskValue)

        document.getElementById("table1").innerHTML += `
      <div class="col-md-12  mt-5 table-responsive">
      <table class="table table-hover">
          <thead>
              <tr>
                  <th colspan="15" scope="col" style="text-align:center;">${taskValue.nombreproyecto}</th>
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
                  <th scope="col" style="text-align:center;">Gráficos</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">${taskValue.puntomuestreo}</th>
                  <td>${taskValue.coc}</td>
                  <td>${taskValue.cue}</td>
                  <td>${taskValue.fecha}</td>
                  <td>${taskValue.zona}</td>
                  <td>${taskValue.norte}</td>
                  <td>${taskValue.este}</td>
                  <td>${taskValue.altitud}</td>
                  <td>${taskValue.precision}</td>
                  <td>${taskValue.utm}</td>
                  <td>${taskValue.ce}</td>
                  <td>${taskValue.od}</td>
                  <td>${taskValue.temperatura}</td>
                  <td>${taskValue.pH}</td>
                  <td>${taskValue.condicionclimatica}</td>
                  <td><a href="registro-agua.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
                  <td><a href="pdf.php"><img src="img/pdf.png" alt="" srcset=""></a></td>
                  <td><a href="#"><img src="img/excel.png" alt="" srcset=""></a></td>
              </tr>
          </tbody>
      </table>
      </div>
      `

    })

}