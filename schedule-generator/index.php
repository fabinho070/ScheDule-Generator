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

<body class="animated slideInLeft">

        <br><br><br><br><br><br><br><br><br><br>    
        <form method="POST" class="animated slideInLeft login" action="VERIFICAR.php"><br>
        <h2>LOGIN</h2>
        <br>
        <input class="form-check-label labelredondo" id="user" name="user" required placeholder="Usuário">
        <br><br><br>
        <input type="password" class="form-check-label labelredondo" name="senha" required id="senha" placeholder="Senha">
        <br><br><br>	
        <button id="entrar" name="entrar" class="btn btn-primary btn-3d circulo">Confirmar identidade</button>			
        <br><br>
        <h4>Você ainda não possui uma conta?</h4>
        <a class="btn btn-success btn-3d circulo improvisando" href="cadastrar.php">Crie Aqui</a>
        </form>
        </div>
        </div>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top " id="menu_principal">
    <div class="container">
    <nav class="navbar fixed-top justify-content-around navbar-light bg-warning">
    <a class="navbar-brand direita" style="color:white;">ScheDule Generator</a>
    <a class="btn btn-light btn-3d circulo" href="quemsomosnos.php">Quem Somos Nós</a>
    </nav>
    </div>
    </nav>
    </div>

    </body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
