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
                <div class="container order-md-1">
                        <div class="col-md-12 mt-3">
                                    <p style="text-align: center;"><strong>${taskValue.nombreproyecto}</th></tr></strong></p>
                        </div>
                        <div class="row">
                                    <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                                <label for="example-date-input" class="form-label" style="color: #9A9A9A;">CUE</label>
                                                <input class="form-control" type="text" value="${taskValue.cue}</th>
                                                </tr>" id="date-cue" placeholder="####-##-####">       
                                    </div> 
                                    </div>
                                    <div class="col-md-6  mb-3">
                                    <div class="form-group">
                                                <label for="example-date-input" class="form-label" style="color: #9A9A9A;">COC</label>
                                                <input class="form-control" type="text" value="${taskValue.coc}</th>
                                                </tr>" id="date-cuc" placeholder="###-#-####-###">   
                                    </div>           
                                    </div>    
                        </div>

                        <div class="row">
                                    <div class="col-md-4  mb-3">
                                    <div class="form-group">
                                                <label for="example-date-input" class="form-label" style="color: #9A9A9A;">PUNTO DE MUESTREO</label>
                                                <input class="form-control" type="text" value="${taskValue.puntomuestreo}" id="date-cuc" placeholder="">   
                                    </div>       
                                    </div>
                                    <div class="col-md-8  mb-3">
                                    <div class="form-group">
                                                <label for="example-date-input" class="form-label" style="color: #9A9A9A;">FECHA Y HORA</label>
                                                <input class="form-control" type="date" type="text" value="${taskValue.fecha}" id="date-cuc" placeholder="">   
                                    </div>
                                    </div>

                        </div>
                                    <div class="row">
                                                <div class="col-md-12  mb-3">
                                                <div class="form-group">
                                                            <label for="example-date-input" class="form-label" style="color: #9A9A9A;">DESCRIPCION</label>
                                                            <input class="form-control" type="text" value="${taskValue.observacion}" id="date-cuc" placeholder="">   
                                                </div>                   
                                                </div>
                                    </div>
                         <div class="row">
                                    <div class="col-md-3  mb-3">
                                    <div class="form-group">
                                                <label for="example-date-input" class="form-label" style="color: #9A9A9A;">ZONA</label>
                                                <select name="" id="" class="form-control">
                                                <option>escoger</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                </select>  
                                    </div>        
                                    </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">ESTE</label>
                                    <input class="form-control" type="text" value="${taskValue.este}" id="date-cuc" placeholder="6 cifras (metros)">  
                                </div>        
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">NORTE</label>
                                    <input class="form-control" type="text" value="${taskValue.norte}" id="date-cuc" placeholder="6 cifras (metros)">  
                                </div>        
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-label" style="color: #9A9A9A;">DATUM</label>
                                        <input class="form-control" type="text" value="${taskValue.datum}" id="date-cuc" placeholder="">                       
                                    </div>        
                         </div>
                         <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-label" style="color: #9A9A9A;">ALTITUD</label>
                                        <input class="form-control" type="text" value="${taskValue.altitud}" id="date-cuc" placeholder="3 cifras (msnm)">  
                                    </div>  
                         </div>
                         <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-label" style="color: #9A9A9A;">PRECISIÓN</label>
                                        <input class="form-control" type="text" value="${taskValue.precision}" id="date-cuc" placeholder="1 cifra (metros)">  
                                    </div>  
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-5 order-md-1 mb-4">
                            <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">P.H</label>
                                    <input class="form-control" type="text" id="dato-ph" value="${taskValue.pH}">  
                             </div>
                             <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">CE</label>
                                    <input class="form-control" type="text" id="dato-ce" value="${taskValue.ce}"> 
                             </div>
                             <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">OD</label>
                                    <input class="form-control" type="text"  id="dato-od" value="${taskValue.od}">  
                             </div>
                             <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">Temperatura</label>
                                    <input class="form-control" type="text" id="dato-temp" value="${taskValue.temperatura}>  
                            </div>
                            <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">Profundidad</label>
                            <div class="form-group">
                            <input class="form-control" type="text" id="dato-profun" value="${taskValue.od}">  
                            </div>
                            <div class="form-group">
                                    <label for="example-date-input" class="form-label" style="color: #9A9A9A;">Condición climática</label>
                                    <input class="form-control" type="text" value="" id="dato-clima" value="${taskValue.condicionclimatica}">  
                            </div>
                            <button class="btn btn-primary" onclick="calcular()">Calcular</button>
                        </div>
                        <div class="col-md-7 order-md-2 p-5">
                                  <canvas id="myChart" width="470" height="470"></canvas>    
                        </div>
                    </div>
                </div>
         </div>`
            })
}