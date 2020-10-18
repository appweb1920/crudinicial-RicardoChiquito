<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1> Puntos de Reciclaje </h1>

    <div>
        <h2>Agrega Puntos de  Reciclaje</h2>
    </div>

    <form action="/adios" method="POST">
    @csrf
    <H4>Tipo de Basura</H4>
    <input type="text"  name="tipoBasura" placeholder="Nombre" class="form-control mb-2">
    <H4>Direccion</H4>
    <input type="text"  name="direccion" placeholder="Dirección" class="form-control mb-2">
    <H4>Hora de Apertura</H4>
    <input type="time"  name="horario_Apertura" placeholder="Hora de Apertura">
    <H4>Hora de Cierre</H4>
    <input type="time"  name="horario_Cierre" placeholder="Hora de Cierre"><br><br>

    <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>

    @if(isset($tb))
    <p>{{$tb}} {{$dir}} {{$ha}}  {{$hc}} </p>
    @endif
</body>
</html>