<?php
require_once("PHPMailer-master/PHPMailerAutoload.php");



/*$mail = new PHPMailer();*/
$mail->isSMTP();	
$mail->Host="smtp.gmail.com";	
$mail->SMTPAuth=true;
$mail->Port=587; 
$mail->SMTPSecure="tls";

/*$mail->CharSet="UTF-8";                   */
$mail->Username="zadath23@gmail.com";
$mail->Password="guevara23";
/*  
$mail->SetFrom($_POST["Correo"], "Formulario de Contacto");
$mail->AddAddress("atencionaclientes@autociclos.com","");
*/
$mail->SetFrom("zadath23@gmail.com");  //remitente
$mail->AddAddress('zadath@hotmail.com');   //destinatario

$mail->Subject = 'asunto del correo';
$mail->Body = 'cuerpo del correo';

if($mail->Send()){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}

?>