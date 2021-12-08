<?php
$cirugia = $_REQUEST["cirugia"];
$patient  = $_REQUEST["patient"];
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone  = $_REQUEST["phone"];
$msg   = $_REQUEST["msg"];
$to    = "registro@moscati.com.mx"; // ENTER YOUR EMAIL ADDRESS
require  'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer(true);
/*$mail->isSMTP();
$mail->Host = 'relay-hosting.secureserver.net';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;*/
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
$mail->IsHTML(true);
$mail->Subject = $name . ' esta interesado en una cirugia '; 
$mail->Body    = 'Nombre de paciente: ' . $name . ' <br/> Tipo de cirugia: ' .  $cirugia . '<br/> Cuenta con doctor: ' . $patient . ' <br/>   Email: ' . $email . ' <br/> Telefono de contacto: ' .  $phone . ' <br/>  Mensaje Adicional: ' . $msg . '';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
     //echo "<script>alert('".$subject."');      
      //</script>";

  //  echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'success';
}
/*if (isset($email) && isset($name) && isset($msg)) {
    $email_subject = "$name esta interesado en una cirugía"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: contacto <registro2@moscati.com.mx>\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = " Nombre de paciente: $name <br/>  Tipo de cirugía: $cirugia <br/>
Cuenta con doctor: $patient <br/> Email: $email <br/> Telefono de contacto: $phone <br/> Mensaje Adicional: $msg";
	
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