<?php 

ob_start();

session_start();

?>

<script type="text/javascript" src="control/node_modules/tableexport/libs/FileSaver/FileSaver.min.js"></script>

<script type="text/javascript" src="control/node_modules/tableexport/libs/js-xlsx/xlsx.core.min.js"></script>

<script type="text/javascript" src="control/node_modules/tableexport/tableExport.min.js"></script>

<div class="container" >

    <br>

    <div class="row">

        <div class="col-sm-12 text-center">

            <h1>Inscritos a la Convención JAS Puebla Sur 2022</h1>

        </div>

    </div>

    <div class="row">

        <div class="col-sm-3 text-center">Seleccionar Estaca:</div>

        <div class="col-sm-4 text-center">

            <select name="estacas" id="estacas">

                <?php

                if($_SESSION['tipoUsuario'] == 1){

                    echo '<option value="TODAS" selected>TODAS</option>

                    <option value="ANGELÓPOLIS">ANGELÓPOLIS</option>

                    <option value="ARBOLEDAS">ARBOLEDAS</option>

                    <option value="ATLIXCO">ATLIXCO</option>

                    <option value="CHOLULA">CHOLULA</option>

                    <option value="IGNACIO MEJÍA">IGNACIO MEJÍA</option>

                    <option value="IZÚCAR DE MATAMOROS">IZÚCAR DE MATAMOROS</option>

                    <option value="NEALTICAN">NEALTICAN</option>

                    <option value="NEALTICAN NORTE">NEALTICAN NORTE</option>

		    <option value="NEALTICAN SUR">NEALTICAN SUR</option>

                    <option value="TEHUACÁN">TEHUACÁN</option>

                    <option value="VALSEQUILLO">VALSEQUILLO</option>';

                }else{

                    echo '<option value="'.$_SESSION['estaca'].'" selected>'.$_SESSION['estaca'].'</option>';

                }

                ?>

            </select>

        </div>

    </div>

    <br>

    <div class ="row">

        <div class="col text-center"><a href="#" id="listaToExcel" class="btn btn-primary">DESCARGAR EXCEL INSCRITOS</a></div>

        <div class="col text-center"><a href="#" id="cursosGeneral" class="btn btn-primary">DESCARGAR PDF CURSOS GENERAL</a></div>

        <div class="col text-center"><a href="#" id="" class="btn btn-secondary">DESCARGAR FORMULARIOS INSCRIPCIONES</a></div>

    </div>

    <div class ="row">

        <div class="col text-center"><a href="#" id="medico" class="btn btn-primary">DESCARGAR PDF MÉDICO</a></div>

        <!--<div class="col text-center"><a href="#" id="cursosGeneral" class="btn btn-primary">DESCARGAR PDF CURSOS GENERAL</a></div>

        <div class="col text-center"><a href="#" id="" class="btn btn-secondary">DESCARGAR FORMULARIOS INSCRIPCIONES</a></div>

            -->

    </div>

    

    <div class="row" style="margin:10px;">

        <div class="col-sm-12 text-center table-responsive overflow-auto">

            <table class="table" id="dataTable" style=" max-height: 600px;

  overflow: auto;

  display:inline-block;">

                <thead>

                    <tr>

                    <th>#</th>
                    <th>ESTACA</th>
                    <th>BARRIO</th>
                    <th>NOMBRE</th>
                    <th>EDAD</th>
                    <th>SEXO</th>
                    <th>MIEMBRO</th>
                    <th>ANFITRIÓN</th>
                <th>RECOMENDACIÓN VIGENTE</th>
                    <th>RETORNADO</th>
                    <th>LLAMAMIENTO</th>
                    <th>INSCRITO INSTITUTO</th>
                    <th>ESTUDIA</th>
                    <th>INSTITUCIÓN</th>
                    <th>TRABAJA</th>
                    <th>E-MAIL</th>
                    <th>TELÉFONO</th>
                    <th>ENTREVISTADO</th>
                    <th>PAGADO</th>
                    <th>CONFIRMADO</th>
                    <th>ACCIONES</th>

                    </tr>

                </thead>

                <tbody id="tableInscritos">



                </tbody>

            </table>

        </div>

    </div>

</div>

<script>

    $(document).ready(function(){

        cargarInscritos();

        $("#estacas").change(function(){

            cargarInscritos();

        });

        $("#listaToExcel").click(function(){

            $('#dataTable').tableExport({

			type : "excel",			

			escape : 'false',

            fileName: "listaInscritos",

			ignoreColumn: [20]

		});	

        });

        $("#cursosGeneral").click(function(){

            var condicion="";

            if($("#estacas").val() != "TODAS"){

                condicion="AND estaca = '"+$("#estacas").val()+"'";

            }

            window.open("pages/cursosGeneral.php?CONDICION="+condicion);

        });

        $("#medico").click(function(){

            var condicion="";

            if($("#estacas").val() != "TODAS"){

                condicion="AND estaca = '"+$("#estacas").val()+"'";

            }

            window.open("pages/medico.php?CONDICION="+condicion);

        });

    });

    function cargarInscritos(){

        $.ajax({

            type: "POST",

            url: "pages/cargarInscritos.php",

            data: {estaca:$("#estacas").val()},

            success:function(r){

                console.log(r);

                $("#tableInscritos").html(r);

            }

        });

    }

    function entrevistado(idUser){

        let isExecuted = confirm("¿Estás seguro de marcar como entrevistado? Una vez realizada esta acción ya no se podra revertir.");

        if(isExecuted){

            $.ajax({

                type:"POST",

                url:"pages/marcarEntrevistado.php",

                data: {idParticipante:idUser},

                success:function(r){

                    cargarInscritos();

                }

            });

        }

    }

    function pagado(idUser){

        let isExecuted = confirm("¿Estás seguro de marcar como pagado? Una vez realizada esta acción ya no se podra revertir.");

        if(isExecuted){

            $.ajax({

                type:"POST",

                url:"pages/marcarPagado.php",

                data: {idParticipante:idUser},

                success:function(r){

                    cargarInscritos();

                }

            });

        }

    }

    function formulario(idUser){

        

    }



</script>