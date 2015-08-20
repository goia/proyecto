<?php
    @ob_start();
     $con=mysql_connect ("localhost","root","root");
     mysql_select_db("programaExecutiva",$con);


    $mail = trim(strtolower($_REQUEST['mail']));




if (!empty $email)
{
    $mail = $mysqli->trim(strtolower($_REQUEST['mail']));
    $query = "SELECT ID FROM usuarios WHERE mail = '{$mail}' LIMIT 1;";
    $results = $mysqli->query($query);
    
    if($results->num_rows == 0)
    {
        echo "true";  //good to register
    }
    else
    {
        echo "false"; //already registered
    }
    }
    else
    {
        echo "false"; //invalid post var
    }

?>