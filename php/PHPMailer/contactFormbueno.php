<?
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone   = $_REQUEST["phone"];
$patient  = $_REQUEST["patient"];
$subject   = $_REQUEST["subject"];
$msg   = $_REQUEST["msg"];
$to    = "registro@moscati.com.mx"; // ENTER YOUR EMAIL ADDRESS
if (isset($email) && isset($name) && isset($msg)) {
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
}

?>