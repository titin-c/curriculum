<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
    $web = $_POST['web'];
	$asunto = 'CV form';
	$mensaje = "Nombre: ".$nombre."<br> Email: ".$email."<br> Web: ".$web."<br> Mensaje:".$_POST['mensaje'];


	if(mail('titin.colomer.romero@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>