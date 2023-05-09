<?php 
if ($_POST) {
    require_once 'control/conn.php';
    $query="SELECT u.IdUsuario,u.TipoUsuario,u.email,dg.estaca FROM usuarios u INNER JOIN datosgenerales dg ON u.IdUsuario = dg.IdUsuario WHERE u.TipoUsuario in (1,2) AND u.password= :pass AND u.email=:email";
    $sql=$dbConn->prepare($query);
    $sql->bindParam(":pass",$_POST['pass']);
    $sql->bindParam(":email",$_POST['email']);
    $sql->execute();
    if ($row = $sql->fetch()) {
        session_start();
        $_SESSION['idUsuario']=$row[0];
        $_SESSION['tipoUsuario']=$row[1];
        $_SESSION['email']=$row[2];
        $_SESSION['estaca']=$row[3];
        $_SESSION['ok']=true;
        echo "1";
    } else {
        echo "2";
    }
    
}else{
    echo "3";
}
?>