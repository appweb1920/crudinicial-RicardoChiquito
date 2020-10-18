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
    <input type="text" name="tipoBasura" value="{{$punre->tipoBasura}}">
    <input type="text" name="direccion" value="{{$punre->direccion}}">
    <input type="time"  name="horario_Apertura" value="{{$punre->horario_Apertura}}">
    <input type="time"  name="horario_Cierre" value="{{$punre->horario_Cierre}}">
    <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</body>
</html>