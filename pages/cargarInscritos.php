<?php
if ($_POST) {
    require_once '../control/conn.php';
    if ($_POST['estaca'] == "TODAS") {
        $addCondicion="";
    } else {

        $addCondicion=" AND dg.estaca = '".$_POST['estaca']."'";

    }
    $query="SELECT u.IdUsuario,dg.estaca,dg.barrio,CONCAT(u.nombre,' ',u.apellidoPaterno,' ',u.apellidoMaterno) nombre, YEAR(CURRENT_TIMESTAMP) - YEAR(dg.fNacimiento) - (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(dg.fNacimiento, 5)) as edad , 
    dg.sexo,IF(dg.miembroSelect = 1,'SI','NO') miembro,IF(dg.miembroText IS NULL,'',dg.miembroText) miembrotexto,
    IF(dg.recomendacionSelect = 0 or dg.recomendacionSelect is null,'NO','SI') RECOMENDACIONVIGENTE,
    IF(dg.misioneroSelect = 0 or dg.misioneroSelect is null,'NO','SI') RETORNADO,
    IF(dg.llamamientoText is null,'',dg.llamamientoText) LLAMAMIENTOTEXT,
    IF(dg.institutoSelect = 0 or dg.institutoSelect is null,'NO','SI') INSTITUTO,
    IF(dg.estudiaSelect = 0 or dg.estudiaSelect is null,'NO','SI') ESTUDIA,
    IF(dg.estudiaText is null,'',dg.estudiaText) INSTITUCION,
    IF(dg.trabajaSelect = 0 or dg.trabajaSelect is null,'NO','SI') TRABAJA,
    u.email,dg.telPersonal,
    IF(dg.entrevistado IS NULL OR dg.entrevistado = 0,'NO','SI') entrevistado,if(dg.pagado is null OR dg.pagado = 0,'NO','SI') pagado,IF(dg.confirmado IS NULL,'NO','SI') as confirmado FROM usuarios u
    INNER JOIN datosgenerales dg on u.IdUsuario = dg.IdUsuario
    WHERE u.TipoUsuario = 3 ".$addCondicion;

    $sql=$dbConn->prepare($query);

    $sql->execute();

    $i=0;

    while ($row=$sql->fetch()) {
        $i=$i+1;
        echo ('<tr>
        <td>'.$i.'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td>'.$row[5].'</td>
        <td>'.$row[6].'</td>
        <td>'.$row[7].'</td>
        <td>'.$row[8].'</td>
        <td>'.$row[9].'</td>
        <td>'.$row[10].'</td>
        <td>'.$row[11].'</td>
        <td>'.$row[12].'</td>
        <td>'.$row[13].'</td>
        <td>'.$row[14].'</td>
        <td>'.$row[15].'</td>
        <td>'.$row[16].'</td>
        <td>'.$row[17].'</td>
        <td>'.$row[18].'</td>
        <td>'.$row[19].'</td>
        <td><div class="btn-group" role="group" aria-label="Button group with nested dropdown"><div class="btn-group" role="group">
        <button id="btnGroupDrop'.$i.'" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acciones
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop'.$i.'">
          <a class="dropdown-item text-success" href="#" id="ENTREVISTADO'.$i.'" onclick="entrevistado('.$row[0].')"><i class="bi bi-check2-circle"></i>  ENTREVISTADO</a>
          <a class="dropdown-item text-success" href="#" id="PAGADO'.$i.'" onclick="pagado('.$row[0].')"><i class="bi bi-check2-circle"></i>  PAGADO</a>
          <a class="dropdown-item text-info" href="#" id="FORMULARIO'.$i.'" onclick="formulario('.$row[0].')"><i class="bi bi-cloud-arrow-down-fill"></i>  PDF FORMULARIO</a>
        </div>
      </div></div></td>
    </tr>');

    }

}

?>

