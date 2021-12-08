<?php
$department  = $_REQUEST["department"];
$doctor = $_REQUEST["doctor"];
$patient  = $_REQUEST["patient"];
$date = $_REQUEST["date"];
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone  = $_REQUEST["phone"];
$msg   = $_REQUEST["msg"];
$to    = "informes@hospitalebor.com.mx"; // ENTER YOUR EMAIL ADDRESS

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

$mail->Username = "informes@hospitalebor.com.mx";
$mail->Password = "Ebor2020=";
$mail->SetFrom('informes@hospitalebor.com.mx', 'informes@hospitalebor.com.mx');
$mail->addAddress('rodolfo.ruiz@live.com', 'ToEmail');
$mail->addAddress('informes@hospitalebor.com.mx', 'informes@hospitalebor.com.mx');
$mail->addAddress('imagen@hospitalebor.com.mx', 'ToEmail');
//$mail->addAddress($email, 'ToEmail');
$mail->IsSMTP();
$mail->IsHTML(true);
$mail->Subject = $name . ' realizo una cita para un estudio de imagen '; 
$mail->Body    = 'Departamento: ' .  $department . '<br/> Estudio: ' . $doctor . '<br/> Tipo de paciente: ' . $patient . ' <br/> Fecha de cita: ' . $date . ' <br/>  Nombre de paciente: ' . $name . ' <br/>   Email: ' . $email . ' <br/> Telefono de contacto: ' .  $phone . ' <br/>  Mensaje Adicional: ' . $msg . '';
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
    $email_subject = "$name realizo una cita para un estudio de imagen"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: contacto <registro2@moscati.com.mx>\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Departamento: $department <br/> Estudio: $doctor <br/> Tipo de paciente: $patient <br/> Fecha de cita: $date <br/> Nombre de paciente: $name <br/>  Email: $email <br/> Telefono de contacto: $phone <br/> Mensaje Adicional: $msg";
	
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