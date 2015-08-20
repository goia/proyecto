            <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
   
                
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
           <!-- page content -->
            
          

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Tabla <small>de jugadores/as</small></h3>
                        </div>

                    </div>
                    <div class="clearfix"></div>


                    <div class="row">

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
           return '<a href="usuario.php?apellidos='+full[2]+'"> modificar </a>';
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

                        <div class="clearfix"></div>

                       

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><code>Jugadores/as</code></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>

                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">


                                    <table id="tablaEnlaces" class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                <tr>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Ultima Conexion</th>
                                                <th>Categoria</th>
                                                <th>Posicion</th>
                                                <th>ver</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                            </tr>
                                        </tfoot>

                          

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

            <!-- /page content -->