<!DOCTYPE html>
<html>
<?php 
    include "./include/head.php";
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
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <img src="./img/logo.png">
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./index.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
                        <li><a href="./tablas.php">Tablas</a></li>
                        <li class="active">Tabla Jugadores</li>
                    </ol>
                </section>
            <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <!-- jQuery 2.0.2 -->
        <script src="./js/jquery.js"></script>
        <!-- Bootstrap -->
        <script src="./js/bootstrap.js" type="text/javascript"></script>
 <!-- AdminLTE App -->
        <script src="./js/AdminLTE/app.js" type="text/javascript"></script>     
                
    <link rel="stylesheet" type="text/css" href="./datatables/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="./css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="./TableTools/css/dataTables.tableTools.css">
    <link rel="stylesheet" type="text/css" href="./TableTools/css/dataTables.tableTools.min.css">

    
    <script type="text/javascript" language="javascript" src="./datatables/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="./datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="./js/dataTables.responsive.js"></script>
    <script type="text/javascript" language="javascript" src="./TableTools/js/dataTables.tableTools.js"></script>
    <script type="text/javascript" language="javascript" src="./TableTools/js/dataTables.tableTools.min.js"></script>
        

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        
<script type="text/javascript" language="javascript">
 
    
$(document).ready(function() {
    
   $('#tablaEnlaces').dataTable({
       "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "./TableTools/swf/copy_csv_xls_pdf.swf"
        },
       "ajax": "./ajax/enlaces1.php",

       "sPaginationType": "full_numbers",

    	"oLanguage": {
      	"sEmptyTable": "No hay datos",//tabla vacia
	      "sInfo": "Mostrando  (_START_ - _END_) de _TOTAL_ registros",
        "sLengthMenu": 'Mostrar <select>'+
        '<option value="10">10</option>'+
        '<option value="20">20</option>'+
        '<option value="30">30</option>'+
        '<option value="40">40</option>'+
        '<option value="50">50</option>'+
        '<option value="-1">Todo</option>'+
        '</select> registros',
	      "sLoadingRecords": "Espere un momento, cargando...",
	      "sSearch": "Buscar:",
	      "sZeroRecords": "No hay datos con esa busqueda",
      	 "oPaginate": {
         "sFirst": "Primero",
	       "sLast": "Ultimo",
	       "sNext": "Siguiente",
	       "sPrevious": "Anterior",
      	}
    	},
       /* este es el ejemplo de domnde saque
       "aoColumnDefs": [            
     {
       "aTargets": [ 2 ], // Column to target
       "mRender": function ( data, type, full ) {
         // 'full' is the row's data object, and 'data' is this column's data
         // e.g. 'full[0]' is the comic id, and 'data' is the comic title
         return '<a href="/comics/' + full[0] + '">' + data + '</a>';
       }
     }
   ]
       */
       "aoColumnDefs": [      
     {
       "aTargets": [ 5 ], // Column to target
       "mRender": function ( data, type, full ) {
         // 'full' is the row's data object, and 'data' is this column's data
         // e.g. 'full[0]' is the comic id, and 'data' is the comic title
         //return '<a href="./usuario.php" target="/blank/" >' + data + '</a>';
           return '<a href="usuario2.php?apellidos='+full[2]+'"> modificar </a>';
       }
     }
   ]         
        });
    
       /* $('#tablaEnlaces tbody').on('click', 'tr', function () {
        var caracteristicas = $('td', this).eq(5).text();
        alert( 'caracteristicas '+ caracteristicas +'\'' );
    } );*/
    /*
    $('#tablaEnlaces tbody').on('click', 'tr', function () {
        var descripcion = $('td', this).eq(5).text();
        alert( 'Descripcion: '+ descripcion +'\'' );
    } );
    */
        $("#tablaEnlaces tfoot th").each( function ( i ) {
        var select = $('<select><option value=""></option></select>')
            .appendTo( $(this).empty() )
            .on( 'change', function () {
                table.column( i )
                    .search( $(this).val() )
                    .draw();
            } );
 
        table.column( i ).data().unique().sort().each( function ( d, j ) {
            select.append( '<option value="'+d+'">'+d+'</option>' )
        } );
    } );
    
    
    });
    
  
 </script>         
<!-------------------------------------------------------------------------------------------------------------------------> 
        
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Tabla Jugadores/as</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                   <table id="tablaEnlaces" class=" display table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Ultima Conexion</th>
                                                <th>Categoria</th>
                                                <th>Posicion</th>
                                                <th>ver</th>
                                            </tr>
                                        </thead>
                                      
                                        <tfoot>
                                            <tr>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


          
    </body>
</html>