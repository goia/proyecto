<?php
    @ob_start();
    require "../include/common.php";
     $con=mysql_connect ("localhost","root","root");
     mysql_select_db("programaExecutiva",$con);


	$mail = $_REQUEST['mail'];
	$password = $_REQUEST['password'];
	
	
	// ENCRIPTAMOS LA CLAVE
	
	$pass = md5($password);
//echo 'pass: '.$pass;
 
	$sql = "SELECT * FROM usuarios WHERE mail = '".$mail."' and  contrasinal = '".$pass."';";
//echo '<br/>sql: ' .$sql;
    $result = $db->query($sql);

echo '<br/>sql: ' .$db;

     if((mysqli_num_rows($result)) >0) 
     {
         header("Location: ./index.php"); echo '<br/>sql: ' .$sql; 
     }
    else
    {
        header("Location: ./login.php?error=Non estas en el base de datos ou os datos estan incorrectos&mail=".$mail."");
        echo 'pass: '.$pass;  
    }

	
	die();
?>

	