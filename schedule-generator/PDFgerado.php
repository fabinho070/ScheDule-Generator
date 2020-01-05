<meta charset="utf-8"> 
<title> ScheDule Generator </title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/signin.css" rel="stylesheet">
<link href="bootstrap/css/CSSusuariologado.css" rel="stylesheet">
<link rel="shortcut icon" href="IMG/ICONEPAGINA.png" type="image/x-png"/>
<link href="css/animate.css" rel="stylesheet">
<script src="FUNCOES/js/jquery-1.10.2.min.js"></script>
<script src="FUNCOES/js/html2canvas.js"></script>	
<link rel='stylesheet' href='css/AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='css/AlertifyJS/css/themes/semantic.min.css' />
<script src='css/AlertifyJS/alertify.min.js'></script>

<?php 
session_start();

if($_SESSION['logado'] < 1){
?>
<style>
body{
  background-color:#000;
}	
</style>

<script>
alertify.alert('Você Não Pode Acessar Está Página.', function(){window.location.href='index.php'; } );
</script>
<?php
session_destroy();
}else{

$_SESSION["geradohorario"] = true;

include_once("funcao.php");

$conectando  = conectar();

$siglas_cursos    = mysqli_query($conectando, "SELECT curso_sigla FROM cursos");
$cursos_nome      = mysqli_query($conectando, "SELECT nome FROM cursos");
$professores_nome = mysqli_query($conectando, "SELECT nomehorario FROM professores");
$propostas        = mysqli_query($conectando, "SELECT * FROM propostas");
$turmas_nome      = mysqli_query($conectando, "SELECT nome FROM turmas");
$disciplinas_nome = mysqli_query($conectando, "SELECT nome FROM disciplinas");

$HORARIOTURMAS = mysqli_query($conectando, "SELECT horariosemana FROM horarios_turmas");
$NOMEHORARIOTURMAS = mysqli_query($conectando, "SELECT turma FROM horario_turmas");

$todosCursos = [];
$todosProfessores = [];
$todasDisciplinas = [];
$todasTurmas = [];
$todassiglas = [];

$semanamatutino = array(
    "segundamatutino" => "segunda",
    "tercamatutino" => "terca",
    "quartamatutino" => "quarta",
    "quintamatutino" => "quinta",
    "sextamatutino" => "sexta",
    "sabadomatutino" => "sabado"
);

while ($dadoscursos = mysqli_fetch_assoc($cursos_nome)) {
  foreach($dadoscursos as $mostrarcursos){
    array_push($todosCursos, $mostrarcursos); 
  }
}

while ($dadosprofessores = mysqli_fetch_assoc($professores_nome)) {
  foreach($dadosprofessores as $mostrarprofessores){
    array_push($todosProfessores, $mostrarprofessores); 
  }
}

while ($dadosdisciplinas = mysqli_fetch_assoc($disciplinas_nome)) {
  foreach($dadosdisciplinas as $mostrardisciplinas){
    array_push($todasDisciplinas, $mostrardisciplinas); 
  }
}

while ($dadosturmas = mysqli_fetch_assoc($turmas_nome)) {
  foreach($dadosturmas as $mostrarturmas){
    array_push($todasTurmas, $mostrarturmas); 
  }
}

while ($dadossiglas = mysqli_fetch_assoc($siglas_cursos)) {
  foreach($dadossiglas as $mostrarsiglas){
    array_push($todassiglas, $mostrarsiglas); 
  }
}

?>

<nav style="filter:alpha(opacity=50); opacity:0.8;" class="animated slideInDown navbar navbar-expand-lg navbar-dark bg-warning fixed-top content" id="menu_principal">

  <div class="container">
  <nav class="navbar fixed-top justify-content-around navbar-light bg-warning">
  <a class="navbar-brand direita" href="#">ScheDule Generator</a>
  <p style='text-align:center; color:white; margin-top:25px; margin-left:550px;'><b>Gerador De Horários</p>
  </div>
  </nav>
  </nav>
<br><br><br><br>
<div class="animated slideInDown">
<div style="">

<h1 class="bg-dark col-md-6" style=" margin-left:28%; text-align:center; color:white; border-radius:25px;"> MATUTINO </h1> <br><br>
<div class="">
<div id='gerarHTML'>
<table class="table" border="1">
<thead class='thead-dark'> 

<tr>
<th style="text-align:center;"></th>
<th style="text-align:center;"></th>
<th style="text-align:center;"> <?php echo "$todassiglas[4] $todasTurmas[0]"; ?> </th>
<th style="text-align:center;"> <?php echo "$todassiglas[0] $todasTurmas[5]"; ?> </th>
<tr>  
<td style="text-align:center;">01</td>
<td style="text-align:center;">Segunda</td>
<td style="text-align:center;"><?php echo $todasDisciplinas[0]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
</tr>

<tr>
<td style="text-align:center;">02</td>
<td style="text-align:center;">Terça</td>
<td style="text-align:center;"><?php echo $todasDisciplinas[1]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>

<tr>
<td style="text-align:center;">03</td>
<td style="text-align:center;">Quarta</td>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[6]; ?></td>
</tr>

<tr>
<td style="text-align:center;">04</td>
<td style="text-align:center;">Quinta</td>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[7]; ?></td>

</tr>

<tr>
<td style="text-align:center;">05</td>
<td style="text-align:center;">Sexta</td>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[8]; ?></td>
</tr>

<tr>
<td style="text-align:center;">06</td>
<td style="text-align:center;">Sabado</td>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>
</table>
</div>
</div>

<div class="">
<table class="table" border="1">
<thead class='thead-dark'>
<th style="text-align:center;"><?php echo "$todassiglas[4] $todasTurmas[2]"; ?> </th>
<th style="text-align:center;"><?php echo "$todassiglas[1] $todasTurmas[6]"; ?> </th>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[0]; ?>  </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[6]; ?></td>
</tr>

<tr>
<td style="text-align:center;"> <?php echo $todasDisciplinas[1]; ?></td>
<td style="text-align:center;"> <?php echo $todasDisciplinas[7]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[8]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>

</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>

<tr>
<td></td>
<td></td>
</tr>

</table>
</div>

<div class="">
<table class="table" border="1">
 <thead class='thead-dark'>
<tr>
<th style="text-align:center;"><?php echo "$todassiglas[3] $todasTurmas[3]"; ?> </th>
<th style="text-align:center;"><?php echo "$todassiglas[1] $todasTurmas[7]"; ?> </th>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[0]; ?>  </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[6]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[1]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[7]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[8]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>

<tr>
<td></td>
<td></td>
</tr>

</table>
</div>

<div class="">
<table class="table" border="1">
 <thead class='thead-dark'>
<tr>
<th style="text-align:center;"><?php echo "$todassiglas[2] $todasTurmas[4]"; ?> </th>
<th style="text-align:center;"><?php echo "$todassiglas[0] $todasTurmas[8]"; ?> </th>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[0]; ?>  </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[6]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[1]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[7]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[8]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>

</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>

<tr>
<td></td>
<td></td>
</tr>

</table>
</div>

<div class="">
<table class="table" border="1">
 <thead class='thead-dark'>
<tr>
<th style="text-align:center;"><?php echo "$todassiglas[0] $todasTurmas[5]"; ?> </th>
<th style="text-align:center;"><?php echo "$todassiglas[0] $todasTurmas[9]"; ?> </th>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[0]; ?>  </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[1]; ?> </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[6]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[7]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[8]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>

<tr>
<td></td>
<td></td>
</tr>

</table>
</div>
</div>

<br><br>

<h1 class="bg-dark col-md-6" style="margin-left:28%; text-align:center; color:white; border-radius:25px;"> VESPERTINO </h1> <br><br>

<div class="">
<table class="table" border="1">
<thead class='thead-dark'> 

<tr>
<th style="text-align:center;"></th>
<th style="text-align:center;"></th>
<th style="text-align:center;"> <?php echo "$todassiglas[4] $todasTurmas[0]"; ?> </th>
<th style="text-align:center;"> <?php echo "$todassiglas[0] $todasTurmas[5]"; ?> </th>
<tr>
<td style="text-align:center;">01</td>
<td style="text-align:center;">Segunda</td>
<td style="text-align:center;" ><?php echo $todasDisciplinas[0]; ?></td>
<td style="text-align:center;" ><?php echo $todasDisciplinas[4]; ?></td>
</tr>

<tr>
<td style="text-align:center;">02</td>
<td style="text-align:center;">Terça</td>
<td style="text-align:center;"><?php echo $todasDisciplinas[1]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>

<tr>
<td style="text-align:center;">03</td>
<td style="text-align:center;">Quarta</td>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[6]; ?></td>
</tr>

<tr>
<td style="text-align:center;">04</td>
<td style="text-align:center;">Quinta</td>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[7]; ?></td>
</tr>

<tr>
<td style="text-align:center;">05</td>
<td style="text-align:center;">Sexta</td>
<td style="text-align:center;" ><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;" ><?php echo $todasDisciplinas[8]; ?></td>
</tr>

<tr>
<td style="text-align:center;" >06</td>
<td style="text-align:center;" >Sabado</td>
<td style="text-align:center;" ><?php echo $todasDisciplinas[5]; ?></td>
<td style="text-align:center;" ><?php echo $todasDisciplinas[9]; ?></td>
</tr>

</thead>
</table>
</div>

<div class="">
<table class="table" border="1">
<thead class='thead-dark'>
<th style="text-align:center;"><?php echo "$todassiglas[4] $todasTurmas[2]"; ?> </th>
<th style="text-align:center;"><?php echo "$todassiglas[1] $todasTurmas[6]"; ?> </th>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[0]; ?>  </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[1]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[7]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[8]; ?></td>

</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>

<tr>
<td></td>
<td></td>
</tr>

</thead>
</table>
</div>

<div class="">
<table class="table" border="1">
 <thead class='thead-dark'>
<tr>
<th style="text-align:center;"><?php echo "$todassiglas[3] $todasTurmas[3]"; ?> </th>
<th style="text-align:center;"><?php echo "$todassiglas[1] $todasTurmas[7]"; ?> </th>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[0]; ?>  </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[1]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[6]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[7]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[8]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>

<tr>
<td></td>
<td></td>
</tr>

</thead>
</table>
</div>

<div class="">
<table class="table" border="1">
 <thead class='thead-dark'>
<tr>
<th style="text-align:center;"><?php echo "$todassiglas[2] $todasTurmas[4]"; ?> </th>
<th style="text-align:center;"><?php echo "$todassiglas[0] $todasTurmas[8]"; ?> </th>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[0]; ?>  </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[1]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[6]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[7]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[8]; ?></td>

</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>

<tr>
<td></td>
<td></td>
</tr>

</thead>
</table>
</div>

<div class="">
<table class="table" border="1">
 <thead class='thead-dark'>
<tr>
<th style="text-align:center;"><?php echo "$todassiglas[0] $todasTurmas[5]"; ?> </th>
<th style="text-align:center;"><?php echo "$todassiglas[0] $todasTurmas[9]"; ?> </th>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[0]; ?>  </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[1]; ?> </td>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[2]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[6]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[3]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[7]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[4]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[8]; ?></td>
</tr>

<tr>
<td style="text-align:center;"><?php echo $todasDisciplinas[5]; ?></td>
<td style="text-align:center;"><?php echo $todasDisciplinas[9]; ?></td>
</tr>

<tr>
<td></td>
<td></td>
</tr>

</thead>
</table>
</div>
</div>
</div>


<?php
$sql = "SELECT * FROM propostas";
$res = mysqli_query($conectando, $sql);
$propostas = mysqli_fetch_all($res, MYSQLI_ASSOC);

$turnos = Array(
    "segundaMatutino",
    "segundaVespertino",
    "segundaNoturno",
    "tercaMatutino",
    "tercaVespertino",
    "tercaNoturno",
    "quartaMatutino",
    "quartaVespertino",
    "quartaNoturno",
    "quintaMatutino",
    "quintaVespertino",
    "quintaNoturno",
    "sextaMatutino",
    "sextaVespertino",
    "sextaNoturno",
    "sabadoMatutino",
    "sabadoVespertino",
    "sabadoNoturno",
);

$horarios = Array();
foreach($turnos as $turno){
    $horarios[$turno] = Array();
}

$horarioFinal = $horarios;
$horarioRestantes = $horarios;

//Conta se há professores para todos os turnos

//Verifica se tem ao menos um professor para todos os horarios

// echo "Verificando se há professores... ";

$sucesso = true;
foreach ($turnos as $turno) {
    foreach ($propostas as $proposta) {
       if($proposta['dia_semana_turno'] == $turno){
           array_push($horarios[$turno], $proposta['nome_professor']);
       }
    }

    if(!count($horarios[$turno]) > 0){
         $sucesso = false;
    }
}

// if($sucesso){
//    echo "OK!";
// } else {
//     echo "FALHOU!";
// }

//Percorre o horario e joga os professores no horario final

$horarioRestantes = $horarios;
foreach ($horarioFinal as $chave => $horario) {
    shuffle($horarios[$chave]); // Sorteia os resultados
    $horarioFinal[$chave] = $horarios[$chave];

    //cria horario resultado
    array_shift($horarioRestantes[$chave]);
}


// echo "<h1>Possibilidades</h1>";
// foreach ($horarios as $chave => $horario) {
//     echo "<h3>".$chave."</h3>";
//     var_dump($horario);
// }

// echo "<h1>Horário Final</h1>";
// foreach ($horarioFinal as $chave => $horario) {
//     echo "<h3>".$chave."</h3>";
//     var_dump($horario);

// }

echo "<br><br>";

echo "<h1 class='bg-dark col-md-6' style='margin-left:28%; color:white; border-radius:25px; text-align:center;' > PROFESSORES </h1>";

echo "<br><br>";

foreach ($horarioFinal as $chave => $horario) {
  $teste = implode($horario);
  echo "
<div class='col-md-12' style='text-align:center; '>
<table class='table' border=1'>
<thead class='thead-dark'>
<th style='text-align:center;'>DIA DA SEMANA / TURNO
<th style='text-align:center;'> PROFESSOR 


<tr>
<td style='text-align:center;'>".$chave."</td>
<td style='text-align:center;'>".$teste."</td>
</tr>
</thead>
</table>
</div>
</div>
</div>
";
}
?>
</div>

<button style=" color:white; border-radius:25px; margin-left:43%" class="btn btn-warning btn-3d circulo" onclick="converterHTML()"><b>GERAR PDF<b></button><br><br>
<a style="width:200px;color:white; border-radius:25px; margin-left:40%" class="btn btn-primary btn-3d circulo" href="usuariologado.php"><b>VOLTAR AO INICÍO<b></a><br><br><br>

<script>
function converterHTML() {
  window.print();
}


$(document).ready(function()
		{
			$("#btnScreenshot").on('click', function(e)
			{
				html2canvas(document.body, {
					taintTest: true,
	  				onrendered: function(canvas) {
	  					$("#img1").attr('src', canvas.toDataURL());
	    				//document.body.appendChild(canvas);
	  				}			
	  			});
			});	
		});	

</script>


<?php } ?>