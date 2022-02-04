<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('persona.store')}}" method="POST">
        @csrf
        <label for="nombres">Nombres y Apellidos</label>
        <br>
        <input type="text" name="nombres">
        <br>

        <label for="documento">Numero de Documento (Passaporte o RUT)</label>
        <br>
        <input type="text" name="documento">
        <br>

        <label for="sexo">Sexo (MASCULINO, FEMENINO)</label>
        <br>
        <input type="text" name="sexo">
        <br>

        <label for="edad">Edad</label>
        <br>
        <input type="text" name="edad">
        <br>

        <label for="origen">Origen (IQUIQUE, ALTO HOSPICIO, SANTIAGO)</label>

        <br>
        <input type="text" name="origen">
        <br>

        <label for="sexo">Fecha de Ingreso ('un dia antes de la fecha de recepcion')</label>
        <br>
        <input type="datetime-local" name="recepcion_muestra_fecha">
        <br>


        <br>
        <br>
        <input type="submit" value="GUARDAR">

    </form>



</body>

</html>