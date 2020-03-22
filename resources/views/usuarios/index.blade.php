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
    *{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body{
  background-image: url('./svg/fondo.jpg');
  background-color: rgb(100,100,100);
  background-blend-mode: soft-light;
  background-size:cover;
  background-position:center;
}

.wrap{
	width: 1100px;
	margin: 50px auto;
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.tarjeta-wrap{
	margin: 10px;
	-webkit-perspective: 800;
	perspective: 800;
  
}

.tarjeta{
	width: 300px;
	height: 350px;
	background: #F29720;
	position: relative;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-transition: .7s ease;
	transition: .7s ease;
	-webkit-box-shadow: 0px 10px 15px -5px rgba(0,0,0,0.65);
	box-shadow: 0px 10px 15px -5px rgba(0,0,0,0.65);
 border-radius: 200px; border: 5px double #010846;
}

.adelante, .atras{
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
   border-radius: 200px; border: 1px double #010846;
}

.adelante{
	width: 100%;
}

.atras{
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);

	padding: 15px;
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-ms-flex-align: center;
	align-items: center;

	text-align: center;
	color: #fff;
	font-family: "open sans";
  background: #F29720;
}

.tarjeta-wrap:hover .tarjeta{
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);
}

.card1{
	background-image: url('./svg/Captura.PNG');
	background-size: cover;
  border-radius: 200px; border: 1px double #010846;
}


  </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light"style=" background-color: #DA4453; background: -webkit-linear-gradient(to top, #89216B, #DA4453); background: linear-gradient(to top, #89216B, #DA4453);">
    <a class="navbar-brand" href="#">biblioteca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height: 60px; pading:100px; padding-left: 100px; padding-right: 100px;"></div>
    <ul class="navbar-nav mr-auto" style="padding-right: 6%;">
      <li style="background: rgb(226,226,226); background: -moz-radial-gradient(center, ellipse cover, rgb(226,226,226) 0%, rgb(168,166,168) 60%, rgb(168,166,168) 62%, rgb(105,93,105) 93%, rgb(254,254,254) 100%); background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgb(226,226,226)), color-stop(60%, rgb(168,166,168)), color-stop(62%, rgb(168,166,168)), color-stop(93%, rgb(105,93,105)), color-stop(100%, rgb(254,254,254))); background: -webkit-radial-gradient(center, ellipse cover, rgb(226,226,226) 0%, rgb(168,166,168) 60%, rgb(168,166,168) 62%, rgb(105,93,105) 93%, rgb(254,254,254) 100%); background: -o-radial-gradient(center, ellipse cover, rgb(226,226,226) 0%, rgb(168,166,168) 60%, rgb(168,166,168) 62%, rgb(105,93,105) 93%, rgb(254,254,254) 100%); background: -ms-radial-gradient(center, ellipse cover, rgb(226,226,226) 0%, rgb(168,166,168) 60%, rgb(168,166,168) 62%, rgb(105,93,105) 93%, rgb(254,254,254) 100%); background: radial-gradient(ellipse at center, rgb(226,226,226) 0%, rgb(168,166,168) 60%, rgb(168,166,168) 62%, rgb(105,93,105) 93%, rgb(254,254,254) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe', GradientType=1 ); border-radius: 20px; border: 1px double #010846;" class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #abbaab; background: -webkit-linear-gradient(to bottom, #ffffff, #abbaab); background: linear-gradient(to bottom, #ffffff, #abbaab); border: 2px double #010846;">
          <a type="button" class="dropdown-item" data-target=".ModalAgredarUsuarios"  data-toggle="modal">Agregar</a>
          <div class="dropdown-divider"></div>
          <a type="button" class="dropdown-item" data-target=".ModalMostarUsuarios"  data-toggle="modal">Mostrar</a>
        </div>
      </li>
      <div style = " width: 10px; "></div>     
    </ul>   
  </nav>
  <br>

 <!-- INICIO MODAL AGREGAR USUARIO -->

  <div class="modal fade ModalAgredarUsuarios" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">      
      <div class="modal-content" >
        <div class="modal-header"> 
          <h1>usuarios</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times; </span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{url('/usuarios')}}" method="POST">
        @csrf
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
          <select name="tipo" style = "height: 37px; width: 200px; border: 1px double #091bbe;">
            <option value="visitante">Visitante</option>
            <option value="Estudiante">Estudiante</option> 
            <option value="Docente"> Docente</option>
            <option value="Administrador">Administrador</option>
           </select>
        </div>        
        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>        
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
          <input type="text" style="border: 1px double #091bbe;" name="nombre" class="form-control " placeholder="Nombre">
        </div>        
        <div style = "height: 50px; width: 10px; border: 4px; float: left; "></div>        
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
          <input type="text" name="apellido" class="form-control " style="border: 1px double #091bbe;" placeholder="Apellido">
        </div>        
        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>        
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
          <input type="number" name="telefono" class="form-control " placeholder="Telefono" style="border: 1px double #091bbe;">
        </div> 
        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>        
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
          <input style="border: 1px double #091bbe;" type="number" name="numerocontrol" class="form-control " placeholder="Numero de Control" >
        </div>        
        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>        
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
         <input type="text " name="escuelaProcedencia"style="border: 1px double #091bbe;" list="datalist1" placeholder="Escuela de Procedencia">
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
         </div>        
        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>        
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
          <input  style="border: 1px double #091bbe;" type="text" name="calle" class="form-control " placeholder="Calle" >
        </div>        
        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>        
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
          <input style="border: 1px double #091bbe;" type="text" name="colonia" class="form-control " placeholder="Colonia">
        </div>        
        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>        
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
          <input style="border: 1px double #091bbe;" type="number" name="numExt" class="form-control " placeholder="Numero Exterior" >
        </div>        
        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>        
        <div style = "height: 50px; width: 200px; border: 4px; float: left; ">
          <input style="border: 1px double #091bbe;" type="number" name="cp" class="form-control " placeholder="Codigo Postal" >
        </div>        
        <div style = "height: 50px; width: 10px; border: 4px; float: left;"></div>             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
 <!-- FIN MODAL AGREGAR USUARIO -->

 <div class="modal fade ModalMostarUsuarios" tabindex="-1"  role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document" >      
        <div class="modal-content" >
          <div class="modal-header"> 
            <h1>usuarios</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>        
            <div class="modal-body" style="border:1px solid; height:400px; width:auto; overflow-y:scroll; overflow-x:hidden;" >
              <div style="border:1px solid; overflow-x:scroll; overflow-y:hidden;">        
                <table  class="table table-bordered" >
                  <thead class="thead-dark " >
                    <tr>
                      <th></th>
                      <th >Tipo</th>
                      <th >Telefono</th>
                      <th >Nombre</th>
                      <th >Apellido</th>
                      <th >No. Control</th>
                      <th >Escuela de Procedencia</th>
                      <th >Calle</th>
                      <th >Colonia</th>
                      <th >Numero exterior</th>
                      <th >Codigo Postal</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($usuarios as $usuario)
                    <tr>
                      <td>  
                         <a href="{{url('/usuarios/'.$usuario->id.'/edit')}}" style=" font-size: 15px;  letter-spacing: 3px; "><button>Editar</button></a>
                         <br>
                         <form action="{{url('/usuarios/'.$usuario->id)}}" method="POST">
                         @csrf
                         {{method_field('DELETE')}}
                         <button style=" font-size: 15px;  letter-spacing: 1px;" onclick="return confirm('¿Borrar?');" type="submit">Eliminar</button>
                        </form>
                      </td>
                      <td>{{$usuario->tipo}}</td>
                      <td>{{$usuario->telefono}}</td>
                      <td>{{$usuario->nombre}}</td>
                      <td>{{$usuario->apellido}}</td>
                      <td>{{$usuario->numerocontrol}}</td>
                      <td>{{$usuario->escuelaProcedencia}}</td>
                      <td>{{$usuario->calle}}</td>
                      <td>{{$usuario->colonia}}</td> 
                      <td>{{$usuario->numExt}}</td>
                      <td>{{$usuario->cp}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
 <!-- FIN MODAL DE MOSTRAR USUARIOS-->

 <!-- INICIO DE PERSONA -->
 <div class="container">
    <center>
      <h1 style="color: #eeeff5;" data-toggle="tooltip" data-placement="bottom" title="desarrolladores">
      Quienes somos
      </h1>
      </center>
      <center><h5 style="color: #eeeff5;">Somos un equipo de desarrolladores con <br>un objetivo en comun brindar una seguridad en tu hogar <br> respaldado por aplicaciones</h5></center>
    </div>
 <!-- INICIO DE PERSONA Fernando--> 
 <div class="wrap">
		<div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante card1">
        </div>
				<div class="atras ">
					<p>Carlso Fernando Ventura Marin Desarrollador de Software Multiplataforma Semi Senior  <br>
            <a class="btn btn-primary " data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
              Mas informacion de carlos
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <a class="btn btn-primary " style="background-color: red;" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
            &times;
          </a>	
          <div class="card card-body">
            <p  style="color: black;"> TSU. en Tecnologías de la Información Área Desarrollo de Software Multiplataforma </p>			
            <p style="color: black;"> Universidad Tecnológica de Manzanillo Colima </p>		
            <a type="button" style="background-color: royalblue;" class="dropdown-item" data-target=".ModalMostarfernando"  data-toggle="modal">Proyectos</a>
          </div>
        </div>
      </div>
    </div>

 <!-- FIN DE PERSONA Fernando--> 

 
    	<!-- INICIO DE MODAL fernando -->
      <div class="modal fade ModalMostarfernando" tabindex="-1"  role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document" >      
        <div class="modal-content" >
          <div class="modal-header"> 
            <h1>Fernando Ventura</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>        
            <div class="modal-body" style="border:1px solid; height:400px; width:auto; overflow-y:scroll; overflow-x:hidden;" >
              <div style="border:1px solid; overflow-x:scroll; overflow-y:hidden;">        
               <h4>Proyectos en termino o desarrollo:</h4>
               <a class="btn-link" href="https://github.com/f3rn4nd001"   >https://github.com/f3rn4nd001</a>
               <p>Biblioteca: proyecto en desarrollo utilizando node.js, mongodb, express. Sobre el control de libros, compra y prestamos de los mismos.
                 <br>  <br> SensorHouse: proyecto de monitoreo de una casa utilizando sensores mediante una aplicación móvil.
                 <br><br>   CasaDomotica4cutri: monitoreo y control de una casa domótica mediante el uso de sensores, actuadores y servos, utilizando una aplicación móvil y web
              </p>
            <p>Lenguajes de programacion</p>
              <img src="./svg/enfer.PNG">
            </div>
            <p>contactos</p>
              <svg class="bi bi-envelope-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M.05 3.555L8 8.414l7.95-4.859A2 2 0 0014 2H2A2 2 0 00.05 3.555zM16 4.697l-5.875 3.59L16 11.743V4.697zm-.168 8.108L9.157 8.879 8 9.586l-1.157-.707-6.675 3.926A2 2 0 002 14h12a2 2 0 001.832-1.195zM0 11.743l5.875-3.456L0 4.697v7.046z"/>
                <p>c.fernando.ventura.marin@gmail.com</p>
              </svg>
            </div>
          <div class="modal-footer">
            <div style="width:30px;"></div>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
	<!-- FIN DE MODAL fernando-->




  </body>
</html>