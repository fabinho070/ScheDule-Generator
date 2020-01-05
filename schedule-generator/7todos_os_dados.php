<meta charset="utf-8">
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="css/CSSUsuariologado.css" rel="stylesheet">
<link rel="shortcut icon" href="IMG/ICONEPAGINA.png" type="image/x-png"/>
<link rel="stylesheet" href="css/AlertifyJS/css/alertify.min.css" />
<link rel="stylesheet" href="css/AlertifyJS/css/themes/semantic.min.css" />
<script src="css/AlertifyJS/alertify.min.js"></script>

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

<?php 
include_once("funcao.php");
$conectando  = conectar();
$professores = mysqli_query($conectando, "SELECT nomehorario FROM  professores");
$disciplinas = mysqli_query($conectando, "SELECT nome FROM  disciplinas");
$cursos      = mysqli_query($conectando, "SELECT nome FROM  cursos");
$turmas      = mysqli_query($conectando, "SELECT nome FROM  turmas");
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
     <nav class="text-center fixed-top justify-content-around navbar-light bg-dark texto">
     <b>ScheDule Generator</b>
     </nav>
     </div>
     </nav>

     <form method="POST">
     <br><br><h2>Confira Todos Seus Dados!</h2><br>
     <p style="color:white;"> <b> Confira todos os seus dados, após isso avance para a próxima tela. </b> </p>
     <a style="margin-top:5px; margin-left:0px; height:40px; border-radius:20px; color:black;" class="btn btn-3d btn-light" onclick="adicionarcampos()" ><b>Aperte Aqui!</a><br><br>

     <table class="table table-light">
     <thead class="thead-dark">

     <tr style="text-align:center;">
     <th scope="col">Cursos Cadastrados</th>
     <th scope="col">Professores Adicionados</th>
     <th scope="col">Disciplinas Cadastradas</th>
     <th scope="col">Turmas Adicionadas</th>
     </tr>
     
     <th>
     <?php while ($dadoscursos = mysqli_fetch_assoc($cursos)) { ?>
     <?php foreach($dadoscursos as $mostrarcursos){ ?>
     <ul> <p style="background:black; height:30px; width:130px; margin-top:50%; border-radius:20px; text-align:center;"> <?php echo $mostrarcursos; } ?> </p> </ul>
     <?php }?>
     </th>

     <th>
     <?php while ($dadosprofessores = mysqli_fetch_assoc($professores)) { ?>
     <?php foreach($dadosprofessores as $mostrarprofessores){ ?>
     <ul> <p style="background:black; height:30px; width:130px; border-radius:20px; text-align:center;"> <?php echo $mostrarprofessores; } ?> </p> </ul>
     <?php }?>
     </th>

     <th>
     <?php while ($dadosdisciplinas = mysqli_fetch_assoc($disciplinas)) { ?>
     <?php foreach($dadosdisciplinas as $mostrardisciplinas){ ?>
     <ul> <p style="background:black; height:30px; width:130px; border-radius:20px; text-align:center;"> <?php echo $mostrardisciplinas; } ?> </p> </ul>
     <?php }?>
     </th>

     <th>
     <?php while ($dadosturmas = mysqli_fetch_assoc($turmas)) { ?>
     <?php foreach($dadosturmas as $mostrarturmas){ ?>
     <ul> <p style="background:black; height:30px; width:130px; border-radius:20px; text-align:center;"> <?php echo $mostrarturmas; }  ?> </p> </ul>
     <?php }?>
     </th>
     
     </thead>
     <tbody id="mostrardados">
     </tbody>
     </table>
     
     <a class="btn btn-primary btn-3d circulo" href="6serie.php">Voltar</a>

     <input type="hidden" name="acao" value="enviar"/>
     <a class="btn btn-success btn-3d circulo" href="8gerar_horario.php">Próximo</a>
     </div>
     </form>

     <script>
     function adicionarcampos(){
         alertify.alert("Estamos trabalhando em atualizações, em breve teremos a função de ALTERAR OS CAMPOS JÁ REGISTRADOS. Aguarde...");
     }
     </script>
     
     </div>
     
</body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php } ?>
