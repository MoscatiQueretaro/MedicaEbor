<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];



    $sql_insert_contacto = "INSERT INTO contactos (nombre,email,telefono,asunto,mensaje) VALUES ('$name','$email','$phone','$asunto','$mensaje')";
    if ($conn->query($sql_insert_contacto) === TRUE) {
        $last_id = $conn->insert_id;
        $sql_contacto = "SELECT * from contactos WHERE ID ='$last_id' ";
       if ($result = mysqli_query($conn, $sql_contacto)) {
            $newArr = array();
            while ($db_field = mysqli_fetch_assoc($result)) {
              $newArr[] = $db_field;
           }
         echo json_encode($newArr);
    }

    }
    $conn->close();
}


