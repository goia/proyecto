<?php

    @ob_start();
     $con=mysql_connect ("localhost","root","root");
     mysql_select_db("campusourensecb",$con);

    $sql="select * FROM jugador";
//    $sql="select  id, enlace, categoria, subcategoria FROM Enlaces";

    $datos=mysql_query($sql,$con);

    $first = 0;//separa los elementos con una coma
    $json = '{"aaData":[';
    //yo uso un foreach, pero pueden cambiarlo por un while ($reg = mysql_fetch_array($res))
     while ($row=mysql_fetch_array($datos)) {

         if ($first++) 
            $json .=',';
            $json .= '["'.$row['id'].'",';
            $json .= '"'.$row['nombre'].'",';
            $json .= '"'.$row['apellidos'].'",';
            $json .= '"'.$row['ultima_conexion'].'",';
            $json .= '"'.$row['categoria'].'",';
            $json .= '"'.$row['posicion'].'"]';        
     }
    $json .= ']}';
    print $json;  
?>
