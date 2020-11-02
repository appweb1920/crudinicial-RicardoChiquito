<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
<div class="container"  Align="center" >
<h1> Recolectores </h1>
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
        <h2>Agrega Recolectores</h2>
    </div>

    <form action="/adios2" method="POST">
    @csrf
    <H4>Nombre</H4>
    <input type="text"  name="nombre" placeholder="Nombre" class="form-control mb-2"><br>
    <H4>Dias de Recoleccion</H4>
    <input type="week"  name="dias_Recoleccion" placeholder="Semana" class="form-control mb-2"><br>
    <button type="submit" class="btn btn-secondary">Enviar</button><br><br>
    </form>
    <h4>Tabla de Recolectores</h4>
	 
    

<table class="table" >
  <thead class="thead-dark">
    <tr>
        <th>Edicion</th>
        <th>Nombre</th>
        <th>Dias de Recoleccion</th>
        </tr>  
    </tr>
  </thead>
  <tbody>
  @foreach($recolectores as $r)
    <tr>
        <td><a href="/editar2/{{$r->id}}">Editar</a></td>
        <td>{{$r->nombre}}</td>
        <td>{{$r->dias_Recoleccion}}</td> 
    </tr> 
  @endforeach
  </tbody>
</table>
   
<a href="{{url('/detalleReco')}}">
  <button type="button" class="btn btn-primary" style="margin-left:15px;">Regresar</button>
</a>
</body>
</html>