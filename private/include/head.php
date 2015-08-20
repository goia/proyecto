 <?PHP
       session_start();
    require "common.php";
    if( $_SESSION['ses_nome'] != "admin"){
        header ("Location: ../login.php?errorusuario=ERRPPPRRRROR");
    }
?>
        <head>
        <meta charset="UTF-8">
        <title>Programa Executiva</title>
     
     
     <meta name="description" content=" add description  ... ">
    <meta name="lang" content="es" /> 
    <meta name="author" content="amodosoluciones" /> 
    <meta name="locality" content="Galicia" /> 
    <meta name="keywords" content="programa, executiva" /> 
    <meta name="description" content="Programa executiva" />
    
    <!-- /// Favicons ////////  -->
    <link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<meta name="msapplication-TileColor" content="#24bee8">
	<meta name="msapplication-TileImage" content="mstile.png">
	<meta name="theme-color" content="#24bee8">
     
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="./css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="./css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="./css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="./css/style.css" rel="stylesheet" type="text/css" />
<!-- DATA TABLES -->
        <link href="./css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>


