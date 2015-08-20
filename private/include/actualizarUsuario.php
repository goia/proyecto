<?php
    require "./common.php";

    $mail2= $_POST['mail'];
    $estado= $_POST['estado'];

    
    // ACTUALIZAMOS EL ULTIMO ACCESO
	$sql_update = "UPDATE usuarios SET estado='".$estado."' WHERE mail='".$mail2."' ";
 
	$db->query($sql_update);

   header("Location: ../tablas.php");
?>