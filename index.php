<?php
	$fecha = date("d-M-y H:i");
	$sujeto = "Mensaje desde el sitio web Quitoblues.com";
	$contenido = "Nombre: ".$_POST['nombre']."\r\n";
	$contenido .= "Correo: ".$_POST['email']."\r\n";
	$contenido .= "Mensaje: ".$_POST['mensaje']."\r\n";
	$contenido .= "el mensaje se escribio el ".$fecha;
	// Vamos a verificar si funciono el envio
	if ($_POST['submit']) {
		if (mail("info@quitoblues.com", $sujeto, utf8_decode($contenido), $header)) {
			echo 
			"<script language='javascript'>
				alert('Gracias por tu mensaje, pronto nos pondremos en contacto contigo.');
				window.location.href = 'http://quitoblues.com/index.html';
			</script>";
		} else {
			echo
			"<script language='javascript'>
				alert('Falló el envío, inténtalo nuevamente.');
				window.location.href = 'http://quitoblues.com/index.html';
			</script>";
		}
	}
?>