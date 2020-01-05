<?php 
session_start();
if(isset($_SESSION["logado"])){
    header("location: usuariologado.php");
    die();
}
?>
<head>

<title>ScheDule Generador </title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="IMG/ICONEPAGINA.png" type="image/x-png"/>
<link href="css/estilo.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="css/AlertifyJS/css/alertify.min.css" />
<link rel="stylesheet" href="css/AlertifyJS/css/themes/semantic.min.css" />
<script src="css/AlertifyJS/alertify.min.js"></script>
<script src="bootstrap/js/jquery-3.3.1.min.js"></script>

<script>
function mostrarSenha(){
		var tipo = document.getElementById("senha");
		if(tipo.type == "password"){
		tipo.type = "text";
		}else{
		tipo.type = "password";
		}
		}
</script>

</head>
<body class="animated slideInRight">

        <br><br><br><br><br><br><br><br>        
       	<form method="POST" class="login2" action="CADASTRODEUSUARIO.php">
        <br>
        <h2>Cadastro De Usuário</h2>
        <br>
		<input class="form-check-label labelredondo" type="text" id="nome" name="nome" required placeholder="Insira seu nome"><br><br>
		
		<input class="form-check-label labelredondo" type="text" id="user" name="user" required placeholder="Insira seu usuario"><br><br>
            
        <input class="form-check-label labelredondo" type="text" id="email" name="email" required placeholder="Insira seu e-mail"><br><br>
			
		<input class="form-check-label labelredondo alinhando" type="password" id="senha" name="senha" required placeholder="Insira sua senha"><button style="border-radius:30px;" class="btn btn-3d senhabotao" type="button" onclick="mostrarSenha()"> <img src ="IMG/senha.png" width="20" height="20"> </button><br><br>
            
        <button class="btn btn-primary btn-3d circulo">Cadastrar</button><br><br>
			
        <a class="btn btn-success btn-3d circulo" href="index.php">Lembrou? Clique aqui para logar </a>
		
        </form>
            
        </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top " id="menu_principal">
    <div class="container">
    <nav class="navbar fixed-top justify-content-around navbar-light bg-warning">
    <a class="navbar-brand" href="#">ScheDule Generator</a>
    </nav>
    </div>
    </nav> 
    </body>

<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>