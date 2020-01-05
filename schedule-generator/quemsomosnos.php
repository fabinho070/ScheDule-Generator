<?php 
session_start();
if(isset($_SESSION["logado"])){
    header("location: usuariologado.php");
    die();
}
?>
<head>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/signin.css" rel="stylesheet">
<link rel="shortcut icon" href="IMG/ICONEPAGINA.png" type="image/x-png"/>
<link href="css/estilo.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<meta charset="utf-8">

<title>ScheDule Generador </title>
</head>
<body class=" animated fadeInUpBig">

        <br><br><br><br><br><br><br><br><br><br>        
                
        <div align="center" class="container SITETOTAL">
         <form method="POST" class="quemsomosnos" action="VERIFICAR.php"><br>
        <h2 style="color:#ffc107">O QUE É SCHEDULE GENERATOR?</h2>
        <br>
        <div class="container">
        <p style="text-align:left; color:#FFF; font-size:24px;">Schedule Generator é um site que tem a função de gerar horários escolares. Em seu layout, é existente as várias animações, desde seu login até sua ultima tela, tendo como deixar a sua navegação mais agradável. <br> ScheDule Generator veio com a função de ajudar as várias pessoas que ainda criam horários de forma manual, a criarem seus horários de uma maneira mais rápida.<br> Seus dados tem problemas e está sem tempo pra pensar? Utilize ScheDule Generator e a sua vida vai melhorar.</p><br><br>
        </div>
        <a style="margin-top:-60px;" class="btn btn-success btn-3d circulo" href="index.php">Voltar</a>
        </div>
        </form>
      
        </div>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top " id="menu_principal">
    <div class="container">
    <nav class="navbar fixed-top justify-content-around navbar-light bg-warning">
    <a class="navbar-brand direita" href="index.php">ScheDule Generator</a>
    </nav>
    </div>
    </nav>
    </div>
    </body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>