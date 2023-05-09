<?php 
if($_GET){
    require_once("control/conn.php");
    $query="UPDATE datosgenerales SET confirmado = 1 WHERE IdUsuario = :id";
    $sql=$dbConn->prepare($query);
    $sql->bindParam(':id',$_GET['confirm']);
    $sql->execute();
    echo('<h2 style="text-align:center;">Gracias por confirmar tu asistencia, ya puedes cerrar está página.</h2>');
}
?>