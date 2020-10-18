<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Editar Datos de Recolectores</h1>
    <form action="guardaEdicion" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$reco->id}}">
    <input type="text" name="nombre" value="{{$reco->nombre}}">
    <input type="text" name="dias_Recoleccion" value="{{$reco->dias_Recoleccion}}">
    <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</body>
</html>