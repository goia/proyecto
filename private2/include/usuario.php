<div class="main_container">

            <?PHP include"./include/menuIzquierdo.php"?>
            <?PHP include"./include/menuTop.php"?>


            <!-- page content -->
            <div class="right_col" role="main">
<!--------------------------------------------------------------------------------------------------------------------------------------------WIDGETS------------------------------------------------------------------------------------------------------------------------------------------------------->

               

                <br/>

                <div class="row cBlack">


                   
<!--------------------------------------------------------------------------------------------------------------------------------------------WIDGETS------------------------------------------------------------------------------------------------------------------------------------------------------->
 
 <?php
		$sql = "select * FROM jugador";
         $result = $db->query($sql);
         while ($row = $db->fetch_array($result)){  
               
   ?>                    

                        <!-- form input mask -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Datos personales: </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left input_mask">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Nombre: </label>
                                            <input type="text" class=" disa form-control has-feedback-left" id="inputSuccess2" placeholder="<?php echo $row['nombre']?>" disabled="disabled">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Apellidos: </label>
                                            <input type="text" class="form-control disa" id="inputSuccess3" disabled="disabled" placeholder="<?php echo $row['apellidos']?>">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Login: </label>
                                            <input type="text" class=" disa form-control has-feedback-left" id="inputSuccess4" placeholder="<?php echo $row['login']?>" disabled="disabled" >
                                            <span class="fa fa-rebel form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Fecha nacimiento: </label>
                                            <input type="text" class=" disa form-control" id="inputSuccess5" placeholder="<?php echo $row['fechaNacimiento']?>" disabled="disabled">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Estatura: </label>
                                            <input type="text" class="disa form-control has-feedback-left" id="inputSuccess4" placeholder="<?php echo $row['estatura']?>" disabled="disabled">
                                            <span class="fa fa-arrows-v form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Categoria: </label>
                                            <input type="text" class=" disa form-control" id="inputSuccess5" placeholder="<?php echo $row['categoria']?>" disabled="disabled" >
                                            <span class="fa fa-empire form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Posicion: </label>
                                            <input type="text" class="disa form-control has-feedback-left" id="inputSuccess4" placeholder="<?php echo $row['posicion']?>" disabled="disabled">
                                            <span class="fa fa-arrows-v form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Ultima Conexion: </label>
                                            <input type="text" class=" disa form-control" id="inputSuccess5" placeholder="<?php echo $row['ultima_conexion']?>" disabled="disabled" >
                                            <span class="fa fa-empire form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                          <div class="clearfix"></div>
                                        <div class="ln_solid"></div>


                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /form input mask -->
                        
                        <!-- form color picker -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Grafico jugador/a: <u><?php echo $row['nombre']?></u></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                   <br/><br/>
                                    <canvas id="canvas_radar"></canvas>
                                    <br/><br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <!-- /form color picker -->



    <script>
        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100)
        };

        var radarChartData = {  
            labels: ["Ataque", "Velocidad", "Defensa", "Anticipación"],
            datasets: [
                {
                    label: "Tu",
                    fillColor: "rgba(3, 88, 106, 0.2)",
                    strokeColor: "rgba(225, 184, 70, 0.68)",
                    pointColor: "rgba(225, 184, 70, 0.68)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [<?php echo $row['ataque']?>, <?php echo $row['velocidad']?>, <?php echo $row['defensa']?>, <?php echo $row['anticipacion']?>]
            },
                /*Esta segunda seria para hacer comparacion de jugadores
                {
                    label: "Comparacion",
                    fillColor: "rgba(38, 185, 154, 0.2)",
                    strokeColor: "rgba(38, 185, 154, 0.85)",
                    pointColor: "rgba(38, 185, 154, 0.85)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [5, 6, 6, 4]
            }*/
        ]
        };
        
        $(document).ready(function () {
            window.myRadar = new Chart(document.getElementById("canvas_radar").getContext("2d")).Radar(radarChartData, {
                responsive: true,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });

    </script>
     
 <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                



                </div>


                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?PHP include'./include/tablaEstadisticas.php'?>
                    </div>

                </div>
<?PHP                
 }
?> 
                <!-- footer content -->
      <?PHP include"./include/footer.php"?>