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
     
     <br><br><h2>Escolha o turno do horário:</h2><br>
     <form action="FUNCOES/1funcaoturnos.php" method="POST" class="col-md-12">
     <div class="custom-control checkbox custom-checkbox mb-3">
     <input type="checkbox" class="custom-control-input" name="select[]" value="matutino" id="customControlValidation1" onchange="verificar() ">
     <label style="color:#FFF" class="custom-control-label" for="customControlValidation1">MATUTINO</label>
     </div>
    
     <div class="custom-control checkbox custom-checkbox mb-3">
     <input type="checkbox" class="custom-control-input" name="select[]" value="vespertino" id="customControlValidation2"  onchange="verificar() ">
     <label style="color:#FFF" class="custom-control-label" for="customControlValidation2">VESPERTINO</label>
     </div>
    
     <div class="custom-control checkbox custom-checkbox mb-3">
     <input type="checkbox" class="custom-control-input" name="select[]" value="noturno" id="customControlValidation3"  onchange="verificar() ">
     <label style="color:#FFF" class="custom-control-label" for="customControlValidation3">NOTURNO</label>
     </div>

     <p  class="checkbox" style="color:#FFF">Exibindo 1 de 3 de um total de 3 registros.</p>
     <p  class="checkbox" style="color:#FFF">Atenção! Se a sua escola ou universidade possuir período integral, assinalar todos os campos de seu período.</p>
     <p style="color:white;"> <b> ATENÇÃO: Turno NOTURNO ainda não está pré programado, insira somente MATUTINO ou VESPERTINO. </b> </p>

     
     <a style="top:-15px" class="btn btn-primary btn-3d circulo" href="usuariologado.php">Voltar</a>
     <input type="hidden" name="acao" value="enviar"/>
     <button class="btn btn-success btn-3d circulo" style="margin-top:-10px; left:10px;" id="proximo" type="submit" disabled>Próximo</button>
     
     </form>

          <script language="Javascript">

          function verificar() {
               var check1 = document.getElementById('customControlValidation1');
               var check2 = document.getElementById('customControlValidation2');
               var check3 = document.getElementById('customControlValidation3');
               
               if((check1.checked == true) || (check2.checked == true) || (check3.checked == true)) {
               var button = document.getElementById('proximo').disabled = '';
               }else 
               if((check1.checked == false) || (check2.checked == false) || (check3.checked == false)) {
                  document.getElementById('proximo').disabled = ' ';
                    }
               }

          function verificarCheckBox() {
          var check1 = document.getElementById('customControlValidation1');
          var check2 = document.getElementById('customControlValidation2');
          var check3 = document.getElementById('customControlValidation3');
  
          if((check3.checked == false) && (check2.checked == false) && (check1.checked == false)) {
               alertify.alert("Você precisa selecionar pelo menos um campo.").set('label', 'OK');  
          }else{
               window.location.assign("FUNCOES/1funcaoturnos.php");
          }
     }
     </script>
        
     </div>
     
</body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>  

<?php } ?>