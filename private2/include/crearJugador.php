<div class="main_container">

            <?PHP include"./include/menuIzquierdo.php"?>
            <?PHP include"./include/menuTop.php"?>


            <!-- page content -->
            <div class="right_col" role="main">
<!--------------------------------------------------------------------------------------------------------------------------------------------WIDGETS------------------------------------------------------------------------------------------------------------------------------------------------------->

               

                <br/>

                <div class="row">


                   
<!--------------------------------------------------------------------------------------------------------------------------------------------WIDGETS------------------------------------------------------------------------------------------------------------------------------------------------------->
 
 <?php
		$sql = "select * FROM jugador";
         $result = $db->query($sql);
         while ($row = $db->fetch_array($result)){  
               
   ?>                    

                        
     
 <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                                    <form class="form-horizontal form-label-left input_mask" action="./ajax/guardarJugador.php">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Nombre: </label>
                                            <input type="text" class="disa form-control has-feedback-left" id="nombre" name="nombre">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Apellidos: </label>
                                            <input type="text" class="disa form-control has-feedback-left" id="apellidos" name="apellidos">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Login: </label>
                                            <input type="text" class="disa form-control has-feedback-left" id="usuario" name="usuario">
                                            <span class="fa fa-rebel form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Fecha nacimiento: </label>
                                            <input type="text" class="date-picker disa form-control" id="fecha" name="fecha">
                                            
                                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <label >Estatura:</label>
                                                <select class="form-control" id="categoria" name="estatura" id="estatura" onChange="cambiaReferencia(this.value)">
                                                    <option value="0">--- Seleccione Una ---</option>
                                            <?php
                                            for ($i=0; $i<=9.9; $i++)
                                            {
 
                                                
                                                ?>
                                                    <option value="<?php echo $i;?>"><?php echo $i;?>&nbsp;metros</option>
                                                    
                                                <?php
                                            }
                                        ?>
                                                </select>
                                            </div>


                                           
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <label >Categoria:</label>
                                                <select class="form-control" id="categoria" name="categoria" onChange="cambiaReferencia(this.value)">
                                                    <option value="0">--- Seleccione Una ---</option>
                                                    <?php
                                                    $sql = "select * FROM categoria WHERE 1=1  ";
                                                    $result = $db->query($sql);			

                                                    while(($row = $db->fetch_array($result))){
                                                        echo "<option value='". $row['nombre'] ."'>". $row['nombre'] ."</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                                                                   
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <label >Posicion:</label>
                                                <select class="form-control" id="categoria" name="categoria" onChange="cambiaReferencia(this.value)">
                                                    <option value="0">--- Seleccione Una ---</option>
                                                    <?php
                                                    $sql = "select * FROM posiciones WHERE 1=1  ";
                                                    $result = $db->query($sql);			

                                                    while(($row = $db->fetch_array($result))){
                                                        echo "<option value='". $row['nombre'] ."'>". $row['nombre'] ."</option>";
                                                        }
                                                    ?>
                                                </select>
                                    </div>                                    
                                         
                                          <div class="clearfix"></div>
                                        <div class="ln_solid"></div>
                                         <div class="x_title">
                                    <h2>Datos de juego: </h2>
                                   
                                    <div class="clearfix"></div>
                                </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Ataque: </label>
                                            <input type="text" class="disa form-control has-feedback-left" id="ataque" name="ataque" >
                                            <span class="fa fa-arrows-v form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Defensa: </label>
                                            <input type="text" class=" disa form-control" id="defensa" name="defensa"  >
                                            <span class="fa fa-empire form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Velocidad: </label>
                                            <input type="text" class="disa form-control has-feedback-left" id="velocidad" name="velocidad" >
                                            <span class="fa fa-arrows-v form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                           <label>Anticipacion: </label>
                                            <input type="text" class=" disa form-control" id="anticipacion" name="anticipacion"  >
                                            <span class="fa fa-empire form-control-feedback left" aria-hidden="true"></span>
                                        </div>
<div class="clearfix"></div><div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Crear Jugador</button>
                                            </div>
                                        </div>
                                    </form>
                                    <script type="text/javascript">
$(document).ready(function () {                                    
$('#fecha').daterangepicker({
    "singleDatePicker": true,
    "showDropdowns": true,
    "locale": {
        "format": "MM/DD/YYYY",
        "separator": " - ",
        "applyLabel": "Apply",
        "cancelLabel": "Cancel",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        "daysOfWeek": [
            "Lu",
            "Ma",
            "Mi",
            "Ju",
            "Vi",
            "Sa",
            "Do"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ],
        "firstDay": 1
    },
    "startDate": "08/11/2015",
    "endDate": "08/17/2015",
    "opens": "center"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-DD-MM') + ' to ' + end.format('YYYY-DD-MM') + ' (predefined range: ' + label + ')");
    
});
     });
              /*                          
                        $(document).ready(function () {
                            $('#fecha').daterangepicker({
                                singleDatePicker: true,
                                showDropdowns: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });*/
                    </script>
                                </div>
                            </div>
                    </div>

                </div>
                
               
<?PHP                
 }
?> 
                <!-- footer content -->
      <?PHP include"./include/footer.php"?>