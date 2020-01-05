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

if($_SESSION['logado'] < 1){?>
     <script>
     alertify.alert('Você Não Pode Acessar Está Página.', function(){window.location.href='index.php'; } );
     </script>
     <?php
     session_destroy();
     }else{
?>

     <?php include_once("funcao.php");
     $conectando = conectar();
     $curso1 = mysqli_query($conectando, "SELECT nome FROM  cursos");
     $curso2 = mysqli_query($conectando, "SELECT nome FROM  cursos");
     $curso3 = mysqli_query($conectando, "SELECT nome FROM  cursos");
     $curso4 = mysqli_query($conectando, "SELECT nome FROM  cursos");
     $curso5 = mysqli_query($conectando, "SELECT nome FROM  cursos");
     $curso6 = mysqli_query($conectando, "SELECT nome FROM  cursos");
     $curso7 = mysqli_query($conectando, "SELECT nome FROM  cursos");
     $curso8 = mysqli_query($conectando, "SELECT nome FROM  cursos");
     $curso9 = mysqli_query($conectando, "SELECT nome FROM  cursos");
     $curso10 = mysqli_query($conectando, "SELECT nome FROM  cursos"); 
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

     <br><br><h2>Cadastre aqui as turmas relacionado os cursos de sua instituição:</h2><br>

     <form action="FUNCOES/4funcaoprofessor.php" method="POST">

     <table class="table">
     <thead class="thead-dark">
     <tr>
     <th scope="col">Turmas</th>
     <th scope="col"> Cursos <a style="margin-top:5px; margin-left:180px; height:20px;" class="btn" onclick="adicionarcampos()" ><b>ADD</a></th>
     </tr>
     </thead>
     <tbody id="disciplinaprofessor" class="table-light">

     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma1" id="turma1" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="primeirocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocursos1 = mysqli_fetch_assoc($curso1)) { ?>
     <?php foreach($dadocursos1 as $mostrarcursos1){ ?>
     <option class="btn-light" value="<?php echo $mostrarcursos1; ?>"> <?php echo $mostrarcursos1; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>
     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma2" id="turma2" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="segundocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocursos2 = mysqli_fetch_assoc($curso2)) { ?>
     <?php foreach($dadocursos2 as $mostrarcursos2){ ?>
     <option class="btn-light" value="<?php echo $mostrarcursos2;?>"> <?php echo $mostrarcursos2; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>

     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma3" id="turma3" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="terceirocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocurso3 = mysqli_fetch_assoc($curso3)) { ?>
     <?php foreach($dadocurso3 as $mostrarcursos3){ ?>
     <option class="btn-light" value="<?php echo $mostrarcursos3;?>"> <?php echo $mostrarcursos3; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>

     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma4" id="turma4" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="quartocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocursos4 = mysqli_fetch_assoc($curso4)) { ?>
     <?php foreach($dadocursos4 as $mostrarcursos4){ ?>
     <option class="btn-light" value=" <?php echo $mostrarcursos4; ?>" > <?php echo $mostrarcursos4; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>

     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma5" id="turma5" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="quintocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocursos5 = mysqli_fetch_assoc($curso5)) { ?>
     <?php foreach($dadocursos5 as $mostrarcursos5){ ?>
     <option class="btn-light" value=" <?php echo $mostrarcursos5; ?>" > <?php echo $mostrarcursos5; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>

     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma6" id="turma6" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="sextocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocursos6 = mysqli_fetch_assoc($curso6)) { ?>
     <?php foreach($dadocursos6 as $mostrarcursos6){ ?>
     <option class="btn-light" value=" <?php echo $mostrarcursos6; ?>" > <?php echo $mostrarcursos6; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>

     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma7" id="turma7" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="setimocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocursos7 = mysqli_fetch_assoc($curso7)) { ?>
     <?php foreach($dadocursos7 as $mostrarcursos7){ ?>
     <option class="btn-light" value=" <?php echo $mostrarcursos7; ?>" > <?php echo $mostrarcursos7; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>

     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma8" id="turma8" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="oitavocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocursos8 = mysqli_fetch_assoc($curso8)) { ?>
     <?php foreach($dadocursos8 as $mostrarcursos8){ ?>
     <option class="btn-light" value=" <?php echo $mostrarcursos8; ?>" > <?php echo $mostrarcursos8; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>

     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma9" id="turma9" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="nonocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocursos9 = mysqli_fetch_assoc($curso9)) { ?>
     <?php foreach($dadocursos9 as $mostrarcursos9){ ?>
     <option class="btn-light" value=" <?php echo $mostrarcursos9; ?>" > <?php echo $mostrarcursos9; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>

     <tr>
     <td> 
     <input style="border-radius:25px; width:180px;" type="text" class="form-control" name="turma10" id="turma10" required placeholder="Digite a turma aqui"><br>
     </td>

     <td> 
     
     <div> 
     <select name="decimocurso" style="height:40px; border-radius:15px;" class="btn-3d btn-dark">
     <?php while ($dadocursos10 = mysqli_fetch_assoc($curso10)) { ?>
     <?php foreach($dadocursos10 as $mostrarcursos10){ ?>
     <option class="btn-light" value=" <?php echo $mostrarcursos10; ?>" > <?php echo $mostrarcursos10; } ?> </option>
     <?php } ?>
     </select>
     </div>

     </td>


     </tr>
     
     </tbody>
     </table>

     <a class="btn btn-primary btn-3d circulo" href="3disciplinas.php">Voltar</a>
     <input type="hidden" name="acao" value="enviar"/>
     <button type="submit" style="color:white;" class="btn btn-success btn-3d circulo">Próximo</button>
     </form>

     </div>

     <script>     
     
     function adicionarcampos(){
         alertify.alert("Estamos trabalhando em atualizações, em breve teremos a função de ADICIONAR CAMPOS. Aguarde...");
     }
     </script>
     
</body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php } ?>
