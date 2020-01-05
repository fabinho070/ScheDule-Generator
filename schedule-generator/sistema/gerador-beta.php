<?php

include_once("../funcao.php");

$conexao = conectar();

$sql = "SELECT * FROM propostas";
$res = mysqli_query($conexao, $sql);
$propostas = mysqli_fetch_all($res, MYSQLI_ASSOC);

//var_dump($propostas);

$turnos = Array(
    "segundamatutino",
    "segundavespertino",
    "tercamatutino",
    "tercavespertino",
    "quartamatutino",
    "quartavespertino",
    "quintamatutino",
    "quintavespertino",
    "sextamatutino",
    "sextavespertino",
);

$horarios = Array();
foreach($turnos as $turno){
    $horarios[$turno] = Array();
}

$horarioFinal = $horarios;
$horarioRestantes = $horarios;


//Conta se há professores para todos os turnos


//Verifica se tem ao menos um professor para todos os horarios
echo "Verificando se há professores... ";
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

if($sucesso){
   echo "OK!";
} else {
    echo "FALHOU!";
}

//Percorre o horario e joga os professores no horario final
$horarioRestantes = $horarios;
foreach ($horarioFinal as $chave => $horario) {
    shuffle($horarios[$chave]); // Sorteia os resultados
    $horarioFinal[$chave] = $horarios[$chave];

    //cria horario resultado
    array_shift($horarioRestantes[$chave]);
}


echo "<h1>Possibilidades</h1>";
foreach ($horarios as $chave => $horario) {
    echo "<h3>".$chave."</h3>";
    var_dump($horario);
}

echo "<h1>Horário Final</h1>";
foreach ($horarioFinal as $chave => $horario) {
    echo "<h3>".$chave."</h3>";
    var_dump($horario);
}

echo "<h1>Possibilidades restantes</h1>";
foreach ($horarioRestantes as $chave => $horario) {
    echo "<h3>".$chave."</h3>";
    var_dump($horario);
}


?>