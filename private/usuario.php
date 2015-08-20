<!DOCTYPE html>
<html>
<?php 
    include "./include/head.php";
    require "./include/common.php";
//print $_SESSION['ses_nome'];
?>
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
                           
                            
                        </div>
                        <div class="pull-left info">
                            <p>Hola, <?PHP echo $_SESSION["ses_nome"]?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->

                    <!-- /.search form -->
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
                        <li><a href="./inicio.php"><i class="fa fa-dashboard"></i> Tablas</a></li>
                        <li class="active">inicio</li>
                    </ol>
                </section>
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php
    $mail=$_GET['row_mail'];	
?>
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
                                <div class="box-body">
                                <table class="table table-responsive tableUsuario">
                                    <?php
									 $sql = "select * FROM usuarios WHERE mail='".$mail."'";
                                        $result = $db->query($sql);
                                           while ($row = $db->fetch_array($result)){  
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
                                                    </tr>";
                                               }
                                ?>
                                        
                                        
                                                    <tr> 
                                                       
                                                        <td><u>Estado</u>: </td>  
                                                        <td>
                                                        <select id="estado" name="estado">
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
                            </div><!-- /.box -->                      
                        </div><!-- /.col -->

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