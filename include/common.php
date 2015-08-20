<?php
error_reporting(E_ALL & ~E_NOTICE);
require "configure.php";
require ('mysql5.class.php');
global $db;
$db = new MySQL5();
$db->set($db_host, $db_user, $db_pwd, $db_name);

/* Cambiar en función del host donde se despliegue */
//$URLADMIN = "http://campusourensecb.com/";
$URLADMIN = "localhost:8888";

function login($name, $pwd){
	global $db;
	$sql = "select * from usuarios where login='" . $name . "' and passwprd = '" . md5($pwd) . "'";
    
	$result = $db->query($sql);
	$num_rows = $db->num_rows($result);
    
	if ($num_rows != 1) return false;
    
	$row_login = $db->fetch_array($result);

	$_SESSION['ses_id']	            = $row_login['id'];
	$_SESSION['ses_nombre']			= $row_login['nombre'];
	$_SESSION['ses_apellidos']		= $row_login['apellidos'];
	$_SESSION['ses_ultimo_acceso'] 	= $row_login['ultimaconexion'];
	

	if ($row_login['tipo']==1){
		$_SESSION['ses_administrador']=1;
	}else{
		$_SESSION['ses_administrador']=0;
	}


	// ACTUALIZAMOS EL ULTIMO ACCESO
	$sql_update = "UPDATE usuarios SET ultimo_acceso=now() WHERE id=".$row_login['id']."";
	$result_update = $db->query($sql_update);
    return true;
}


function isValidUser(){
	if (isset($_SESSION['ses_id_empleado'])){
		return true;
	}else{
		return false;
	}	
}

function isColegiado(){
	if (isset($_SESSION['ses_id_colegiado'])){
		return true;
	}else{
		return false;
	}	
}

function isAdmin(){
	if ($_SESSION['ses_administrador']==1){
		return true;	
	}else{
		return false;
	}
}


function logout(){
	unset ($_SESSION['ses_id']);
	unset ($_SESSION['ses_nombre']);
	unset ($_SESSION['ses_apellidos']);
	unset ($_SESSION['ses_ultimo_acceso']);
	unset ($_SESSION['ses_administrador']);
	session_destroy();
}

function tiempo_segundos($segundos){
	$minutos=$segundos/60;
	$horas=floor($minutos/60);
	$minutos2=$minutos%60;
	$segundos_2=$segundos%60%60%60;
	if($minutos2<10)$minutos2='0'.$minutos2;
	if($segundos_2<10)$segundos_2='0'.$segundos_2;

	if($segundos<60){ /* segundos */
		$resultado= round($segundos).' Segundos';
	}elseif($segundos>60 && $segundos<3600){/* minutos */
		$resultado= $minutos2.':'.$segundos_2.' Minutos';
	}else{/* horas */
		$resultado= $horas.':'.$minutos2.':'.$segundos_2.' Horas';
	}
	return $resultado;
} 

?>
