<?php 
if ($_POST) {
    require_once '../control/conn.php';
    $query="UPDATE datosgenerales SET entrevistado = 1 WHERE IdUsuario= :idUser";
    $sql = $dbConn->prepare($query);
    $sql->bindParam(":idUser",$_POST['idParticipante']); 
    $sql->execute();
}
?>