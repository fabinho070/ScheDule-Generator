<meta charset="utf-8">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link rel="shortcut icon" href="IMG/ICONEPAGINA.png" type="image/x-png"/>
<link href="css/CSSUsuariologado.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link rel='stylesheet' href='css/AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='css/AlertifyJS/css/themes/semantic.min.css' />
<script src='css/AlertifyJS/alertify.min.js'></script>
<script src="bootstrap/js/jquery-3.3.1.min.js"></script>

<title>ScheDule Generador</title>

<script>
function mostrarSenhaVelha(){
		var tipo = document.getElementById("senhavelha");
		if(tipo.type == "password") {
		tipo.type = "text";
		}else{
		tipo.type = "password";
		}
		}
function mostrarSenhaNova(){
		var tipo = document.getElementById("senhanova");
		if(tipo.type == "password") {
		tipo.type = "text";
		}else{
		tipo.type = "password";
		}
		}
</script>

<body>

<script>
function mostrarSenhaVelha(){
		var tipo = document.getElementById("senhavelha");
		if(tipo.type == "password") {
		tipo.type = "text";
		}else{
		tipo.type = "password";
		}
		}
function mostrarSenhaNova(){
		var tipo = document.getElementById("senhanova");
		if(tipo.type == "password") {
		tipo.type = "text";
		}else{
		tipo.type = "password";
		}
		}
</script>

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
	include_once('funcao.php');
      $conectando = conectar();
      $userid = $_COOKIE['userid'];
      $teste = "SELECT * FROM usuarios WHERE id = ".$userid;  
      $pesq = mysqli_query($conectando,$teste);
      $resultado = mysqli_fetch_assoc($pesq);
      $nome = $resultado['nome'];
      $usuario = $resultado['usuario'];
      $email = $resultado['email'];

      if(mysqli_num_rows($pesq) < 1){
          die();
     }
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
     
     <div style="text-align:center;" class="container col-md-6">
     
     <nav class="navbar-expand-lg navbar-dark bg-warning fixed-top " id="menu_principal">
     <div class="container">
     <nav class="text-center fixed-top justify-content-around navbar-light bg-dark">
     <b>ScheDule Generator</b>
     </nav>
     </div>
     </nav>
     <br><br><br>
     <h2 class="animated pulse">Seja bem vindo(a) <?php echo $nome; ?> obrigado por nos acessar</h2>
     <h2 class="animated pulse">Seu usuario é <?php echo $usuario; ?> </h2>
     <h2 class="animated pulse">Seu Email é <?php echo $email?> </h2> <br><br>

     <h2 style="color:white;" class="animated pulse"> Deseja Alterar sua senha? </h2> <br>

     <form method="POST" action="FUNCOES/funcaoALTERARSENHA.php">
     <input  type="password" class="animated pulse" style="text-align:center; border-radius:10px;" id="senhavelha" required name="senhaantiga" placeholder="Insira sua senha antiga"> <button style="border-radius:30px;" class="animated pulse btn btn-3d senhabotao" type="button" onclick="mostrarSenhaVelha()"> <img src ="IMG/senha.png" width="20" height="20"> </button> <br><br>
     <input  type="password" class="animated pulse" style="text-align:center; border-radius:10px;" id="senhanova"  required name="senhanova" placeholder="Insira sua nova senha"> <button style="border-radius:30px;" class="animated pulse btn btn-3d senhabotao" type="button" onclick="mostrarSenhaNova()"> <img src ="IMG/senha.png" width="20" height="20"> </button> <br><br>
     <Button class="animated pulse btn btn-3d bg-light circulo" type="submit"> <b> ALTERAR SENHA </b> </Button>
     </form> 

     
     </div>
          
</body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php } ?>
