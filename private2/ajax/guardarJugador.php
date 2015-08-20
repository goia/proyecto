<?php

    @ob_start();
	require "./include/common.php";

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$login = $_POST['usuario'];
	$fechaNacimiento = $_POST['fecha'];
	$estatura = $_POST['estatura'];
	$categoria = $_POST['categoria'];
    $posicion = $_POST['posicion'];
 $ataque = $_POST['ataque'];
 $defensa = $_POST['defensa'];
 $velocidad = $_POST['velocidad'];
 $anticipacion = $_POST['anticipacion'];


    
              /* //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */
	

        $sql = "INSERT INTO jugador(nombre, apellidos, fecha_alta, ultima_conexion, ataque, defensa, velocidad, anticipacion, login, categoria, genero, fechaNacimiento, estatura, posicion ) VALUES ('".$nombre."','".$apellidos."','now()','now()','".$ataque."','".$defensa."','".$velocidad."','".$anticipacion."', '".$login."', '".$categoria."','".$genero."','".$fechaNacimiento."','".$estatura."','".$posicion."',)";

	 	$db->query($sql);

               /* //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */   


	header("Location: ../tablas.php");   
	die();
?>
?>
