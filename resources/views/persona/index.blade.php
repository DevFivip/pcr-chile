<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Listado Personas</h2>
    <a href="/persona/create">CREAR NUEVO</a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Documento</td>
                <td>Sexo</td>
                <td>Fecha de Ingreso</td>
            </tr>
        </thead>
        <tbody>

            @foreach ($personas as $persona)
            <tr>
                <td>{{$persona->id}}</td>
                <td>{{$persona->nombres}}</td>
                <td>{{$persona->documento}}</td>
                <td>{{$persona->sexo}}</td>
                <td>{{$persona->recepcion_muestra_fecha}}</td>
                <td><a href="/get/{{$persona->id}}">Ver PDF</a> <a href="/Resultados/Index/{{$persona->qr}}">Ver Resultados</a></td>
                <td><a href="#eliminar" onclick="eliminar({{$persona->id}})">🗑️ Eliminar</a></td>
            </tr>

            @endforeach
            <tr>

            </tr>
        </tbody>
    </table>
    <script>
        window.CSRF_TOKEN = '{{ csrf_token() }}';


        async function eliminar(id) {
            if (confirm("¿Seguro deseas Eliminar?") == true) {
                const res = await fetch('persona/' + id, {
                    method: 'DELETE',
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-Token": window.CSRF_TOKEN
                    },
                })

                location.reload()
            }
        }
    </script>


</body>

</html>