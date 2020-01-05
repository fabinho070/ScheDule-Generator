<meta charset="utf-8">
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="css/CSSUsuariologado.css" rel="stylesheet">
<link href="css/jquery3-4-1.js" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link rel="shortcut icon" href="IMG/ICONEPAGINA.png" type="image/x-png"/>
<link rel='stylesheet' href='css/AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='css/AlertifyJS/css/themes/semantic.min.css' />
<script src='css/AlertifyJS/alertify.min.js'></script>

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
     <?php include_once("funcao.php");
     $conectando = conectar();
     $professores = mysqli_query($conectando, "SELECT nome FROM  professores");
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

 <form action="FUNCOES/5funcaoproposta.php" method="POST">

 <br><br><h2>Insira as propostas dos horários dos professores já cadastrados</h2><br>
 <p style="color:white;"><b>ATENÇÃO!</b> Salve todos os professores com o botão <b>ADICIONAR OUTRO PROFESSOR</b>, e somente após salvar todos clique no botão <b>PRÓXIMO</b></p>

     <select name="professores" style="height:40px; width:635px; border-radius:15px;" class="btn-3d btn-light">
     <?php while ($dadosprofessores = mysqli_fetch_assoc($professores)) { ?>
     <?php foreach($dadosprofessores as $mostrarprofessores){ ?>
     <option class="btn-light" name="<?php echo $mostrarprofessores; ?>"> <?php echo $mostrarprofessores; } ?> </option>
     <?php } ?>
     </select>

<table class="table table-sm table-dark">
<thead>
<tr>
<th scope="col"></th>
<!-- <th scope="col">  <p><input type="checkbox" id="tudo" name="checkTodos" onclick="verificaStatus(this)"> Selecionar Todos</p> </th> -->
<th scope="col">Matutino</th>
<th scope="col">Vespertino</th>
<th scope="col">Noturno</th>
</tr>
</thead>
<tbody>
 
<tr>
<th scope="row">Segunda</th>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="matutino1"   value="1" class="custom-control-input" id="customControlValidation1" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation1"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="vespertino1" value="1" class="custom-control-input" id="customControlValidation2" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation2"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="noturno1"    value="1" class="custom-control-input" id="customControlValidation3" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation3"></label></div></td>
</tr>

<tr>
<th scope="row">Terça</th>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="matutino2"  value="2" class="custom-control-input" id="customControlValidation4" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation4"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="vespertino2" value="2" class="custom-control-input" id="customControlValidation5" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation5"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="noturno2"    value="2" class="custom-control-input" id="customControlValidation6" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation6"></label></div></td>
</tr>

<tr>
<th scope="row">Quarta</th>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="matutino3"  value="3" class="custom-control-input" id="customControlValidation7" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation7"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="vespertino3" value="3" class="custom-control-input" id="customControlValidation8" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation8"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="noturno3"    value="3" class="custom-control-input" id="customControlValidation9" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation9"></label></div></td>
</tr>

<tr>
<th scope="row">Quinta</th>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="matutino4"  value="4" class="custom-control-input" id="customControlValidation10" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation10"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="vespertino4" value="4" class="custom-control-input" id="customControlValidation11" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation11"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="noturno4"    value="4" class="custom-control-input" id="customControlValidation12" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation12"></label></div></td>
</tr>

<tr>
<th scope="row">Sexta</th>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="matutino5"  value="5" class="custom-control-input" id="customControlValidation13" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation13"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="vespertino5" value="5" class="custom-control-input" id="customControlValidation14" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation14"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="noturno5"    value="5" class="custom-control-input" id="customControlValidation15" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation15"></label></div></td>
</tr>

<tr>
<th scope="row">Sabado</th>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="matutino6"  value="6" class="custom-control-input" id="customControlValidation16" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation16"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="vespertino6" value="6" class="custom-control-input" id="customControlValidation17" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation17"></label></div></td>
<td> <div class="custom-control custom-checkbox mb-3"> <input type="checkbox" name="noturno6"    value="6" class="custom-control-input" id="customControlValidation18" > <label style="color:#FFF" class="custom-control-label" for="customControlValidation18"></label></div></td>
</tr>

</thead>

</table>

<input type="hidden" name="acao" value="enviar"/>
<button class="btn btn-light btn-3d circulo" style= "left:10px;" id="proximo" type="submit"><b>Salvar Outro Professor</b></button>
</div>
<a class="btn btn-primary btn-3d circulo" style= "left:25px;" href="4professor.php">Voltar</a>
<a class="btn btn-success btn-3d circulo" style= "left:25px;" href="6serie.php">Próximo</a>
</form>

<script>
// function verificaStatus(nome, numero, inicio){  
// 	if(nome.form.tudo.checked)
// 	{
// 		nome.form.tudo.checked = "";
// 		marcarTodos(nome, numero, inicio);
// 	}
// 	else
// 	{
// 	nome.form.tudo.checked = "checked";
// 	desmarcarTodos(nome, numero, inicio);
// 	}
// }
 
// function marcarTodos(nome, numero, inicio){
//   $fim = (nome.form.elements.length / 3) * numero;
//   for (i=inicio;i<$fim - 1;i++)
//   if(nome.form.elements[i].type == "checkbox")
//   nome.form.elements[i].checked=1
// }
 
// function desmarcarTodos(nome, numero){
// for (i=0;i<nome.form.elements.length;i++)
//   if(nome.form.elements[i].type == "checkbox")
// 	nome.form.elements[i].checked=0
// }
</script>

</div>
     
</body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php } ?>
