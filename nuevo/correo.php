<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$nombre = $_POST['name'];
$correo = $_POST['email'];
$mensaje = $_POST['services'];
//envio de correo
$fecha = $_POST['adate'];
$hora = $_POST['atime'];
$telefono = $_POST['phone'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('', 'Help Course');
    $mail->addAddress($correo, $nombre, $mensaje);     //Add a recipient
    /*Envio al destinatario*/
    if(!empty($correo)){
        $mail->addBCC($correo);
    }


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nueva Cita - HelpCourse';
    $mail->Body    ='Gracias por agendar su cita! <p aling= center>
    <br>Nombre: '.$_POST['name'].'
    <br>Correo: '.$_POST['email'].'
    <br>Curso: '.$_POST['services'].'
    <br>Fecha de la cita: '.$_POST['adate'].'
    <br>Hora: '.$_POST['atime'].'
    <br>Telefono: '.$_POST['phone'].'</p>';

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo json_encode('exito');
} catch (Exception $e) {
    echo json_encode('error');
}
?>
