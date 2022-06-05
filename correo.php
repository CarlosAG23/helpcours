<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                    //Enable verbose debug output
    $mail->isSMTP();                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.email';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                   //Enable SMTP authentication
    $mail->Username   = '';       //SMTP username
    $mail->Password   = '';              //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    //Enable implicit TLS encryption
    $mail->Port       = 465;            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('', 'Help Course');
    $mail->addAddress($correo, $nombre, $mensaje);     //Add a recipient
    
    
    /*Envio al destinatario*/
    if(!empty($correo)){
        $mail->addBCC('');
    }

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Sugerencias';
    $mail->Body    = '<p aling= center>
    <br>Nombre: '.$_POST['nombre'].'
    <br>Correo: '.$_POST['correo'].'
    <br>Numero: '.$_POST['numero'].'
    <br>Mensaje: '.$_POST['mensaje'].'</p>';

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo json_encode('exito');
} catch (Exception $e) {
    echo json_encode('error');
}
?>
