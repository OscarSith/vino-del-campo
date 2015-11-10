<?php
session_start();
$message = '';

if ($_POST) {
	$args = array(
		'nombre' => FILTER_SANITIZE_STRING,
		'correo' => FILTER_VALIDATE_EMAIL,
		'mensaje' => FILTER_SANITIZE_STRING,
		'asunto' => FILTER_SANITIZE_STRING,
	);
	$values = filter_input_array(INPUT_POST, $args);

	$values['nombre'] = trim($values['nombre']);
	if (strlen($values['nombre']) < 4)
	{
		$message = 'Su nombre y apellido es requerido';
	}
	else if (!$values['correo'])
	{
		$message = 'El email ingresado es incorrecto';
	}
	else if($values['asunto'] === '')
	{
		$message = 'Su número de teléfono es requerido';
	}
	else
	{
		require 'mailer/PHPMailerAutoload.php';

		try {
			$mail = new PHPMailer();

			$mail->isSMTP();
			$mail->SMTPAuth = true;
			$mail->Host = 'smtp.mandrillapp.com';
			$mail->Username = 'larriega@gmail.com';
			$mail->Password = '';
			$mail->SMTPSecure = 'tls';
			$mail->CharSet = 'UTF-8';
			$mail->Port = 587;

			$mail->From     = $values['correo'];
			$mail->FromName = $values['nombre'];

			$body = '<h2>Enviado desde la web de Vinos del campo</h2>'
					.'<h3>De: '.$values['nombre'].'</h3>'
					.'<ul><li>Correo electrónico: '.$values['correo'].'</li>'
					.'<li>Mensaje<p>'. $values['mensaje'] .'</p></li></ul>';

			$text_body = "Enviado desde la web de Vinos del campo \n\n"
					.'De: '.$values['nombre']."\n\n"
					.'Correo electrónico: '.$values['correo']."\n"
					."Mensaje\n". $values['mensaje'];

			$mail->Subject = $values['asunto'] . ' - Web Vinos del campo';
			$mail->Body    = $body;
		    $mail->AltBody = $text_body;
		    $mail->addAddress('larriega@gmail.com', 'Oscar Larriega');
		    // $mail->AddCC('dantebecerra2013@artedangi.com');

		    if ($mail->send())
		    {
		    	$message = 'Tu mensaje ha sido enviado, Gracias.';
		    }
		    else
		    {
		    	$message = 'Ups.. no se pudo enviar el correo, intentelo de nuevo';
		    }

		    // Clear all addresses and attachments for next loop
		    $mail->clearAddresses();
		    $_SESSION['MESSAGE'] = $message;
		} catch (phpmailerException $e) {
			$message = $e->getMessage();
		}
	}

} else {
	$message = 'Petición inválida';
}

header('location: '.$_SERVER['HTTP_REFERER']);