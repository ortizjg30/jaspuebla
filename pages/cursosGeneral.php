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
    $query="SELECT c.curso1,c.curso2,c.curso3,c.propuesta1,c.propuesta2,c.propuesta3 FROM datosgenerales dg 
    left join cursos c on dg.IdUsuario = c.IdUsuario
    where dg.confirmado is not null".$_GET["CONDICION"];
    $sql = $dbConn->prepare($query);
    $sql->execute();
    $cursos= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    $propuestas=array();
    while ($row = $sql->fetch()) {
        if ($row[0] != null) {
            $cursos[$row[0]-1]=$cursos[$row[0]-1]+1;
        }
        if ($row[1] != null) {
            $cursos[$row[1]-1]=$cursos[$row[1]-1]+1;
        }
        if ($row[2] != null) {
            $cursos[$row[2]-1]=$cursos[$row[2]-1]+1;
        }
        if ($row[3] != null) {
             if(trim(strtoupper($row[3])) != "NINGUNA" && trim(strtoupper($row[3])) != "NINGUNO")  array_push($propuestas,$row[3]);
        }
        if ($row[4] != null) {
            if(trim(strtoupper($row[4])) != "NINGUNA" && trim(strtoupper($row[4])) != "NINGUNO") array_push($propuestas,$row[4]);
        }
        if ($row[5] != null) {
            if(trim(strtoupper($row[5])) != "NINGUNA" && trim(strtoupper($row[5])) != "NINGUNO") array_push($propuestas,$row[5]);
        }
          
    }
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
            <h2 style="color:black; text-align:center">Cursos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Curso</th>
                        <th>Veces Seleccionado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Fortalezas y habilidades para encontrar empleo</td>
                        <td>'.$cursos[0].'</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Razones y opciones para el aprendizaje de un segundo idioma</td>
                        <td>'.$cursos[1].'</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Emprendimiento</td>
                        <td>'.$cursos[2].'</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>Estudios necesarios para lograr mayores oportunidades laborales</td>
                        <td>'.$cursos[3].'</td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>Conocer y aumentar mis habilidades sociales</td>
                        <td>'.$cursos[4].'</td>
                    </tr>
                    <tr>
                        <th>6</th>
                        <td>Inteligencia Emocional y resiliencia</td>
                        <td>'.$cursos[5].'</td>
                    </tr>
                    <tr>
                        <th>7</th>
                        <td>Preparándome para un noviazgo adecuado</td>
                        <td>'.$cursos[6].'</td>
                    </tr>
                    <tr>
                        <th>8</th>
                        <td>Clase de Baile</td>
                        <td>'.$cursos[7].'</td>
                    </tr>
                    <tr>
                        <th>9</th>
                        <td>Prevención y atención de las Adicciones</td>
                        <td>'.$cursos[8].'</td>
                    </tr>
                    <tr>
                        <th>10</th>
                        <td>Cómo hacer que Cristo prevalezca en un mundo más complejo</td>
                        <td>'.$cursos[9].'</td>
                    </tr>
                    <tr>
                        <th>11</th>
                        <td>Consejos para obtener mayor provecho de mi estudio de las escrituras</td>
                        <td>'.$cursos[10].'</td>
                    </tr>
                    <tr>
                        <th>12</th>
                        <td>E-Commerce y otras habilidades digitales</td>
                        <td>'.$cursos[11].'</td>
                    </tr>
                    <tr>
                        <th>13</th>
                        <td>Maquillaje y arreglo personal (Mujeres)</td>
                        <td>'.$cursos[12].'</td>
                    </tr>
                    <tr>
                        <th>14</th>
                        <td>Apariencia personal y proyección personal (Hombres)</td>
                        <td>'.$cursos[13].'</td>
                    </tr>
                    <tr>
                        <th>15</th>
                        <td>Prevención del delito, Prevención de la violencia y seguridad personal</td>
                        <td>'.$cursos[14].'</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <h2 style="color:black; text-align:center">Propuestas de los JAS</h2>
        <div class="col-12">';
            foreach ($propuestas as $key ) {
                $html .='<p>'.strtoupper($key).'</p>'; 
            }
            $html .= '</div>
            </div>
        </div>
        </body>
        </html>';
$document->loadHtml($html);
//Render the HTML as PDF
$document->render();
//Get output of generated pdf in Browser
$document->stream("cursosGeneral".date("Ymd"), array("Attachment"=>1));
//1  = Download
//0 = Preview

}

?>