<!DOCTYPE html>
<html lang="en">
<head>
	<title>Club Yokó</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
   //1. Conectarse con la base de datos 
        $conexion = new mysqli('localhost','yoko','yoko1234','club_yoko');

        if($conexion->connect_error != NULL){
            echo $conexion->connect_error;
        }else{
            //2. Realizar la tarea que se requiere de la base de datos.

            $conexion->query("
            INSERT INTO club_yoko(nombre_completo, fecha_nacimiento, domicilio,	numero_telefono, colegio, nivel, nombre_madre, telefono_madre, email_madre,	nombre_padre, telefono_padre, email_padre, transporte, autorizacion_fotos, metodo_pago, indicacion_medica, informacion_relevante)
            VALUE('{$_POST['nombre_completo']}',
            '{$_POST['fecha_nacimiento']}',
            '{$_POST['domicilio']}',
            '{$_POST['numero_telefono']}',
            '{$_POST['colegio']}',
            '{$_POST['nivel']}',
            '{$_POST['nombre_madre']}',
            '{$_POST['telefono_madre']}',
            '{$_POST['email_madre']}',
            '{$_POST['nombre_padre']}',
            '{$_POST['telefono_padre']}',
            '{$_POST['email_padre']}',
            '{$_POST['transporte']}',
            '{$_POST['autorizacion_fotos']}',
            '{$_POST['metodo_pago']}',
            '{$_POST['indicacion_medica']}',
            '{$_POST['informacion_relevante']}'
            );
            ");

            if($conexion->error != ''){
                echo $conexion->error;
            }

            //3. Cerrar la conexion
            $conexion->close();
        }

            
        
        
    ?>

	<div class="bg-contact2" style="background-image: url('img/Veragua3.png');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form">
					<span class="contact2-form-title" style="font-family: 'Comic Neue', cursive;">
						Matrícula de inscripción 2020
					</span>
					<div>
						<center>
						<img src="img/Veragua2.png">
					</center>
					</div>
					<br><br>
					<span class="contact2-form-title" style="font-family: 'Comic Neue', cursive;">
						Datos de la niña
					</span>

					<div class="wrap-input2 validate-input" data-validate="El nombre completo es requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NOMBRE COMPLETO"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate="Fecha valida requerida">
						<input class="input2" type="text" name="Date">
						<span class="focus-input2" data-placeholder="FECHA DE NACIMIENTO"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Un domicilio es requerido">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="DOMICILIO"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate="Numero de telefono valido requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NÚMERO DE TELEFONO"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate="Colegio valido requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="COLEGIO ACTUAL"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate="Nivel valido requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NIVEL"></span>
					</div>

					<span class="contact2-form-title" style="font-family: 'Comic Neue', cursive;">
						Datos de la madre
					</span>
					<div class="wrap-input2 validate-input" data-validate="El nombre completo es requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NOMBRE COMPLETO DE LA MADRE"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate="Numero de telefono valido requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NÚMERO DE TELEFONO DE LA MADRE"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate = "Un email valido es requerido: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL DE LA MADRE"></span>
					</div>

					<span class="contact2-form-title" style="font-family: 'Comic Neue', cursive;">
						Datos del padre
					</span>
					<div class="wrap-input2 validate-input" data-validate="El nombre completo es requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NOMBRE COMPLETO DEL PADRE"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate="Numero de telefono valido requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NÚMERO DE TELEFONO DEL PADRE"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate = "Un email valido es requerido: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL DEL PADRE"></span>
					</div>

					<span class="contact2-form-title" style="font-family: 'Comic Neue', cursive;">
						Datos de interes
					</span>
					<div>
					<div class="form-check">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="¿NECESITAS MEDIO DE TRANSPORTE DESDE EL COLEGIO IRIBÓ?"></span>
  						<div class="form-check">
 							 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  							 <label class="form-check-label" for="defaultCheck1">
    							SI
 							 </label>
						</div>
						<div class="form-check">
  							<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  							<label class="form-check-label" for="defaultCheck1">
    							NO
  							</label>
					</div>
					</div>

					<div>
					<div class="form-check">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="¿AUTORIZA SUBIR FOTOS, VIDEOS Y NOMBRE DE SU HIJA EN MEDIOS DIGITALES?"></span>
  						<div class="form-check">
  							<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  							<label class="form-check-label" for="defaultCheck1">
    							SI
  							</label>
						</div>
						<div class="form-check">
  							<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  							<label class="form-check-label" for="defaultCheck1">
   								NO
  							</label>
						</div>
						</div>
 						 
  					<div>
					<div class="form-check">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="METODO DE PAGO"></span>
  						<div class="form-check">
  							<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  							<label class="form-check-label" for="defaultCheck1">
   								 TRANSFERENCIA
  							</label>
						</div>
						<div class="form-check">
  							<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  							<label class="form-check-label" for="defaultCheck1">
    							EFECTIVO
  							</label>
						</div>
					
					<br><br>

					<div class="wrap-input2 validate-input" data-validate="Nivel valido requerido">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="¿POSEE SU HIJA ALGUNA INDICACIÓN MÉDICA A TENER EN CUENTA?"></span>
					</div>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="OTRA INFORMACIÓN RELEVANTE"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn" style="font-family: 'Comic Neue', cursive;">
							<a href="gracias.html">	
								ENVIAR
							</a>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
