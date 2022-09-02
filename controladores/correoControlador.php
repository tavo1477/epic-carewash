<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class CorreoControlador{

	static public function ctrEnviarCorreo(){

		if (isset($_POST["nombre"])) {

			if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombre"]) && 
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) &&				
				preg_match('/^[0-9- ]+$/', $_POST["telefono"]) &&				
				preg_match('/^[?\\¿\\!\\¡\\:\\,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["mensaje"])){
			
				// Instantiation and passing `true` enables exceptions
				$mail = new PHPMailer(true);

				try {
				    //Server settings
				     $mail->SMTPDebug = SMTP::DEBUG_SERVER;  				     

				     $mail->isMail();

				    //Recipients
				    $mail->setFrom($_POST["email"], $_POST["nombre"]);
				    $mail->addAddress('ventas@oxygenoutsourcing.net', 'Epic Carewash');     // Add a recipient
				     
				    $mail->addReplyTo($_POST["email"], $_POST["nombre"]);				   

				    // Content
				    $mail->isHTML(true);                                  // Set email format to HTML
				    $mail->Subject = 'Mensaje de Epic Carewash';
				    $mail->Body    = '<div>'.$_POST["mensaje"].'</div>';
				    $mail->AltBody = $_POST["mensaje"];

				    $mail->send();
				    return "ok";

				} catch (Exception $e) {
				    return "error";
				}

			} else {

				return "error-sintaxis";
			}
		}

	}
}