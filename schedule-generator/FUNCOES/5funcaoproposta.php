<title> ScheDule Generator </title>

<style>
body{
	background-color:#000;
}	
</style>

<body>

<?php 

@session_start();
include_once("../funcao.php");
$conectando = conectar();

// array apra guardar todos os periodos
$todosPeriodos = [];

$professores = $_POST['professores'];

//segunda
$segundaMatutino = $_POST['matutino1'];
$segundaMatutino = ($segundaMatutino == "1") ? array_push($todosPeriodos, "segundaMatutino") : array_push($todosPeriodos, "null");
$segundaVespertino = $_POST['vespertino1'];
$segundaVespertino = ($segundaVespertino == "1") ? array_push($todosPeriodos, "segundaVespertino") : array_push($todosPeriodos, "null");
$segundaNoturno = $_POST['noturno1'];
$segundaNoturno = ($segundaNoturno == "1") ? array_push($todosPeriodos, "segundaNoturno") : array_push($todosPeriodos, "null");

//terça
$tercaMatutino = $_POST['matutino2'];
$tercaMatutino = ($tercaMatutino == "2") ? array_push($todosPeriodos, "tercaMatutino") : array_push($todosPeriodos, "null");
$tercaVespertino = $_POST['vespertino2'];
$tercaVespertino = ($tercaVespertino == "2") ? array_push($todosPeriodos, "tercaVespertino") : array_push($todosPeriodos, "null");
$tercaNoturno = $_POST['noturno2'];
$tercaNoturno = ($tercaNoturno == "2") ? array_push($todosPeriodos, "tercaNoturno") : array_push($todosPeriodos, "null");

//quarta
$quartaMatutino = $_POST['matutino3'];
$quartaMatutino = ($quartaMatutino == "3") ? array_push($todosPeriodos, "quartaMatutino") : array_push($todosPeriodos, "null");
$quartaVespertino = $_POST['vespertino3'];
$quartaVespertino = ($quartaVespertino == "3") ? array_push($todosPeriodos, "quartaVespertino") : array_push($todosPeriodos, "null");
$quartaNoturno = $_POST['noturno3'];
$quartaNoturno = ($quartaNoturno == "3") ? array_push($todosPeriodos, "quartaNoturno") : array_push($todosPeriodos, "null");


//quinta
$quintaMatutino = $_POST['matutino4'];
$quintaMatutino = ($quintaMatutino == "4") ? array_push($todosPeriodos, "quintaMatutino") : array_push($todosPeriodos, "null");
$quintaVespertino = $_POST['vespertino4'];
$quintaVespertino = ($quintaVespertino == "4") ? array_push($todosPeriodos, "quintaVespertino") : array_push($todosPeriodos, "null");
$quintaNoturno = $_POST['noturno4'];
$quintaNoturno = ($quintaNoturno == "4") ? array_push($todosPeriodos, "quintaNoturno") : array_push($todosPeriodos, "null");

//sexta
$sextaMatutino = $_POST['matutino5'];
$sextaMatutino = ($sextaMatutino == "5") ? array_push($todosPeriodos, "sextaMatutino") : array_push($todosPeriodos, "null");
$sextaVespertino = $_POST['vespertino5'];
$sextaVespertino = ($sextaVespertino == "5") ? array_push($todosPeriodos, "sextaVespertino") : array_push($todosPeriodos, "null");
$sextaNoturno = $_POST['noturno5'];
$sextaNoturno = ($sextaNoturno == "5") ? array_push($todosPeriodos, "sextaNoturno") : array_push($todosPeriodos, "null");

//sabado
$sabadoMatutino = $_POST['matutino6'];
$sabadoMatutino = ($sabadoMatutino == "6") ? array_push($todosPeriodos, "sabadoMatutino") : array_push($todosPeriodos, "null");
$sabadoVespertino = $_POST['vespertino6'];
$sabadoVespertino = ($sabadoVespertino == "6") ? array_push($todosPeriodos, "sabadoVespertino") : array_push($todosPeriodos, "null");
$sabadoNoturno = $_POST['noturno6'];
$sabadoNoturno = ($sabadoNoturno == "6") ? array_push($todosPeriodos, "sabadoNoturno") : array_push($todosPeriodos, "null");

//percorre todo o aray de periodos
foreach($todosPeriodos as $periodo) {

// verifica se cada posição é diferente de null
if($periodo <> 'null') {

// query para cadastrar
$query = "INSERT INTO propostas(dia_semana_turno, nome_professor) VALUES ('$periodo', '$professores')";

$insert = mysqli_query($conectando, $query);

}
}
echo "<script>alert('Propostas Cadastradas Com Sucesso!')</script>";
 header("Location: ../5propostahorario.php");

?>

</body>
</html>
