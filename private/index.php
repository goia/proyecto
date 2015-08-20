<!DOCTYPE html>
<html>
<?php 
    include "./include/head.php";

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
                            <!--<img src="img/avatar3.png" class="img-circle" alt="User Image" />-->
                            
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
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">inicio</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                       
                       
                        <div class="col-lg-6 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">

                                   <p>
                                    <h2>
                                       <script type="text/javascript">
                                        var d = new Date();
                                        var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
  "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                                        document.write('Fecha: '+d.getDate(),'-'+meses[d.getMonth()],'-'+d.getFullYear(),'<br/>Hora: '+d.getHours(),'- '+d.getMinutes(),'-'+d.getSeconds());
                                        </script>
                                     </h2>
                                   </p>
                                        
                                    
<br/>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-clock"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    ... 
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-6 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
            <?php

				$sql = "SELECT * FROM usuarios";

                
                $result = $db->query($sql);
                $numero = mysqli_num_rows($result);


                    echo '<p>El número de Usuarios registrados es : <br/><h3>'.$numero.'</h3></p>';
			/*
                $result1 = $db->query($sql);
    
				while(($row = $db->fetch_array($result1))){
                    echo'<h4><u>Usuario:</u> '.$row['nome'] .', '.$row['apelidos'].'</br><u> Mail :</u> '.$row['mail'].'</h4>';
				}*/
				
            ?>
                                    <p><br/></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="./tablas.php" class="small-box-footer">
                                    Máis información <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
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