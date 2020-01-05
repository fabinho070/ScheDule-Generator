<meta charset="utf-8">
<link rel='stylesheet' href='AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='AlertifyJS/css/themes/semantic.min.css' />
<script src='AlertifyJS/alertify.min.js'></script>
<link href="../css/estilo.css" rel="stylesheet">
<link rel='shortcut icon' href='../IMG/ICONEPAGINA.png' type='image/x-png'/>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/signin.css" rel="stylesheet">

<title> ScheDule Generator </title>

<style>
body{
	background-color:#000;
}	
</style>

<body>

<?php
@session_start();
include_once('../funcao.php');
$conectando = conectar();

$turma1 = $_POST['turma1'];
$turma2 = $_POST['turma2'];
$turma3 = $_POST['turma3'];
$turma4 = $_POST['turma4'];
$turma5 = $_POST['turma5'];
$turma6 = $_POST['turma6'];
$turma7 = $_POST['turma7']; 
$turma8 = $_POST['turma8'];
$turma9 = $_POST['turma9'];
$turma10 = $_POST['turma10'];

$dropdown1 = $_POST['primeirocurso'];
$dropdown2 = $_POST['segundocurso'];
$dropdown3 = $_POST['terceirocurso'];
$dropdown4 = $_POST['quartocurso'];
$dropdown5 = $_POST['quintocurso'];
$dropdown6 = $_POST['sextocurso'];
$dropdown7 = $_POST['setimocurso'];
$dropdown8 = $_POST['oitavocurso'];
$dropdown9 = $_POST['nonocurso'];
$dropdown10 = $_POST['decimocurso'];

    $query1  = "INSERT INTO turmas (nome, curso) VALUES ('$turma1', '$dropdown1')";
    $query2  = "INSERT INTO turmas (nome, curso) VALUES ('$turma2', '$dropdown2')";
    $query3  = "INSERT INTO turmas (nome, curso) VALUES ('$turma3', '$dropdown3')";
    $query4  = "INSERT INTO turmas (nome, curso) VALUES ('$turma4', '$dropdown4')";
    $query5  = "INSERT INTO turmas (nome, curso) VALUES ('$turma5', '$dropdown5')";
    $query6  = "INSERT INTO turmas (nome, curso) VALUES ('$turma6', '$dropdown6')";
    $query7  = "INSERT INTO turmas (nome, curso) VALUES ('$turma7', '$dropdown7')";
    $query8  = "INSERT INTO turmas (nome, curso) VALUES ('$turma8', '$dropdown8')";
    $query9  = "INSERT INTO turmas (nome, curso) VALUES ('$turma9', '$dropdown9')";
    $query10  = "INSERT INTO turmas (nome, curso) VALUES ('$turma10', '$dropdown10')";

    $insert1 = mysqli_query($conectando, $query1);
    $insert2 = mysqli_query($conectando, $query2);
    $insert3 = mysqli_query($conectando, $query3);
    $insert4 = mysqli_query($conectando, $query4);
    $insert5 = mysqli_query($conectando, $query5);
    $insert6 = mysqli_query($conectando, $query6);
    $insert7 = mysqli_query($conectando, $query7);
    $insert8 = mysqli_query($conectando, $query8);
    $insert9 = mysqli_query($conectando, $query9);
    $insert10 = mysqli_query($conectando, $query10);
    
    if($insert1){
     if($insert2){
      if($insert3){   
       if($insert4){ 
        if($insert5){
         if($insert1){
          if($insert2){
           if($insert3){   
            if($insert4){ 
             if($insert5){
}
}
}
}
}
}
}
}
}
?>

<script>
alertify.alert('Turmas Cadastradas Com Sucesso!', function(){window.location.href='../5propostahorario.php'; } );
</script>

<?php
}else{

?>
<script>
alertify.alert('Não Foi Possível Cadastrar As turmas!', function(){window.location.href='../4professor.php'; } );
</script>

<?php 
}
?>
</body>