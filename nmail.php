<?php
$name = $_POST["nombre"];
$email = $_POST['correo'];
$phone = $_POST['tel'];
$company = $_POST['empresa']; 
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';


$cuerpo = '<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$phone.'</td>
        </tr>
        <tr><td>Empresa: '.$company.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Asunto: '.$asunto.'</td></tr>
        <tr><td>Mensaje: '.$mensaje.'</td></tr>      
        
    </table>';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->CharSet="UTF-8";   
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication                         // SMTP password
    $mail->Username="zadath23@gmail.com";
    $mail->Password="guevara23";
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    //$mail->setFrom('zadath23@gmail.com', 'Lion Software');
    $mail->setFrom($email, $name);
    $mail->addAddress('zadath23@hotmail.com');     // Add a recipient
    //$mail->addAddress('zadath23@gmail.com');               // Name is optional*/
    /*$mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject=  $asunto;
    $mail->Body    = $cuerpo;
    /* 
     $mail->Subject = 'Solicito Información';
    $mail->Body    = 'Cuerpo del mensaje <b>in bold!</b>';
    */
    /*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

    $mail->send();
    echo 'Mensaje Enviado';
} catch (Exception $e) {
    echo 'MMensaje no pudo ser enviado: ', $mail->ErrorInfo;
}

?>