<?php
    require_once '../control/dom/vendor/autoload.php';
    // reference the Dompdf namespace
    use Dompdf\Dompdf;
    //initialize dompdf class    
if($_GET){
$document = new Dompdf(['isRemoteEnabled'         => true,
'isHtml5ParserEnabled'    => true,
'chroot'                  => '../', // /mytheme/public
'defaultMediaType'        => 'all',
'defaultPaperSize'        => 'a4',
'defaultPaperOrientation' => 'landscape']);
require_once '../control/conn.php';
    $query="SELECT CONCAT(u.nombre,' ',u.apellidoPaterno,' ',u.apellidoMaterno) nombre,YEAR(CURRENT_TIMESTAMP) - YEAR(dg.fNacimiento) - (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(dg.fNacimiento, 5)) as edad , 
    dg.sexo,dg.estaca, dg.barrio, dg.condicionText FROM datosgenerales dg
    LEFT JOIN usuarios u on dg.IdUsuario = u.IdUsuario AND u.TipoUsuario = 3
    WHERE dg.condicionSelect = 1 ".$_GET['CONDICION'];
    $sql = $dbConn->prepare($query);
    $sql->execute();
$html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 style="color:black; text-align:center;">Condiciones Médicas Convención JAS 2022</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Estaca</th>
                        <th>Barrio</th>
                        <th>Condición Médica</th>
                    </tr>
                </thead>
                <tbody>
                    ';
                    $i = 0;
                    while ($row = $sql->fetch()) {
                        $i = $i+1;
                        $html.="<tr>
                        <th>".$i."</th>
                        <td>".$row[0]."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                        <td>".$row[5]."</td>
                        </tr>";
                    }
                    $html.='
                </tbody>
            </table>
        </div>
    </div>
        </body>
        </html>';
$document->loadHtml($html);
//Render the HTML as PDF
$document->render();
//Get output of generated pdf in Browser
$document->stream("condicionMedica".date("Ymd"), array("Attachment"=>1));
//1  = Download
//0 = Preview

}

?>