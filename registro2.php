<?php 
if($_POST)
{
    /*
    Array ( [email] => ortizjg30@gmail.com [inputPassword] => 17091996 [tel1] => 2211651633 [tel2] => 9512365092 [nombre] => JOSUE AMMON [aPaterno] => ORTIZ [aMaterno] => GALLEGOS [fNacimiento] => 1996-09-17 [edad] => 25 [limitantes] => 2 [talleres] => Array ( [0] => 3 [1] => 12 [2] => 14 ) [selEstudia] => 2 [selTrabaja] => 1 [slcMiembro] => 1 [txtSeleccion] => 000000123456998877 [selectmisionero] => 2 [llamamiento] => SECRETARIO AUXILIAR DE ESTACA [selRecomendacion] => 1 )
    */
    //print_r($_POST);
    $tipoUsuario="3";
    require_once("control/conn.php");
    $query="SELECT 1 FROM usuarios WHERE email = :email";
    $sql=$dbConn->prepare($query);
    $sql->bindParam(':email',$_POST['email']);
    $sql->execute();
    $row = $sql->fetch();
    if(!$row)
    {
        $query = "INSERT INTO `usuarios`(`TipoUsuario`, `email`, `nombre`, `apellidoPaterno`, `apellidoMaterno`) VALUES (:TipoUsuario,:email,:nombre,:apellidoPaterno,:apellidoMaterno)";
        $sql = $dbConn->prepare($query);
        $sql->bindParam(':TipoUsuario',$tipoUsuario);
        $sql->bindParam(':email',$_POST['email']);
        $sql->bindParam(':nombre',$_POST['nombre']);
        $sql->bindParam(':apellidoPaterno',$_POST['aPaterno']);
        $sql->bindParam(':apellidoMaterno',$_POST['aMaterno']);
        $sql->execute();
        $insertedId = $dbConn->lastInsertId();
        $query = "INSERT INTO `datosgenerales`( `IdUsuario`, `telPersonal`, `telContacto`, `fNacimiento`, `condicionSelect`, `condicionText`, `estudiaSelect`, `estudiaText`, `trabajaSelect`, `miembroSelect`, `miembroText`, `misioneroSelect`, `llamamientoText`, `recomendacionSelect`, `institutoSelect`,`estaca`,`barrio`,`sexo`) VALUES (:IdUsuario,:telPersonal,:telContacto,:fNacimiento,:condicionSelect,:condicionText,:estudiaSelect,:estudiaText,:trabajaSelect,:miembroSelect,:miembroText,:misioneroSelect,:llamamientoText,:recomendacionSelect,:institutoSelect,:estaca,:barrio,:sexo)";
        $sql = $dbConn->prepare($query);
        $sql->bindParam(':IdUsuario',$insertedId);
        $sql->bindParam(':telPersonal',$_POST['tel1']);
        $sql->bindParam(':telContacto',$_POST['tel2']);
        $sql->bindParam(':fNacimiento',$_POST['fNacimiento']);
        $sql->bindParam(':condicionSelect',$_POST['limitantes']);
        $sql->bindParam(':condicionText',$_POST['describeSituacion']);
        $sql->bindParam(':estudiaSelect',$_POST['selEstudia']);
        $sql->bindParam(':estudiaText',$_POST['txtInstitucion']);
        $sql->bindParam(':trabajaSelect',$_POST['selTrabaja']);
        $sql->bindParam(':miembroSelect',$_POST['slcMiembro']);
        $sql->bindParam(':miembroText',$_POST['txtSeleccion']);
        $sql->bindParam(':misioneroSelect',$_POST['selectmisionero']);
        $sql->bindParam(':llamamientoText',$_POST['llamamiento']);
        $sql->bindParam(':recomendacionSelect',$_POST['selRecomendacion']);
        $sql->bindParam(':institutoSelect',$_POST['selectInstituto']);
        $sql->bindParam(':estaca',$_POST['estaca']);
        $sql->bindParam(':barrio',$_POST['barrio']);
        $sql->bindParam(':sexo',$_POST['sexo']);
        $sql->execute();
        $query = "INSERT INTO `cursos`(`IdUsuario`, `curso1`, `curso2`, `curso3`, `propuesta1`, `propuesta2`, `propuesta3`) VALUES (:IdUsuario,:curso1,:curso2,:curso3,:prop1,:prop2,:prop3)";
        $sql = $dbConn->prepare($query);
        if (!$_POST['talleres']) {
            $_POST['talleres']=array("","","");
        }elseif (count($_POST['talleres']) < 3) {
            while (count($_POST['talleres']) < 3) {
                array_push($_POST['talleres'],"");
            }
        }
        $sql->bindParam(':IdUsuario',$insertedId);
        $sql->bindParam(':curso1',$_POST['talleres'][0]);
        $sql->bindParam(':curso2',$_POST['talleres'][1]);
        $sql->bindParam(':curso3',$_POST['talleres'][2]);
        $sql->bindParam(':prop1',$_POST['propuesta1']);
        $sql->bindParam(':prop2',$_POST['propuesta2']);
        $sql->bindParam(':prop3',$_POST['propuesta3']);
        if(!$sql->execute()){
            echo ("2");
        }else{
            require_once 'control/sendMail.php';
            sendMail($insertedId,$_POST['email']);
            echo ("1");
        }
    }else{
        echo("3");
    }
    
}
?>