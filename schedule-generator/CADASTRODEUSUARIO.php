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

        <br><br><br><br><br><br><br><br>        
       	<form method="POST" class="login2" action="CADASTRODEUSUARIO.php">
        <br>
        <h2 style="color:white;">Cadastro De Usuário</h2>
        <br>
		    <input class="form-check-label labelredondo" type="text" id="nome" name="nome" required placeholder="Insira seu nome"><br><br>
		
		    <input class="form-check-label labelredondo" type="text" id="user" name="user" required placeholder="Insira seu usuario"><br><br>
            
        <input class="form-check-label labelredondo" type="text" id="email" name="email" required placeholder="Insira seu e-mail"><br><br>
			
    		<input class="form-check-label labelredondo alinhando" type="password" id="senha" name="senha" required placeholder="Insira sua senha"><button style="border-radius:30px;" class="btn btn-3d senhabotao" type="button" onclick="mostrarSenha()"> <img src ="IMG/senha.png" width="20" height="20"> </button><br><br>
            
        <button style="border-radius:25px;" class="btn btn-primary btn-3d circulo">Cadastrar</button><br><br>
			
        <a style="border-radius:25px;" class="btn btn-success btn-3d circulo" href="index.php">Lembrou? Clique aqui para logar </a>
		
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


<?php
@session_start();
include_once("funcao.php");
$nome = $_POST['nome'];
$usuario = $_POST['user'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conectando = conectar();
$verificaremail = "SELECT email FROM usuarios";
$verificarusuario = "SELECT usuario FROM usuarios";

if($usuario == "" || $usuario == null){
  ?>   
  <script>
  alertify.alert('Todos Os Campos Devem Ser Preenchidos!', function(){window.location.href='index.php'; } );
  </script>

  <?php
}
else if($verificaremail == $email){

  ?>
          
  <script>
  alertify.alert('Email Já Existente!', function(){window.location.href='index.php'; } );
  </script>

  <?php
}
else if($verificarusuario == $usuario){

  ?>
          
  <script>
  alertify.alert('Insira Um Usuário Diferente!', function(){window.location.href='index.php'; } );
  </script>

  <?php
}else{
      $query = "INSERT INTO usuarios (nome, usuario, email, senha) VALUES ('$nome' , '$usuario', '$email', '$senha')";
      $insert = mysqli_query($conectando, $query);

      if($insert){
          
      ?>
          
      <script>
      alertify.alert('Usuário Cadastrado Com Sucesso.', function(){window.location.href='index.php'; } );
      </script>

      <?php
      }else{

      ?>

      <script>
      alertify.alert('Não Foi Possível Cadastrar Este Usuário.', function(){window.location.href='cadastrar.php'; } );
      </script>

<?php
}
}
?>