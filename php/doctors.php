<?php 
include  "conexion.php";
if(isset($_POST['request'])){
   $request = $_POST['request'];
}

$especialidad = $_REQUEST["id"];
if ($especialidad==100)
{
	 $stmt = $conn->prepare("SELECT especialidad,nombre,titulo,foto,id  FROM doctores ORDER BY especialidad");

}
else
{
	 $stmt = $conn->prepare("SELECT especialidad,nombre,titulo,foto,id  FROM doctores where especialidad=:especialidad ORDER BY especialidad");
  			  $stmt->bindValue(':especialidad', (int)$especialidad, PDO::PARAM_INT);

}

 

											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          $response = array();
   foreach($countriesList as $state){
      $response[] = array(
        "especialidad" => $state['especialidad'],
        "nombre" => $state['nombre'],
         "titulo" => $state['titulo'],
           "foto" => $state['foto'],
           "id" => $state['id']
      );
   }

    echo  json_encode($response);
   

?>