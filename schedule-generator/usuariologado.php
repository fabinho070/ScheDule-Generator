<meta charset="utf-8">
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link rel="shortcut icon" href="IMG/ICONEPAGINA.png" type="image/x-png"/>
<link href="css/CSSUsuariologado.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link rel='stylesheet' href='css/AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='css/AlertifyJS/css/themes/semantic.min.css' />
<script src='css/AlertifyJS/alertify.min.js'></script>

<title>ScheDule Generador</title>

<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
</head>
<body class="animated bounceInDown">

<?php 
session_start();
if(!isset($_SESSION['logado'])){
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
     <dd><a href="usuariologado.php" class="btn arrumando btn-light btn-3d btn-custom animated bounce">
     <span class="text-light"></span> <img src ="IMG/house.png" width="31" height="31">
     <b>PRINCIPAL</b>
     </a></dd>
     <br><br>
     
     <dd><a href="usuario.php" class="btn arrumando btn-light btn-3d btn-custom animated bounce">
     <span class="text-light"></span> <img src ="IMG/profile.jpeg" width="31" height="31">
    <b>USUÁRIO</b>
     </a></dd>
     <br><br>
     
     <dd><a href="dadoshorario.php" class="btn arrumando btn-light btn-3d btn-custom animated bounce">
     <span class="text-light"></span> <img src ="IMG/dados.png" width="31" height="31">
     <b>DADOS DO HORARIO</b>
     </a></dd>
     <br><br>
          
     <dd><a href="relatorios.php" class="btn arrumando btn-light btn-3d btn-custom animated bounce">
     <span class="text-light"></span> <img src ="IMG/relatorios.png" width="31" height="31">
     <b>RELATORIOS</b>
     </a></dd>
     <br><br>
     
     <dd><a href="sair.php" class="btn arrumando btn-danger btn-3d btn-custom animated bounce">
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
     <nav class="text-center fontegrande fixed-top bg-dark">
     <b>ScheDule Generator</b>
     </nav>
     </div>
     </nav>
     
     <br><br><h1>Sejam bem vindos ao nosso sistema.</h1><br>
     <div class="alert alert-dark alerta" role="alert"></div><br>
     <h2>Escolha uma das opções abaixo para gerar o seu horário.</h2><br>
    
     <a href="1turnos.php" class="btn botao btn-lg btn-primary btn-3d botao-grande fonte-grande"> Criar um novo horario <br><br><br> <img class="novohorario" src ="IMG/relogio2.png"> </a>
     
     <a href="verhorarios.php" class="btn botao botaodireito btn-lg btn-success btn-3d botao-grande fonte-grande"> Ver horários cadastrados <br><br><br> <img class="verhorario" src ="IMG/relogio.png"></a>
     
     </div>
     
</body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
<?php } ?>