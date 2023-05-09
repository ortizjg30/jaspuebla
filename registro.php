<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>REGISTRO PARA CONVENCIÓN JAS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body id="body">

<form action="" method="post" id="formulario">

    <div class="container">

        <div class="row">

            <div class="col-12 text-center">

                <br><br>

                <h2>REGISTRO PARA CONVENCIÓN JAS</h2>

                <p class="text-danger">*Al terminar el registro recibirás un correo para confirmar tu asistencia, solo se puede realizar <strong>UN REGISTRO</strong> por correo electrónico.</p>

                <hr>

                <br>

            </div>

        </div>

        <div class="mb-3 row">

            <label for="email" class="col-sm-2 col-form-label">Correo Electrónico:</label>

            <div class="col-sm-10">

                <input type="email" name="email" id="email" class="form-control" required>

            </div>

        </div>      

        <div class="mb-3 row">

            <label for="tel1" class="col-sm-2 col-form-label">Tel. Personal</label>

            <div class="col-sm-4">

                <input type="text" name="tel1" id="tel1" class="form-control" placeholder="1234567890" required>

            </div>

            <label for="tel2" class="col-sm-2 col-form-label">Tel. Contacto</label>

            <div class="col-sm-4">

                <input type="text" name="tel2" id="tel2" class="form-control" placeholder="1234567890" required>

            </div>

        </div>

        <div class="mb-3 row">

            <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>

            <div class="col-sm-10">

                <input type="text" class="form-control" id="nombre" name="nombre" required>

            </div>

        </div>

        <div class="mb-3 row">

            <label for="aPaterno" class="col-sm-2 col-form-label">Apellido Paterno:</label>

            <div class="col-sm-10">

                <input type="text" class="form-control" id="aPaterno" name="aPaterno" required>

            </div>

        </div>

        <div class="mb-3 row">

            <label for="aMaterno" class="col-sm-2 col-form-label">Apellido Materno: </label>

            <div class="col-sm-10">

                <input type="text" class="form-control" id="aMaterno" name="aMaterno" required>

            </div>

        </div>

        <div class="mb-3 row">

            <label for="fNacimiento" class="col-sm-2 col-form-label">Fecha de Nacimiento:</label>

            <div class="col-sm-2">

                <input type="date" id="fNacimiento" class="form-control" name="fNacimiento" min="1991-09-23" max="2004-09-23" required>

            </div>

            <label for="edad" class="col-sm-2 col-form-label">Edad:</label>

            <div class="col-sm-2">

                <input type="text" readonly id="edad" name="edad" class="form-control-plaintext">

            </div>

            <label for="sexo" class="col-sm-2 col-form-label">Sexo:</label>

            <div class="col-sm-2">

                <select name="sexo" id="sexo" required class="form-select">

                    <option value="F">FEMENINO</option>

                    <option value="M">MASCULINO</option>

                </select>

            </div>

        </div>

        <div class="mb-3 row">

            <label for="estaca" class="col-sm-2 col-form-label">Estaca/Distrito</label>

            <div class="col-sm-4">

                <select id="estaca" name="estaca" class="form-select" required>

                    <option value="" style="display:none" selected></option>

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

                    <option value="VALSEQUILLO">VALSEQUILLO</option>

                </select>

            </div>

            <label for="barrio" class="col-sm-2 col-form-label">Barrio/Rama</label>

            <div class="col-sm-4">

                <input type="text" value="" id="barrio" name="barrio" class="form-control">

            </div>

        </div>

        <div class="mb-3 row">

            <label for="limitantes" class="col-sm-4 col-form-label">¿Tienes alguna condición fisica o de salud que sea un riesgo o limitante durante las actividades programadas?</label>

            <div class="col-sm-1">

                <select id="limitantes" name="limitantes" class="form-select" required>

                    <option value="" style="display:none" selected></option>

                    <option value="1">Si</option>

                    <option value="2">No</option>

                </select>

            </div>

            <label for="describeSituacion" class="col-sm-2 col-form-label" id="lblDescribirSituacion"></label>

            <div class="col-sm-5">

                <input type="text" value="" id="describeSituacion" name="describeSituacion" class="form-control" disabled>

            </div>

        </div>

        <div class="mb-3 row">

            <label for="" class="fom-label">Escoge que talleres te gustaría tomar (Marque 3 Opciones):</label>

        </div>

        <div class="mb-3 row">

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="1" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Fortalezas y habilidades para encontrar empleo 

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="2" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Razones y opciones para el aprendizaje de un segundo idioma

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="3" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Emprendimiento

                    </label>

                </div>

            </div>

        </div>

        <div class="mb-3 row">

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="4" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Estudios necesarios para lograr mayores oportunidades laborales

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="5" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Conocer y aumentar mis habilidades sociales

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="6" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Inteligencia Emocional y resiliencia 

                    </label>

                </div>

            </div>

        </div>

        <div class="mb-3 row">

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="7" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Preparándome para un noviazgo adecuado 

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="8" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Clase de Baile 

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="9" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Prevención y atención de las Adicciones 

                    </label>

                </div>

            </div>

        </div>

        <div class="mb-3 row">

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="10" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Cómo hacer que Cristo prevalezca en un mundo más complejo 

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="11" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Consejos para obtener mayor provecho de mi estudio de las escrituras 

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="12" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    E-Commerce y otras habilidades digitales

                    </label>

                </div>

            </div>

        </div>

        <div class="mb-3 row">

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="13" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Maquillaje y arreglo personal (Mujeres)

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="14" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Apariencia personal y proyección personal (Hombres) 

                    </label>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="form-check">

                    <input class="form-check-input single-checkbox" type="checkbox" value="15" id="" name="talleres[]">

                    <label class="form-check-label" for="">

                    Prevención del delito, Prevención de la violencia y seguridad personal

                    </label>

                </div>

            </div>

        </div>

        <div class="mb-3 row">

            <div class="col-sm-12"><label class="form-check-label" for="">

                    Propuestas de Talleres: (Opcional)

                    </label></div>

        </div>

        <div class="mb-3 row">

        <label for="selEstudia" class="col-sm-2 col-form-label">Propuesta 1:</label>

            <div class="col-sm-10"><input type="text" class="form-control" name="propuesta1" id="propuesta1" value=""></div>

        </div>

        <div class="mb-3 row">

        <label for="selEstudia" class="col-sm-2 col-form-label">Propuesta 2:</label>

            <div class="col-sm-10"><input type="text" class="form-control" name="propuesta2" id="propuesta2" value=""></div>

        </div>

        <div class="mb-3 row">

        <label for="selEstudia" class="col-sm-2 col-form-label">Propuesta 3:</label>

            <div class="col-sm-10"><input type="text" class="form-control" name="propuesta3" id="propuesta3" value=""></div>

        </div>

        <div class="mb-3 row">

                <label for="selEstudia" class="col-sm-2 col-form-label">Estudias Actualmente:</label>

                <div class="col-sm-2">

                    <select id="selEstudia" name="selEstudia" class="form-select" required>

                        <option value="" style="display:none" selected></option>

                        <option value="1">Si</option>

                        <option value="2">No</option>

                    </select>

                </div>

                <label for="txtInstitucion"  class="col-sm-2 col-form-label">Nombre de la Institución:</label>

                <div class="col-sm-6">

                    <input type="text" class="form-control" id="txtInstitucion" name="txtInstitucion" value="" disabled>

                </div>

            </div>

            <div class="mb-3 row">

                <label for="selTrabaja" class="col-sm-2 col-form-label">Trabajas Actualmente:</label>

                <div class="col-sm-2">

                    <select name="selTrabaja" id="selTrabaja" class="form-select" required>

                        <option value="" style="display:none" selected></option>

                        <option value="1">Si</option>

                        <option value="2">No</option>

                    </select>

                </div>

            </div>

        <div class="mb-3 row">

            <label for="slcMiembro" class="col-sm-2 col-form-label">¿Eres miembro de la Iglesia?</label>

            <div class="col-sm-2">

                <select name="slcMiembro" id="slcMiembro" class="form-select" required>

                    <option value="" style="display:none" selected></option>

                    <option value="1">Si</option>

                    <option value="2">No</option>

                </select>

            </div>

            <label for="txtSeleccion" id="labelSeleccion" class="col-sm-2 col-form-label">Escoje una opción</label>

            <div class="col-sm-6">

                <input type="text" class="form-control" id="txtSeleccion" name="txtSeleccion" disabled required>

            </div>

        </div>

        <div id="preguntasMiembro">

            <hr>

            <div class="mb-3 row">

                <label for="selectmisionero" class="col-sm-2 col-form-label">Misionero Retornado:</label>

                <div class="col-sm-2">

                    <select name="selectmisionero" id="selectmisionero" class="form-select">

                        <option value="" style="display:none" selected></option>

                        <option value="1">Si</option>

                        <option value="2">No</option>

                    </select>

                </div>

                <label for="llamamiento"  class="col-sm-2 col-form-label">Llamamiento Actual:</label>

                <div class="col-sm-6">

                    <input type="text" class="form-control" id="llamamiento" name="llamamiento">

                </div>

            </div>

            <div class="mb-3 row">

                <label for="selRecomendacion" class="col-sm-2 col-form-label">Recomendación Vigente para el Templo:</label>

                <div class="col-sm-2">

                    <select name="selRecomendacion" id="selRecomendacion" class="form-select">

                        <option value="" style="display:none" selected></option>

                        <option value="1">Si</option>

                        <option value="2">No</option>

                    </select>

                </div>

                <label for="selInstituto" class="col-sm-2 col-form-label">Inscrito a Instituto:</label>

                <div class="col-sm-2">

                    <select name="selectInstituto" id="selectInstituto" class="form-select">

                        <option value="" style="display:none" selected></option>

                        <option value="1">Si</option>

                        <option value="2">No</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="mb-3 row">

            <div class="col-sm-12 text-center">

                <input type="submit" class="btn btn-success fw-bold " value="REGISTRAR" id="submit">

            </div>

        </div>

    </div>

</form>

</body>

</html>

<script>

    $(document).ready(function(){

        $("#preguntasMiembro").hide();

        $("#fNacimiento").change(function(){

            var dob = $('#fNacimiento').val();

            if(dob != ''){

                dob = new Date(dob);

                var today = new Date();

                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));

                $('#edad').val(age);

            }

        });

        $("#slcMiembro").change(function(){

            switch ($("#slcMiembro").val()) {

                case "1":

                    $("#labelSeleccion").html("");

                    $("#preguntasMiembro").show();

                    break;

                case "2":

                    $("#labelSeleccion").html("Nombre de Anfitrión:");

                    $("#txtSeleccion").prop("disabled",false);

                    $("#preguntasMiembro").hide();

                    break;

            }

            $("#txtSeleccion").val("");

        });

        $("#selEstudia").change(function(){

            switch($("#selEstudia").val()){

                case "1":

                    $("#txtInstitucion").prop("disabled",false);

                    break;

                case "2":

                    $("#txtInstitucion").prop("disabled",true);

                    $("#txtInstitucion").val("");

                    break;

            }

        });

        $("#limitantes").change(function(){

            switch($("#limitantes").val()){

                case "1":

                    $("#lblDescribirSituacion").html("Describe la situación");

                    $("#describeSituacion").prop("disabled",false);

                    break;

                case "2":

                    $("#lblDescribirSituacion").html("");

                    $("#describeSituacion").prop("disabled",true);

                    $("#describeSituacion").val("");

                    break;

            }

        });

        $("input[type='checkbox']").change(function(){

       // total allowed to be checked.

            var max_allowed = 3;

            // count how many boxes have been checked.

            var checked = $("input:checkbox:checked").length;

            // perform test

            if ( checked > max_allowed ) {

                // is more than the max so uncheck.

                $(this).prop("checked", false);

                // display error message.

                

            }

        });

        $("#formulario").submit(function (event){

            event.preventDefault();

            var formData = $("#formulario").serializeArray();

            $.ajax({

                type: "POST",

                url: "registro2.php",

                data: formData,

                success:function(r){

                    console.log(r);

                        

                    switch (r) {

                        case "1":

                            //alert("Te haz registrado correctamente. Recibirás un correo de confirmación");

                            window.location.href="/";

                            break;

                    

                        case "2":

                            //alert("Ha Ocurrido un error al registrarte, vuelve a intentarlo");

                            window.location.href="/";

                            break;

                    

                        default:

                            //alert("El correo electrónico ya ha sido registrado previamente");

                            window.location.href="/";

                            break;

                    }

                }

            });

        });

    });

</script>