<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sotano</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="Vistas/img/libro.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Vistas/dist/css/skins/_all-skins.min.css">
<!-- jQuery 3 -->
<script src="Vistas/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="Vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="Vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="Vistas/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script src="Vistas/dist/js/demo.js"></script>
<script src="Vistas/js/plantilla.js"></script>
<!-- DataTables -->
<link rel="stylesheet" href="Vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- DataTables -->
<script src="Vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="Vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="Vistas/plugins/sweetalert.css">
<script src="Vistas/plugins/sweetalert.min.js"></script>
  <!- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-collapse  sidebar-mini">
<!-- Site wrapper -->
  <div class="wrapper">
  </div>
<!-- ./wrapper edite aqui!! parapoderimportar y que encutre el modulo inicio-->

</body>
</html>
<?php
     include "modulos/cabecera.php";

     include "modulos/menu.php";

     #include "modulos/inicio.php";

if(isset($_GET["ruta"])){
     if($_GET["ruta"] == "usuarios" ||
     $_GET["ruta"] == "altaProd" ||
     $_GET["ruta"] == "Factura" ||
     $_GET["ruta"] == "password" ||
     $_GET["ruta"] == "consulta" ||
     $_GET["ruta"] == "RegistroCliente") {
          include "Modulos/".$_GET["ruta"].".php";

     }else{
          include "Modulos/404.php";
     }
} else{
     include "Modulos/inicio.php";
}



?>