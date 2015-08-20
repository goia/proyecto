<!DOCTYPE html>
<html>
<?php include "./include/head.php"; //print $_SESSION['ses_nome'];?>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
<?php include "./include/header.php";?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                            
                        </div>
                        <div class="pull-left info">
                            <p>Hola, <?PHP echo $_SESSION["ses_nome"]?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <?php include'./include/menuizquierdo.php'?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <img src="./img/logo.png">
                        <small>Panel de control</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./inicio.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li><a href="./tablas.php">Tablas</a></li>
                        <li class="active">usuario</li>
                    </ol>
                </section>
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
     
		
                <!-- Main content -->
                <section class="content">
                        
                         <div class=" col-xs-12">
                                
                            <!-- Primary box -->
                            <div class="box box-primary">
                                <div class="box-header" data-toggle="tooltip" title="Header tooltip">
                                    <h3 class="box-title">Datos personales :</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-primary btn-xs" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <form id="formulario" name="formulario" method="post" action="./include/actualizarUsuario.php">
                                <?php
    $mail=$_GET['row_mail'];
?>  
                                <div class="box-body">
                                    <table class="table table-responsive tableUsuario">
                                    <?php
									 $sql = "select * FROM usuarios WHERE mail='".$mail."'";
                                        $result = $db->query($sql);
                                           while ($row = $db->fetch_array($result)){                                                                                              include'./include/archivos.php';
$estado= $row['estado'];
/*</////////////////////////////>   */                                                                       $dni= $row['file_dni'];
        $split = explode('-=-',$dni);
        $name = $split[1];
        
        $titulo= $row['file_titulo'];
        $split = explode('-=-',$titulo);
        $name1 = $split[1];
                                                                                    
        $laboral= $row['file_laboral'];
        $split = explode('-=-',$laboral);
        $name2 = $split[1];                                                                                                                                                                
        $documentos= $row['file_documentos'];
        $split = explode('-=-',$documentos);
        $name3 = $split[1];         
                                                                                    
        $contrato= $row['file_contrato'];
        $split = explode('-=-',$contrato);
        $name4 = $split[1];                                                                                                                                                               
        $experiencia= $row['file_experiencia'];
        $split = explode('-=-',$experiencia);
        $name5 = $split[1];             
                                                                                    
/*</////////////////////////////>   */
        
                                               echo "  
                                                    <tr>
                                                        <td><u>Id</u>: </td>  
                                                        <td>".$row['id']."</td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Nome</u>: </td>  
                                                        <td>".$row['nome']."</td>   
                                                    </tr>
                                                    <tr>
                                                        <td><u>Apelidos</u>: </td>  
                                                        <td>".$row['apelidos']."</td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Telefono</u>: </td>  
                                                        <td>".$row['telefono']."</td>  
                                                    </tr> 
                                                    <tr>
                                                        <td><u>Email</u>: </td>  
                                                        <td>".$row['mail']."</td>  
                                                    </tr> 
                                                    <tr>
                                                        <td><u>Fecha de último acceso</u>: </td>  
                                                        <td>".$row['ultimo_acceso']."</td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Tipo de profesional</u>: </td>  
                                                        <td>".$row['profesional']."</td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Idade</u>: </td>  
                                                        <td>".$row['idade']."</td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Tipo de profesional</u>: </td>  
                                                        <td>".$row['directivo']."</td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Puntos de formación</u>: </td>  
                                                        <td>".$row['pFormacion']."&nbsp;puntos</td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Puntos de Postgrado</u>: </td>  
                                                        <td>".$row['pPostgrado']."&nbsp;puntos</td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Puntos de Experiencia</u>: </td>  
                                                        <td>".$row['pExperiencia']."&nbsp;puntos</td>  
                                                    </tr>
                                                    <tr>
                                                        <td><h5 class='box-title' style='color:red;'>ARCHIVOS SUBIDOS:</h5> </td>  
                                                        <td ></td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>DNI ou Pasaporte</u>: </td>  
                                                        <td>".$vacia."&nbsp;<a href='".$row['file_dni']."' target='_blank'>".$name."</a></td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Titulación de postgrado</u>: </td>  
                                                        <td>".$vacia1."&nbsp;<a href='".$row['file_titulo']."' target='_blank'>".$name1."</a></td>    
                                                    </tr>
                                                    <tr>
                                                        <td><u>Documentación que acredite grao de formación alcanzada</u>: </td>  
                                                        <td>".$vacia2."&nbsp;<a href='".$row['file_laboral']."' target='_blank'>".$name2."</a></td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Informe de vida laboral expedido pola Seguridade Social</u>: </td>  
                                                        <td>".$vacia3."&nbsp;<a href='".$row['file_documentos']."' target='_blank'>".$name3."</a></td>    
                                                    </tr>
                                                    <tr>
                                                        <td><u>Copia do contrato laboral, Certificado ou xustificante/volante de empadroamento</u>: </td>  
                                                        <td>".$vacia4."&nbsp;<a href='".$row['file_contrato']."' target='_blank'>".$name4."</a></td>  
                                                    </tr>
                                                    <tr>
                                                        <td><u>Outros</u>: </td>  
                                                        <td>".$vacia5."&nbsp;<a href='".$row['file_experiencia']."' target='_blank'>".$name5."</a></td>   
                                                    </tr><br/> 
                                                    <input type='hidden' name='mail' id='mail' value='".$mail."'>                    
                                                    ";
                                               }
                                             
                                ?>
                                   <tr> 
                                          
                                       <td><h5 class='box-title' style="color:red;">Estado do USUARIO: </h5></td>  <br/>
                                       <td><?PHP echo $estado?></td>
                                  </tr>
                                                    <tr>
                                                        <td>
                                                        <select class="col-lg-10" id="estado" name="estado">
                                                        <option value="seleccione unha opcion" placeholder='seleccione unha opcion'>seleccione unha opcion</option>
                                                        <option value="en proceso">En proceso</option>
                                                        <option value="aceptado">Aceptado</option>

                                                        <option value="rechazado">Rechazado</option>

                                                        </select>
                                                            
                                                        </td>  
                                                    </tr> 
                                    </table>
                                </div><!-- /.box-body -->

                                <div class="box-footer">
                                     <a type="submit" class="btn btn-primary"href="<?=$_SERVER["HTTP_REFERER"]?>" >Atrás&nbsp;&nbsp;<i class="fa fa-arrow-circle-left"></i></a>
                                <button type="submit" class="btn btn-primary">Guardar&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></button>  
                                </div><!-- /.box-footer-->
                        </form>
                            </div><!-- /.box -->                      
                        </div><!-- /.col -->
                        
                        
                    </div><!-- /.row -->

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
            
       <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->                   
                        
                        
                        
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


       <?php include"./include/scripts.php";?>

    </body>
</html>