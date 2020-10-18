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
    <h1> Recolectores </h1>

    <div>
        <h2>Agrega Recolectores</h2>
    </div>

    <form action="/hola" method="POST">
    @csrf
    <H4>Nombre</H4>
    <input type="text"  name="nombre" placeholder="Nombre" class="form-control mb-2"><br>
    <H4>Dias de Recoleccion</H4>
    <input type="week"  name="semana" placeholder="Semana" class="form-control mb-2"><br><br>
    <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</body>
</html>