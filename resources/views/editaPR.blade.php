<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Editar Datos de Puntos de Recliclaje</h1>
    <form action="guardaEdicion" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$punre->id}}">
    <h3>Tipo de Basura</h3>
    <input type="text" name="tipoBasura" value="{{$punre->tipoBasura}}"><br>
    <h3>Direccion</h3>
    <input type="text" name="direccion" value="{{$punre->direccion}}"><br>
    <h3>horario de Apertura</h3>
    <input type="time"  name="horario_Apertura" value="{{$punre->horario_Apertura}}"><br>
    <h3>horario de Cierre</h3>
    <input type="time"  name="horario_Cierre" value="{{$punre->horario_Cierre}}"><br><br>
    <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</body>
</html>