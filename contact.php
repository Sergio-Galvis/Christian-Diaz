<html lang="es">
<!--Author: Bilden Software 
Author URL: http://bildensoftware.com-->

<head>

	<!--START META-TAGS SEARCH ENGINE-->
	<title>Doctor Cristhian Diaz | Cirugías Plásticas | Lipoescultura | Abdominoplastia | Mamoplastia | Rinoplastia | Ritidoplastia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="classification" content="Doctor Cristhian Díaz, Cirugías Plásticas, Lipoescultura, Abdominoplastia, Mamoplastia, Rinoplastia, Ritidoplastia">
    <meta name="description" content="Doctor Cristhian Díaz, especializado en cirugía plástica reconstructiva y reparadora en el Hospital Dr. Ignacio Pirovano. Cirugías plásticas, cirugías plásticas en bogotá, lipoescultura, abdominoplastia, mamoplastia, rinoplastia, ritidoplastia">
    <meta name="keywords" content="Doctor Cristhian Díaz, cirugías plásticas, cirugías plásticas en bogotá, lipoescultura, lipoescultura en bogotá, abdominoplastia, abdominoplastia en bogotá, mamoplastia, mamoplastia en bogotá, rinoplastia, rinoplastia en bogotá, ritidoplastia, ritidoplastia en bogotá">
    <meta name="author" content="Bilden Software">
    <meta content="id" name="geo.country">
    <meta name="geo.placename" content="Colombia">
    <meta name="revisit-after" content="1 Days">
    <meta name="robots" content="ALL">
    <meta name="copyright" content="2016">
    <!--END META-TAGS SEARCH ENGINE-->
    
    <!--START FAVICON-->
    <link id="favicon" rel="icon" type="image/png" href="images/favicon.ico"/>
    <!--END FAVICON--> 
	
    <!--START CSS FILES-->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
	<link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!--END CSS FILES-->
    
    <!--START WEB-FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic%7C.Open+Sans:300italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <!--END WEB-FONTS-->
    
    <!--START JQUERY BOOTSTRAP'S JS PLUGINS-->
	<script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!--END JQUERY BOOTSTRAP'S JS PLUGINS-->
	
    <!--START SMOOTH-SCROLLING-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
    <!--END SMOOTH-SCROLLING-->  
    
    <!--START SLIDER-SCRIPT-->
	<script src="js/responsiveslides.min.js"></script>
    <!--END SLIDER-SCRIPT-->
    
    <!--START CONTACT FORM JS-->
    <script type="text/javascript" src="js/form.js"></script>
    <!--END CONTACT FORM JS-->
    
</head>
    
<body>

	<!--START MAIN-HEADER-->
	<div class="main-header">
    
    <!--START HEADER-->
    <div id="home" class="header">
    	<div class="top-header">
        	<div class="container">
            	<div class="logo">
                	<a href="#home"><img src="images/logo.png" width="197" height="105" alt="Doctor Cristhian Diaz"></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
   	<!--END HEADER-->
        
	<!--START CONTAINER-->
    <div id="top" class="callbacks_container">
	<?php
    	
		error_reporting(E_ALL ^ E_DEPRECATED);
		
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$mensaje = $_POST['mensaje'];
		
		$host='localhost';
		$user='doctorcr_dcdcont';
		$pass='0{doV.?G%0}&';
		$database='doctorcr_contacto';

		$conex = mysql_connect($host, $user, $pass) or die ("Error de conexión con la base de datos.");

		mysql_select_db($database, $conex) or die ("No existe la base de datos.");

		$insertar="INSERT INTO contacto SET nombre='$nombre', email='$email', mensaje='$mensaje'";
		$ejecutar_insertar=mysql_query($insertar, $conex);

			//Comprobamos que se haya presionado el boton enviar
			if(isset($_POST['enviar'])){
			//Guardamos en variables los datos enviados
				$nombre = $_POST['nombre'];
				$max_longitud_nombre = 50;
				$email = $_POST['email'];
				$max_longitud_email = 320;
				$mensaje = $_POST['mensaje'];
				$max_longitud_mensaje = 500;
	
				//Validamos del lado del servidor que el nombre y el email no estén vacios
				if($nombre == '' || $max_longitud_nombre > 50){
					echo "Los datos ingresados no son válidos.";
				}
				else if($email  == '' || $max_longitud_email > 320){
					echo "Los datos ingresados no son válidos.";
				}
				if($mensaje == '' || $max_longitud_mensaje > 500){
					echo "Los datos ingresados no son válidos.";
				}
				else{
					//Email al que se enviará
					$para = "contacto@doctorcristhiandiaz.com";
					//Asunto del mensaje
					$asunto = "Contacto Pagina Web.";
					//Cuerpo del mensaje
					$mensaje = "
					<table border='0' cellspacing='3' cellpadding='2'>
						<tr>
							<td width='30%' align='justify' bgcolor='#f0efef'><strong>Nombre:</strong></td>
							<td width='80%' align='justify'>$nombre</td>
						</tr>
						<tr>
							<td align='justify' bgcolor='#f0efef'><strong>E-mail:</strong></td>
							<td align='justify'>$email</td>
						</tr>
						<tr>
							<td align='justify' bgcolor='#f0efef'><strong>Mensaje:</strong></td>
							<td align='justify'>$mensaje</td>
						</tr>
					</table>";	
	
					//Cabeceras del correo
    				$headers = "From: $nombre <$email>\r\n"; //Quien envia?
    				$headers .= "X-Mailer: PHP5\n";
    				$headers .= 'MIME-Version: 1.0' . "\n";
    				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
	
					//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
					if(mail($para, $asunto, $mensaje, $headers)){ 
						echo '
							<div class="tittle-head">
								<br>
								<h1>¡Gracias!</h1>
								<p>Su mensaje se ha enviado correctamente</p>
								<div class="learn-button">
									<a class="slide-btn"href="www.doctorcristhiandiaz/index.html">Volver</a>
								</div>
								<br>
							</div>';
						}
						else{
							echo '
								<div class="tittle-head">
								<br>
									<h1>¡Lo sentimos!</h1>
									<p>Su mensaje no se ha enviado</p>
									<div class="learn-button">
										<a class="slide-btn" href="href="www.doctorcristhiandiaz/index.html">Volver</a>
									</div>
									<br>
								</div>';
							}
						}
					}	
	?>
	</div>
    <!--END CONTAINER-->
	<div class="clearfix"></div>
	</div>
    <!--END MAIN-HEADER-->

	<!--START FOOTER-->
	<div class="footer">
    	<div class="container">
        	<div class="footer-menu">
            <br>
            	<p><a href="#home">Inicio</a> | <a href="#contact">Contáctenos</a> | <a href="">Mapa del sitio</p></a>
          	</div>
            <div class="copy-right">
            <br>
            	<p>Desarrollado por Bilden Software</p>
			</div>
            <div class="clearfix"></div>
		</div>	
	</div>
    <!--END FOOTER-->
    
    <!--START SCROLL TO-TOP-->
    <a href="#home" id="toTop" style="display: block;"> 
    	<span id="toTopHover" style="opacity: 1;"></span>
    </a>
    <!--END SCROLL TO-TOP-->
	
</body>
</html>