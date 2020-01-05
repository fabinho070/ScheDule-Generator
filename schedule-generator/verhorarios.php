<meta charset="utf-8">
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="IMG/ICONEPAGINA.png" type="image/x-png"/>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="css/CSSUsuariologado.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link rel='stylesheet' href='css/AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='css/AlertifyJS/css/themes/semantic.min.css' />
<script src='css/AlertifyJS/alertify.min.js'></script>

<title>ScheDule Generador</title>

<script src="bootstrap/js/jquery-3.3.1.min.js"></script>

</head>

<body>
<?php 
session_start();

if($_SESSION['logado'] < 1){
     ?>
     <script>
     alertify.alert('Você Não Pode Acessar Está Página.', function(){window.location.href='index.php'; } );
     </script>
     <?php
     session_destroy();
     }else{
?>

     <nav class="col-md-6 navbar float-left navbar-light bg-dark">
     <div class="vertical-menu"> 
     <div class="btn btn-group-toggle col-lg-12">
     
     <dl>
     <dd><a href="usuariologado.php" class="btn btn-light btn-3d btn-custom">
     <span class="text-light"></span> <img src ="IMG/house.png" width="31" height="31">
     <b>PRINCIPAL</b>
     </a></dd>
     <br><br>
     
     <dd><a href="usuario.php" class="btn btn-light btn-3d btn-custom">
     <span class="text-light"></span> <img src ="IMG/profile.jpeg" width="31" height="31">
    <b>USUÁRIO</b>
     </a></dd>
     <br><br>
     
     <dd><a href="dadoshorario.php" class="btn btn-light btn-3d btn-custom">
     <span class="text-light"></span> <img src ="IMG/dados.png" width="31" height="31">
     <b>DADOS DO HORARIO</b>
     </a></dd>
     <br><br>
          
     <dd><a href="relatorios.php" class="btn btn-light btn-3d btn-custom">
     <span class="text-light"></span> <img src ="IMG/relatorios.png" width="31" height="31">
     <b>RELATORIOS</b>
     </a></dd>
     <br><br>
     
     <dd><a href="sair.php" class="btn btn-danger btn-3d btn-custom">
     <span class="text-danger"></span> <img src ="IMG/sair.png" width="31" height="31">
     <b>SAIR</b>
     </a></dd>
     </dl>     
     </div>
     </div>
     </nav>
     
     <div class="container col-md-6">
     
     <nav class="navbar-expand-lg navbar-dark bg-warning fixed-top " id="menu_principal">
     <div class="container">
     <nav class="text-center fixed-top justify-content-around navbar-light bg-dark">
     <b>ScheDule Generator</b>
     </nav>
     </div>
     </nav>
     
     <?php if(isset($_SESSION["geradohorario"])){
       echo "<h2 class='animated rubberBand'><br><br><br><br>Clicando <a href='PDFgerado.php'>AQUI</a> você poderá vizualizar o seu horário gerado.</h2>";
       }
     else{
     echo "<h2 class='animated rubberBand'><br><br><br><br>Você ainda não possui horários cadastrados, clique <a href='1turnos.php'>AQUI</a> para você criar um horário.</h2>";
     }
?>

     </div>
     
</body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php } ?>
