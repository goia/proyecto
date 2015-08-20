<?PHP
       if(($row['file_dni']=="")OR($row['file_dni']=="Null"))
        {
            $vacia= "<span class='glyphicon glyphicon-remove'style='color:red'></span>";
                    //aqui el code con el que cargas la imagen
        }
        else
        {	
            $vacia= "<span class='glyphicon glyphicon-ok' style='color:green'></span>";
        }
if(($row['file_titulo']=="")OR($row['file_titulo']=="Null"))
        {
           $vacia1= "<span class='glyphicon glyphicon-remove'style='color:red'></span>";
                    //aqui el code con el que cargas la imagen
        }
        else
        {	
            $vacia1= "<span class='glyphicon glyphicon-ok' style='color:green'></span>";
        }
if(($row['file_laboral']=="")OR($row['file_laboral']=="Null"))
        {
            $vacia2= "<span class='glyphicon glyphicon-remove'style='color:red'></span>";
                    //aqui el code con el que cargas la imagen
        }
        else
        {	
            $vacia2= "<span class='glyphicon glyphicon-ok' style='color:green'></span>";
        }
if(($row['file_documentos']=="")OR($row['file_documentos']=="Null"))
        {
            $vacia3= "<span class='glyphicon glyphicon-remove'style='color:red'></span>";
                    //aqui el code con el que cargas la imagen
        }
        else
        {	
            $vacia3= "<span class='glyphicon glyphicon-ok' style='color:green'></span>";
        }                                              
 if(($row['file_contrato']=="")OR($row['file_contrato']=="Null"))
        {
            $vacia4= "<span class='glyphicon glyphicon-remove'style='color:red'></span>";
                    //aqui el code con el que cargas la imagen
        }
        else
        {	
            $vacia4= "<span class='glyphicon glyphicon-ok' style='color:green'></span>";
        }                                   
 
 if(($row['file_experiencia']=="")OR($row['file_experiencia']=="Null"))
        {
            $vacia5= "<span class='glyphicon glyphicon-remove'style='color:red'></span>";
                    //aqui el code con el que cargas la imagen
        }
        else
        {	
            $vacia5= "<span class='glyphicon glyphicon-ok' style='color:green'></span>";
        } 
?>