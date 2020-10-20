<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="header" Align="center">
<div class="container" Align="center">
<h1> Detalles de Recolección </h1>				 
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

    <form action="/detalleReco2" method="POST">
    @csrf
    <div class="form-group">
				<label for="nombre"><H4>Punto</H4></label>
                <select name="idPuntoRecoleccion">
                <option  value="0">@foreach($puntos_Reciclaje as $pr) {{$pr->tipoBasura}} 
                                    @endforeach
                </option>
                
                </select>
    </div> 
    <div class="form-group">
				<label for="nombre"><H4>Recolector</H4></label>
                <select name="idRecolector">
                <option  value="0"></option>
                </select>
    </div> 
    <button type="submit" class="btn btn-secondary">Enviar</button><br><br>
    </form>

    
    
<table class="table" >
  <thead class="thead-dark">
  
    <tr>
      <th scope="col">Puntos de Recoleccion</th>
      <th scope="col">Recolectores</th>
    </tr>
  </thead>
  <tbody>
  @foreach($puntos_Reciclaje as $pr)
    <tr>
      <td>{{$pr->tipoBasura}} {{$pr->direccion}} {{$pr->horario_Apertura}} {{$pr->horario_Cierre}}</td>
      @foreach($pr->getRecolectores() as $r)
      <td>{{$r->nombre}}</td>
      @endforeach
    </tr>
  @endforeach
  </tbody>
</table>
</body>
</html>