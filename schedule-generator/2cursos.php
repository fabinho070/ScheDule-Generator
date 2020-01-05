<meta charset="utf-8">
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="css/CSSUsuariologado.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="css/AlertifyJS/css/alertify.min.css" />
<link rel="stylesheet" href="css/AlertifyJS/css/themes/semantic.min.css" />
<script src="css/AlertifyJS/alertify.min.js"></script>
<link rel="shortcut icon" href="IMG/ICONEPAGINA.png" type="image/x-png"/>

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
    <nav class="text-center fixed-top justify-content-around navbar-light bg-dark">
    <b>ScheDule Generator</b>
    </nav>
    </div>
    </nav>
    <br><br><h2>Cadastre aqui os cursos de sua instituição:</h2><br>
    <p style="color:#fff">Insira aqui o nome e o número de turmas de cada curso.</p>
    <p style="color:#fff">Por padrão o nosso sistema terá apenas 5 opções de cursos.</p><br>
          
    <form action="FUNCOES/2funcaocursos.php" method="POST" class="needs-validation">

    <div class="formcurso01">
    <div class="col-md-3 mb-3">
    <input class="inputscustomizados" id="curso1" name="nomecurso1" placeholder="Primeiro Curso" required><br><br>
    <!-- SIGLA DO CURSO -->
    <input class="inputscustomizados" name="sigla01" id="sigla01" placeholder="Sigla" required>
    </div>
    </div> 

    <div class="formcurso02">
    <input class="inputscustomizados" style="margin-left:13px;" id="curso1" name="nomecurso2" placeholder="Segundo Curso" required><br><br>
    <!-- SIGLA DO CURSO -->
    <input class="inputscustomizados" name="sigla02" id="sigla01" placeholder="Sigla" required>
    </div>
    </div>

    <br>

    <div class="formcurso03">
    <div class="col-md-3 mb-3">
    <input class="inputscustomizados" id="curso1" name="nomecurso3" placeholder="Terceiro Curso" required><br><br>
    <!-- SIGLA DO CURSO -->
    <input class="inputscustomizados" name="sigla03" id="sigla01" placeholder="Sigla" required>
    </div> 
    </div>
   
    <div class="formcurso04">
    <div class="col-md-3 mb-3">
    <input class="inputscustomizados" id="curso1" name="nomecurso4" placeholder="Quarto Curso" required><br><br>
    <!-- SIGLA DO CURSO -->
    <input class="inputscustomizados" name="sigla04" id="sigla01" placeholder="Sigla" required> 
    </div>
    </div>   
    
    <div class="formcurso05"><br>
    <div class="col-md-3 mb-3">
    <input class="inputscustomizados" id="curso1" name="nomecurso5" placeholder="Quinto Curso" required><br><br>
    <!-- SIGLA DO CURSO -->
    <input class="teste inputscustomizados" name="sigla05" id="sigla01" placeholder="Sigla" required>
    </div> 
    </div>
    </div>

    <br>

    <div style="margin-left:500px;" class="botoes-baixos">
    <a class="btn btn-primary btn-3d circulo" href="1turnos.php">Voltar</a>
    <button type="submit" class="btn btn-success btn-3d circulo">Próximo</button>
    </div>
    
    </form>

    </div>
</body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php } ?>