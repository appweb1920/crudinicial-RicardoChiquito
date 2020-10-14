<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Puntos de Reciclaje </h1>

    <div>
        <p>Agrega Puntos de  Reciclaje</p>
    </div>

    <form action="/hola" method="POST">
    @csrf
    <H4>Tipo de Basura</H4>
    <input type="text"  name="tipoBasura"><br>
    <H4>Direccion</H4>
    <input type="text"  name="direccion"><br>
    <H4>Hora de Apertura</H4>
    <input type="time"  name="horaApertura"><br>
    <H4>Hora de Cierre</H4>
    <input type="time"  name="horaCierre">
    <input type="submit">
    </form>
</body>
</html>