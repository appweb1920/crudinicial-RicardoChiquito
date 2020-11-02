<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" href="assets/css/styleAdmin.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="header" Align="center">
<div class="container" Align="center">
<h1> Puntos de Reciclaje </h1>				 
        <div class="wrapper">
            <nav>				
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container">
							<div class="nav-collapse">
							
							</div><!-- /.nav-collapse -->
						</div>
					</div>
				</div>
            </nav>
		</div>
		
    </header>
    
 
    
    
    <div>
        <h2>Agrega Puntos de  Reciclaje</h2>
    </div>

    <form action="/adios" method="POST">
    @csrf
    <H4>Tipo de Basura</H4>
    <input type="text"  name="tipoBasura" placeholder="Tipo" class="form-control mb-2">
    <H4>Direccion</H4>
    <input type="text"  name="direccion" placeholder="Dirección" class="form-control mb-2">
    <H4>Hora de Apertura</H4>
    <input type="time"  name="horario_Apertura" placeholder="Hora de Apertura">
    <H4>Hora de Cierre</H4>
    <input type="time"  name="horario_Cierre" placeholder="Hora de Cierre"><br><br>

    <button type="submit" class="btn btn-secondary">Enviar</button><br><br>
    </form>

    <h4>Tabla de Puntos de Reciclaje</h4>
	  
		
<table class="table" >
  <thead class="thead-dark">
    <tr>
        <th>Edicion</th>
        <th>tipoBasura</th>
        <th>direccion</th>
        <th>horario_Apertura</th>
        <th>horario_Cierre</th>
    </tr>  
   </thead>
  <tbody>
  @foreach($puntos_Reciclaje as $pr)
  <tr>
    <td><a href="/editar/{{$pr->id}}">Editar</a></td>
    <td>{{$pr->tipoBasura}}</td>
    <td>{{$pr->direccion}}</td>
    <td>{{$pr->horario_Apertura}}</td>
    <td>{{$pr->horario_Cierre}}</td>  
  </tr> 
  @endforeach
  </tbody>
</table>
   
<a href="{{url('/detalleReco')}}">
  <button type="button" class="btn btn-primary" style="margin-left:15px;">Regresar</button>
</a>
</body>
</html>