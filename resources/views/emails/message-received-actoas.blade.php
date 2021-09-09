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

    <p>Tipo de falta: {{ $tipofalta->SC_TipoFalta_Descripcion }}</p>

    <p>Gravedad de la falta: {{ $gravedad->SC_Gravedad_Nombre }}</p>

    <p>En el reglamento: Articulo {{ $reglamento["SC_Reglamento_Articulo"] }} Numeral {{ $reglamento["SC_Reglamento_Numeral"] }}</p>

    <p>Gravedad de la falta: {{ $gravedad->SC_Gravedad_Nombre }}</p>

    <p>Ciudad: {{ $actaComite->SC_ActaComite_Ciudad }}</p>

    <p>Fecha: {{ $actaComite->SC_ActaComite_Fecha }}</p>

    <p>Decision: {{ $actaComite->SC_ActaComite_Decision }}</p>



    <p>Sugerencia: {{ $actoas->SC_Notificacion_Sugerencia }}</p>

    <p>Fecha inicial: {{ $actoas->SC_Notificacion_FechaInicial }}</p>

    <p>Fecha limite: {{ $actoas->SC_Notificacion_FechaLimite }}</p>

    <p>Funcionario: {{ $actoas->SC_Notificacion_Funcionario }}</p>

    <p>Tipo de plan: {{ $tipoP->SC_TipoPlan_Descripcion }}</p>

    <p>Tipo de notificacion: {{ $tipoN->SC_TipoNotificacion_Descripcion }}</p>

    <p>Instructor: {{ $usuario->SC_Usuarios_Nombre }}</p>





    
    
</body>
</html>
