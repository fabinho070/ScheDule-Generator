<meta charset="utf-8">
<link rel='stylesheet' href='AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='AlertifyJS/css/themes/semantic.min.css' />
<script src='AlertifyJS/alertify.min.js'></script>
<link href="../css/CSSUsuariologado.css" rel="stylesheet">
<link rel='shortcut icon' href='../IMG/ICONEPAGINA.png' type='image/x-png'/>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/signin.css" rel="stylesheet">

<style>
body{
  background-color:#333;
}	
</style>

<title> ScheDule Generator </title> 

<body>

<?php
session_start();
include_once("../funcao.php");
$conectando = conectar();
$userid = $_COOKIE['userid'];
$senhavelha = $_POST["senhaantiga"];
$senhanova = $_POST["senhanova"];
$verificarsenha = "SELECT senha FROM usuarios WHERE id=".$userid;
$verificando = mysqli_query($conectando,$verificarsenha);

$dadosenha = mysqli_fetch_assoc($verificando);   

    if($senhavelha != $dadosenha['senha']){
        ?>
        <script>
        alertify.alert('Você Inseriu Uma Senha Errada', function(){window.location.href='../usuario.php'; } );
        </script>
        <?php
        }
        else if($senhavelha == $senhanova){
        ?>
        <script>
        alertify.alert('Você Deve Inserir Uma Senha Diferente', function(){window.location.href='../usuario.php'; } );
        </script>    
        <?php 
        }
        else{
        $modifica = "UPDATE usuarios SET senha ='$senhanova' WHERE id=".$userid;
        $insert = mysqli_query($conectando, $modifica);
        ?>
        <script>
        alertify.alert('Senha Alterada Com Sucesso', function(){window.location.href='../usuario.php'; } );
        </script>
        <?php
    }
?>

</body>