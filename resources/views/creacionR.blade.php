<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Recolectores </h1>

    <div>
        <p>Agrega Recolectores</p>
    </div>

    <form action="/hola" method="POST">
    @csrf
    <H4>Nombre</H4>
    <input type="text"  name="nombre"><br>
    <H4>Dias de Recoleccion</H4>
    <input type="week"  name="semana"><br>
    <input type="submit">
    </form>
</body>
</html>