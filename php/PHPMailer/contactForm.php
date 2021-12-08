<?php

$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone   = $_REQUEST["phone"];
$patient  = $_REQUEST["patient"];
$subject   = $_REQUEST["subject"];
$msg   = $_REQUEST["msg"];
$to    = "registro@moscati.com.mx"; // ENTER YOUR EMAIL ADDRESS

require  'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer(true);
$mail->isSMTP(); 
            $mail->CharSet = "utf-8";           
                         $mail->SMTPDebug = 3;          
                $mail->SMTPOptions = array(
                                                      'ssl' => array(
                                                      'verify_peer' => false,
                                                      'verify_peer_name' => false,
                                                      'allow_self_signed' => true));

            $mail->SMTPAuth = false; 
            $mail->SMTPSecure = false;          
            $mail->Host = 'localhost';
            $mail->Port = 25; 

$mail->Username = "registro2@moscati.com.mx";
$mail->Password = "Moscati2020";
$mail->SetFrom('registro@moscati.com.mx', 'registro@moscati.com.mx');
$mail->addAddress('rodolfo.ruiz@live.com', 'ToEmail');
$mail->addAddress('registro@moscati.com.mx', 'ToEmail');
$mail->addAddress('registro2@moscati.com.mx', 'ToEmail');
$mail->addAddress($email, 'ToEmail');
$mail->IsSMTP();
//$mail->SMTPDebug  = 3;
//$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
$mail->IsHTML(true);
$mail->Subject = $name . ' envio un mensaje desde la pagina de contacto '; 
$mail->Body    = 'Nombre de paciente: ' .  $name . '<br/> Email: ' . $email . ' <br/> Teléfono de contacto: ' .  $phone . ' <br/> Tipo de paciente: ' . $patient . ' <br/> Asunto: ' . $subject  . '<br/> Mensaje: ' . $msg . '';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
     
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'success';
}



/*if (isset($email) && isset($name) && isset($msg)) {
    $email_subject = "$name envió un mensaje desde la página de contacto "; // ENTER YOUR EMAIL SUBJECT
        $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: contacto <contacto@moscati.rcbsolutions.com>\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Nombre de paciente: $name<br/> Email: $email <br/> Teléfono de contacto: $phone <br/> Tipo de paciente: $patient <br/> Asunto: $subject <br/> Mensaje: $msg";
    
   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
    {
        echo 'success';
    }

else
    {
        echo 'failed';
    }
}*/

?>