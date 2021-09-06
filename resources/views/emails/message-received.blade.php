<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Contenido del email   


    <p>Aprendiz {{ $aprendiz->SC_Aprendiz_Nombres }} {{ $aprendiz->SC_Aprendiz_Apellidos }} - {{ $aprendiz->SC_Aprendiz_Documento }} </p>

    <p>Con correo: {{ $aprendiz->SC_Aprendiz_Correo }}</p>

    <p>Ficha: {{ $aprendiz->SC_Ficha_PK_ID }}</p>

    @if($aprendiz->SC_Aprendiz_ContratoAprendizaje != "")
        <p>Contrato: {{ $aprendiz->SC_Aprendiz_ContratoAprendizaje }} -  {{ $aprendiz->SC_Aprendiz_Empresa }}</p>
    @endif

    <p>Fecha para la citacion: {{ $msg->SC_Citacion_FechaCitacion }}</p>

    <p>Hora de la citacion: {{ $msg["SC_Citacion_Hora"] }}</p>

    <p>Descripción de los hechos: {{ $msg->solicitarComite->SC_SolicitarComite_Descripcion }}</p>

    <p>Lugar de la citación: {{ $msg["SC_Citacion_Lugar"] }}</p>

    <p>Ciudad de la citación: {{ $msg["SC_Citacion_Ciudad"] }}</p>

    <p>Centro de la citación: {{ $msg["SC_Citacion_Centro"] }}</p>

    
</body>
</html>
