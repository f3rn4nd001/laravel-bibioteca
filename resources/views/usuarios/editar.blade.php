<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/src/public/css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style>
    html, body {
  background: rgb(17, 23, 65);
  height: 100%;
  overflow: hidden;
  text-align: center;
}

.contact-fp-wrap {
  height: 0px;
	margin: 0 auto;
  position: relative;
  top: 20%;
  transform: translateY(-50%);
  width: 640px;
}

.booton {
  fill: transparent;
  stroke-dasharray: 120 245;
  stroke-dashoffset: -474;
  stroke-width: 10px;
  stroke: url('#logo-gradient');
}

.booton-text {
  color: #fff;
  font-family: 'Lato';
  font-size: 28px;
  letter-spacing: 7px;
  line-height: 30px;
  position: relative;
  top: -48px;
}

@keyframes draw {
  0% {
    stroke-dasharray: 340 540;
    stroke-dashoffset: -474;
    stroke-width: 8px;
  }
  100% {
    stroke-dasharray: 760;
    stroke-dashoffset: 0;
    stroke-width: 2px;
  }
}

.contact-fp-wrap:hover .booton {
  -webkit-animation: 0.5s draw linear forwards;
  animation: 0.5s draw linear forwards;
}

.page-foot-column {
  order: 0;
  flex: 1 1 auto;
  align-self: auto;
  padding: 1em;
  font-family: Lato;
}

button {
  background-color: inherit;
  border-color: inherit;
  text-decoration: none;
  
  &:hover {
    text-decoration: none;
  }
a {
  color: inherit;
  text-decoration: none;
  
  &:hover {
    text-decoration: none;
  }
}

  </style>
  </head>
  
    <body>




<form action="{{url('/usuarios/'.$usuario->id)}}" method="post">
@csrf
{{method_field('PATCH')}}
                      


        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>        
            <table  class="table table-bordered" >
                <thead class="thead-dark " >
                    <tr>
                        <th >Tipo</th>
                        <th >Nombre</th>
                        <th >Apellido</th>
                        <th >Telefono</th>
                        <th >No. Control</th>
                        <th >Escuela de Procedencia</th>
                        <th >Calle</th>
                        <th >Colonia</th>
                        <th >Numero exterior</th>
                        <th >Codigo Postal</th>
                    </tr>
                </thead>
                <tbody>                
                  <tr> 
                  <td><div style = "height: 50px; width: 200px; border: 4px; float: left; ">
                    <select name="tipo" style = "height: 37px; width: 200px; border: 1px double #091bbe;" value="{{$usuario->tipo}}">
                        <option value="visitante">Visitante</option>
                        <option value="Estudiante">Estudiante</option> 
                        <option value="Docente"> Docente</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>   </td>
                    <td><input style="border: 1px double #091bbe;" type="text" name="nombre" class="form-control " placeholder="Nombre" value="{{$usuario->nombre}}"></td>
                    <td><input style="border: 1px double #091bbe;" type="text" name="apellido" class="form-control " placeholder="Apellido" value="{{$usuario->apellido}}"></td>
                    <td><input style="border: 1px double #091bbe;" type="number" name="telefono" class="form-control " placeholder="Telefono" value="{{$usuario->telefono}}"></td>
                    <td><input style="border: 1px double #091bbe;" type="number" name="numerocontrol" class="form-control " placeholder="N.Cotrol" value="{{$usuario->numerocontrol}}"></td>
                    <td><input style="border: 1px double #091bbe;" type="text" name="escuelaProcedencia" class="form-control " list="datalist1" placeholder="Escuela de Procedencia" value="{{$usuario->escuelaProcedencia}}">
                        <datalist id="datalist1">
                        <option value="Universidad Vizcaya de las Americas">Universidad Vizcaya de las Americas</option>
                        <option value="Universidad Tecnológica de Manzanillo">Universidad Tecnológica de Manzanillo</option>
                        <option value="Universidad Multitécnica Profesional S.C.">Universidad Multitécnica Profesional S.C.</option>
                        <option value="Universidad ITECCE">Universidad ITECCE</option>
                        <option value="Universidad del Desarrollo Profesional">Universidad del Desarrollo Profesional</option>
                        <option value="Universidad de Colima Campus El Naranjo">Universidad de Colima Campus El Naranjo</option>
                        <option value="Facultad de Comercio Exterior">Facultad de Comercio Exterior</option>
                        <option value="Facultad de Turismo y Gastronomía">Facultad de Turismo y Gastronomía</option>
                        <option value="Instituto Universitario de Bellas Artes de Manzanillo">Instituto Universitario de Bellas Artes de Manzanillo</option>
                        <option value="Centro de Estudios Políticos y Constitucionales">Centro de Estudios Políticos y Constitucionales</option>
                        <option value="Centro de Estudios Profesionales de Colima">Centro de Estudios Profesionales de Colima</option>
                        <option value="Instituto del Potosí">Instituto del Potosí</option>
                        <option value="Bachilleratos Técnicos 23">Bachilleratos Técnicos 23</option>
                        <option value="Bachilleratos Técnicos 27">Bachilleratos Técnicos 27</option>
                        <option value="Universidad de Colima: Facultad de Contabilidad y Administracion de Manzanillo">Universidad de Colima: Facultad de Contabilidad y Administracion de Manzanillo</option>
                        <option value="Universidad de Colima Facultad de Ingeniería Electromecánica">Universidad de Colima Facultad de Ingeniería Electromecánica</option>
                        <option value="Centro Universitario de Investigaciones Oceanologicas CUNIVO">Centro Universitario de Investigaciones Oceanologicas CUNIVO</option>
                        <option value="Bachillerato Técnico No. 8, 9 y 10 Universidad de Colima">Bachillerato Técnico No. 8, 9 y 10 Universidad de Colima</option>
                        <option value="PRIMER COLEGIO DE MANZANILLO">PRIMER COLEGIO DE MANZANILLO</option>
                        </datalist>
                    </td>
                    <td><input style="border: 1px double #091bbe;" type="text" name="calle" class="form-control " placeholder="calle" value="{{$usuario->calle}}"></td>
                    <td><input style="border: 1px double #091bbe;" type="text" name="colonia" class="form-control " placeholder="Colonia" value="{{$usuario->colonia}}"></td>
                    <td><input style="border: 1px double #091bbe;" type="number" name="numExt" class="form-control " placeholder="numExt" value="{{$usuario->numExt}}"></td>
                    <td><input style="border: 1px double #091bbe;" type="number" name="cp" class="form-control " placeholder="cp" value="{{$usuario->cp}}"></td>

                  </tr>
                </tbody>
              </table>
            
              <div class="contact-fp-wrap">
                <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logo-gradient" x1="60%" y1="0%" x2="95%" y2="100%" > 
                            <stop offset="0%" stop-color="#F79533">
                                <animate attributeName="stop-color" values="#F79533; #F37055; #EF4E7B; #A166AB; #5073B8; #1098AD; #07B39B; #6DBA82; #F79533" dur="4s" repeatCount="indefinite"></animate>
                            </stop>
                            <stop offset="100%" stop-color="#F79533">
                                <animate attributeName="stop-color" values="#F37055; #EF4E7B; #A166AB; #5073B8; #1098AD; #07B39B; #6DBA82; #F79533; #F37055" dur="4s" repeatCount="indefinite"></animate>
                            </stop>
                        </linearGradient> 
                    </defs>
                    <rect class="booton" height="60" width="320" />
                </svg>
                <a ><div class="booton-text">  <button type="submit">Guardar Cambios</button></div></a>
            </div>
         

</form>



</body>
</html>