<?php
include  "conexion.php";
require  'PHPMailer/PHPMailerAutoload.php';
 error_reporting (E_ALL);
 
  //Definimos el tratamiento de errores no controlados
  set_error_handler(function () 
  {
    throw new Exception("Error");
  });


$pacientetipo  = $_REQUEST["pacientetipo"];
$estado = $_REQUEST["estado"];
$visitado  = $_REQUEST["visitado"];
$ingreso = $_REQUEST["ingreso"];
$alimentarias = $_REQUEST["alimentarias"];
$diagnosis = $_REQUEST["diagnosis"];
$cp = $_REQUEST["cp"];
$medico = $_REQUEST["medico"];
$cell = $_REQUEST["cell"];
$nac = $_REQUEST["nac"];
$ciudad = $_REQUEST["ciudad"];
$numero = $_REQUEST["numero"];
$colonia = $_REQUEST["colonia"];
$calle = $_REQUEST["calle"];
$religion = $_REQUEST["religion"];
$sangre = $_REQUEST["sangre"];
$educacion = $_REQUEST["educacion"];
$genero = $_REQUEST["genero"];
$medicamentos = $_REQUEST["medicamentos"];
$civil = $_REQUEST["civil"];
$prof = $_REQUEST["prof"];
$rfc = $_REQUEST["rfc"];
$uso = $_REQUEST["uso"];
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone  = $_REQUEST["phone"];
$razon  = $_REQUEST["razon"];
//$edad  = $_REQUEST["edad"];
$to    = "informes@hospitalebor.com.mx"; // ENTER YOUR EMAIL ADDRESS
//$to    = "registro@moscati.com.mx"; // ENTER YOUR EMAIL ADDRESS

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
$mail->addAddress('informes@hospitalebor.com.mx', 'ToEmail');
//$mail->addAddress('registro2@moscati.com.mx', 'ToEmail');
//$mail->addAddress($email, 'ToEmail');
$mail->IsSMTP();


$mail->IsHTML(true);
$mail->Subject = $name . ' realizo un Preregistro '; 
$mail->Body    = 'Nombre de paciente: ' . $name . ' <br/> Tipo de paciente: ' .  $pacientetipo . '<br/> Fecha de nacimiento: ' . $nac . ' <br/> Diagnostico: ' . $diagnosis . ' <br/> Genero: ' . $genero . ' <br/> Tipo de sangre: ' . $sangre . ' <br/>  Religion: ' . $religion . ' <br/> Nivel de estudios: ' . $educacion . ' <br/> Estado civil: ' . $civil . ' <br/> Profesion: ' . $prof . ' <br/> Estado: ' . $estado . ' <br/> Ciudad: ' . $ciudad . ' <br/> Colonia: ' . $colonia . ' <br/> Calle: ' . $calle . ' <br/> Numero: ' . $numero . ' <br/> Codigo Postal: ' . $cp . '  <br/> Telefono movil: ' . $cell . ' <br/> Email: ' . $email . ' <br/> Telefono de contacto: ' .  $phone . ' <br/>   Nombre del medico: ' . $medico . ' <br/>  Fecha probable: ' . $ingreso . ' <br/>  Alergia alimenticia: ' . $alimentarias . ' <br/>  Alergia a Medicamentos: ' . $medicamentos . ' <br/>    Razon Social en caso de requerir datos fiscales en su factura: ' . $razon . ' <br/>  RFC: ' . $rfc . '  <br/>  Uso del CFDI: ' . $uso . '';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   //  echo "<script>alert('".$subject."');      
     // </script>";

  //  echo 'Message could not be sent.';
    
    $stmt= $conn->prepare("Insert INTO preadmision (nombre,tipo,diagnostico,genero,fechanac,sangre,religion,educacion,civil,profesion,estado,ciudad
			,colonia, calle ,numero,cp,telefono,celular,email,medico,alimentos,medicamentos,RFC,uso,ingreso,razonsocial) values 
				(:name,:pacientetipo,:diagnosis,:genero,:nac,:sangre,:religion,:educacion,:civil,:prof
				,:estado,:ciudad,:colonia,:calle,:numero,:cp,:phone,:cell,:email,:medico,:alimentarias,:medicamentos,:rfc,:uso,:ingreso,:razonsocial)");

			$stmt->bindParam(":name",$name,PDO::PARAM_STR);
			$stmt->bindParam(":pacientetipo",$pacientetipo,PDO::PARAM_STR);
			//$stmt->bindParam(":edad",$edad,PDO::PARAM_STR);
			$stmt->bindParam(":diagnosis",$diagnosis,PDO::PARAM_STR);
			$stmt->bindParam(":genero",$genero,PDO::PARAM_STR);
			$stmt->bindParam(":nac",$nac,PDO::PARAM_STR);
			$stmt->bindParam(":sangre",$sangre,PDO::PARAM_STR);
			$stmt->bindParam(":religion",$religion,PDO::PARAM_STR);
			$stmt->bindParam(":educacion",$educacion,PDO::PARAM_STR);
			$stmt->bindParam(":civil",$civil,PDO::PARAM_STR);
			$stmt->bindParam(":prof",$prof,PDO::PARAM_STR);
			$stmt->bindParam(":estado",$estado,PDO::PARAM_STR);
			$stmt->bindParam(":ciudad",$ciudad,PDO::PARAM_STR);
			$stmt->bindParam(":colonia",$colonia,PDO::PARAM_STR);
			$stmt->bindParam(":calle",$calle,PDO::PARAM_STR);
			$stmt->bindParam(":numero",$numero,PDO::PARAM_STR);
			$stmt->bindParam(":cp",$cp,PDO::PARAM_STR);
			$stmt->bindParam(":phone",$phone,PDO::PARAM_STR);
			$stmt->bindParam(":cell",$cell,PDO::PARAM_STR);
			$stmt->bindParam(":email",$email,PDO::PARAM_STR);
			$stmt->bindParam(":medico",$medico,PDO::PARAM_STR);
			$stmt->bindParam(":alimentarias",$alimentarias,PDO::PARAM_STR);
			$stmt->bindParam(":medicamentos",$medicamentos,PDO::PARAM_STR);
			$stmt->bindParam(":rfc",$rfc,PDO::PARAM_STR);
			$stmt->bindParam(":uso",$uso,PDO::PARAM_STR);
			$stmt->bindParam(":ingreso",$ingreso,PDO::PARAM_STR);
			$stmt->bindParam(":razonsocial",$razon,PDO::PARAM_STR);
		

			if ($stmt->execute())
			{
				$resultado = "success";
			}
			else
			{
				$resultado= "failed";

			}
			echo 'Mailer Error: ' . $mail->ErrorInfo; 

} else {
	$stmt= $conn->prepare("Insert INTO preadmision (nombre,tipo,diagnostico,genero,fechanac,sangre,religion,educacion,civil,profesion,estado,ciudad
			,colonia, calle ,numero,cp,telefono,celular,email,medico,alimentos,medicamentos,RFC,uso,ingreso,razonsocial) values 
				(:name,:pacientetipo,:diagnosis,:genero,:nac,:sangre,:religion,:educacion,:civil,:prof
				,:estado,:ciudad,:colonia,:calle,:numero,:cp,:phone,:cell,:email,:medico,:alimentarias,:medicamentos,:rfc,:uso,:ingreso,:razonsocial)");

			$stmt->bindParam(":name",$name,PDO::PARAM_STR);
			$stmt->bindParam(":pacientetipo",$pacientetipo,PDO::PARAM_STR);
			//$stmt->bindParam(":edad",$edad,PDO::PARAM_STR);
			$stmt->bindParam(":diagnosis",$diagnosis,PDO::PARAM_STR);
			$stmt->bindParam(":genero",$genero,PDO::PARAM_STR);
			$stmt->bindParam(":nac",$nac,PDO::PARAM_STR);
			$stmt->bindParam(":sangre",$sangre,PDO::PARAM_STR);
			$stmt->bindParam(":religion",$religion,PDO::PARAM_STR);
			$stmt->bindParam(":educacion",$educacion,PDO::PARAM_STR);
			$stmt->bindParam(":civil",$civil,PDO::PARAM_STR);
			$stmt->bindParam(":prof",$prof,PDO::PARAM_STR);
			$stmt->bindParam(":estado",$estado,PDO::PARAM_STR);
			$stmt->bindParam(":ciudad",$ciudad,PDO::PARAM_STR);
			$stmt->bindParam(":colonia",$colonia,PDO::PARAM_STR);
			$stmt->bindParam(":calle",$calle,PDO::PARAM_STR);
			$stmt->bindParam(":numero",$numero,PDO::PARAM_STR);
			$stmt->bindParam(":cp",$cp,PDO::PARAM_STR);
			$stmt->bindParam(":phone",$phone,PDO::PARAM_STR);
			$stmt->bindParam(":cell",$cell,PDO::PARAM_STR);
			$stmt->bindParam(":email",$email,PDO::PARAM_STR);
			$stmt->bindParam(":medico",$medico,PDO::PARAM_STR);
			$stmt->bindParam(":alimentarias",$alimentarias,PDO::PARAM_STR);
			$stmt->bindParam(":medicamentos",$medicamentos,PDO::PARAM_STR);
			$stmt->bindParam(":rfc",$rfc,PDO::PARAM_STR);
			$stmt->bindParam(":uso",$uso,PDO::PARAM_STR);
			$stmt->bindParam(":ingreso",$ingreso,PDO::PARAM_STR);
			$stmt->bindParam(":razonsocial",$razon,PDO::PARAM_STR);
		

			if ($stmt->execute())
			{
				$resultado = "success";
			}
			else
			{
				$resultado= "failed";

			}
   echo 'success';
}
 restore_error_handler();

/*try 
{
if (isset($email) && isset($name) ) {
    $email_subject = "$name realizo un Preregistro"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: contacto <registro2@moscati.com.mx>\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Nombre de paciente: $name <br/> Tipo de paciente: $pacientetipo <br/> Fecha de nacimiento: $nac 
			 <br/> Diagnostico: $diagnosis <br/> Genero: $genero <br/> Tipo de sangre: $sangre <br/> Religion: $religion
			<br/> Nivel de estudios: $educacion <br/> Estado civil: $civil <br/> Profesion: $prof
				<br/> Estado: $estado <br/> Ciudad: $ciudad <br/> Colonia: $colonia
				<br/> Calle: $calle <br/> Numero: $numero <br/> Codigo Postal: $cp
<br/> Telefono de contacto: $phone <br/> Telefono movil: $cell  <br/> Nombre del medico: $medico  <br/> Fecha probable: $ingreso
 <br/>  Email: $email <br/> Alergia alimenticia: $alimentarias <br/> Alergia a Medicamentos: $medicamentos
<br/> Razon Social en caso de requerir datos fiscales en su factura: $razon  <br/> RFC: $rfc <br/> Uso del CFDI: $uso";
	
   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
	{

		$stmt= $conn->prepare("Insert INTO preadmision (nombre,tipo,diagnostico,genero,fechanac,sangre,religion,educacion,civil,profesion,estado,ciudad
			,colonia, calle ,numero,cp,telefono,celular,email,medico,alimentos,medicamentos,RFC,uso,ingreso,razonsocial) values 
				(:name,:pacientetipo,:diagnosis,:genero,:nac,:sangre,:religion,:educacion,:civil,:prof
				,:estado,:ciudad,:colonia,:calle,:numero,:cp,:phone,:cell,:email,:medico,:alimentarias,:medicamentos,:rfc,:uso,:ingreso,:razonsocial)");

			$stmt->bindParam(":name",$name,PDO::PARAM_STR);
			$stmt->bindParam(":pacientetipo",$pacientetipo,PDO::PARAM_STR);
			//$stmt->bindParam(":edad",$edad,PDO::PARAM_STR);
			$stmt->bindParam(":diagnosis",$diagnosis,PDO::PARAM_STR);
			$stmt->bindParam(":genero",$genero,PDO::PARAM_STR);
			$stmt->bindParam(":nac",$nac,PDO::PARAM_STR);
			$stmt->bindParam(":sangre",$sangre,PDO::PARAM_STR);
			$stmt->bindParam(":religion",$religion,PDO::PARAM_STR);
			$stmt->bindParam(":educacion",$educacion,PDO::PARAM_STR);
			$stmt->bindParam(":civil",$civil,PDO::PARAM_STR);
			$stmt->bindParam(":prof",$prof,PDO::PARAM_STR);
			$stmt->bindParam(":estado",$estado,PDO::PARAM_STR);
			$stmt->bindParam(":ciudad",$ciudad,PDO::PARAM_STR);
			$stmt->bindParam(":colonia",$colonia,PDO::PARAM_STR);
			$stmt->bindParam(":calle",$calle,PDO::PARAM_STR);
			$stmt->bindParam(":numero",$numero,PDO::PARAM_STR);
			$stmt->bindParam(":cp",$cp,PDO::PARAM_STR);
			$stmt->bindParam(":phone",$phone,PDO::PARAM_STR);
			$stmt->bindParam(":cell",$cell,PDO::PARAM_STR);
			$stmt->bindParam(":email",$email,PDO::PARAM_STR);
			$stmt->bindParam(":medico",$medico,PDO::PARAM_STR);
			$stmt->bindParam(":alimentarias",$alimentarias,PDO::PARAM_STR);
			$stmt->bindParam(":medicamentos",$medicamentos,PDO::PARAM_STR);
			$stmt->bindParam(":rfc",$rfc,PDO::PARAM_STR);
			$stmt->bindParam(":uso",$uso,PDO::PARAM_STR);
			$stmt->bindParam(":ingreso",$ingreso,PDO::PARAM_STR);
			$stmt->bindParam(":razonsocial",$razon,PDO::PARAM_STR);
		

			if ($stmt->execute())
			{
				$resultado = "success";
			}
			else
			{
				$resultado= "failed";

			}

				//$stmt -> close();
				//$stmt= null;


		echo 'success';
	}

else
	{
		echo 'failed';
	}
}
}
catch(Exception $e) //capturamos un posible error
  {
    //mostramos el texto del error al usuario	  
    echo $e->getMessage();
   // $resultado = 0;
  }
  restore_error_handler();

*/

?>