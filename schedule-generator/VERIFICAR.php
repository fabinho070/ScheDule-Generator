<meta charset="utf-8">
<link rel='stylesheet' href='css/AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='css/AlertifyJS/css/themes/semantic.min.css' />
<script src='css/AlertifyJS/alertify.min.js'></script>
<link href="css/estilo.css" rel="stylesheet">
<link rel='shortcut icon' href='IMG/ICONEPAGINA.png' type='image/x-png'/>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/signin.css" rel="stylesheet">

<style>
body{
  background-color:#000;
}	
</style>

<title> ScheDule Generator </title> 

<body class="animated slideInLeft">

        <br><br><br><br><br><br><br><br><br><br>    
        <form method="POST" class="animated slideInLeft login" action="VERIFICAR.php"><br>
        <h2 style="color:white;">LOGIN</h2>
        <br>
        <input class="form-check-label labelredondo" id="user" name="user" required placeholder="Usuário">
        <br><br><br>
        <input type="password" class="form-check-label labelredondo" name="senha" required id="senha" placeholder="Senha">
        <br><br><br>	
        <button style=" color:white; border-radius:25px;" id="entrar" name="entrar" class="btn btn-primary btn-3d circulo">Confirmar identidade</button>			
        <br><br>
        <h4 style="color:white;">Você ainda não possui uma conta?</h4>
        <a style=" color:white; border-radius:25px;"  class="btn btn-success btn-3d circulo improvisando">Crie Aqui</a>
        </form>
        </div>
        </div>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top " id="menu_principal">
    <div class="container">
    <nav class="navbar fixed-top justify-content-around navbar-light bg-warning">
    <a class="navbar-brand direita" style="color:white;">ScheDule Generator</a>
    </nav>
    </div>
    </nav>
    </div>


<?php
session_start();
include_once("funcao.php");
  $usuariocolocado = $_POST['user'];
  $senhacolocada = $_POST['senha'];
  $conexao = conectar();

  $verificausuario = "SELECT * FROM usuarios WHERE usuario = '$usuariocolocado'";
  
  $verificasenha = "SELECT usuario FROM usuarios WHERE senha = '$senhacolocada'";

  $pesquisa1 = mysqli_query($conexao, $verificausuario);
  $pesquisa2 = mysqli_query($conexao, $verificausuario);

  $resultado1 = mysqli_fetch_assoc($pesquisa1);
  $usuario = $resultado1['usuario'];
  $userid = $resultado1['id'];

  
  $resultado2 = mysqli_fetch_assoc($pesquisa2);
  $senha = $resultado2['senha'];

  if($senhacolocada == $senha){
  $_SESSION['logado']= true;
  setcookie("login", $usuario);
  setcookie("userid", $userid);
  header("Location:usuariologado.php");
  }
  else{

?>
<script>
alertify.alert('Você não está logado no sistema.', function(){window.location.href='index.php'; } );
</script>
  
<?php } ?>

</body>
