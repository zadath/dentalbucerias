<?php

$name = $_POST['name']; 
$email = $_POST['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 

try {

// armado de correo
    //$to = 'sadat.guevara@mxglobalsolutions.com';
    //$to = $correo_;

    $to = 'zadath23@gmail.com';
    //$from = 'zadath23@gmail.com';
    //$subject = 'Registro en Plataforma Take Care';
    $body = "Nombre: $name\r\nEmail: $email\r\n
      Asunto: $subject\r\nMensaje: $message\r\n";

    if (mail($to, $subject, $body, "From: $email")) {
      echo "Gracias por registrarse";
    } else {
      die ('Error: No se pudo enviar el correo');
    }
// fin de código para envío de correo
//echo "Inserción efectuada!!!";

    } catch (Exception $e) {
      die ("Error: " . $e->GetMessage());
    }


 ?>
