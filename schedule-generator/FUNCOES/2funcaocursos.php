<meta charset="utf-8">
<link rel='stylesheet' href='AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='AlertifyJS/css/themes/semantic.min.css' />
<script src='AlertifyJS/alertify.min.js'></script>
<link href="../css/estilo.css" rel="stylesheet">
<link rel='shortcut icon' href='../IMG/ICONEPAGINA.png' type='image/x-png'/>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/signin.css" rel="stylesheet">

<body>
<style>
body{
	background-color:#000;
}	
</style>
<meta charset="utf-8">

<?php

@session_start();
include_once("../funcao.php");

    $nomecurso1 = $_POST['nomecurso1'];
    $nomecurso2 = $_POST['nomecurso2'];
    $nomecurso3 = $_POST['nomecurso3'];
    $nomecurso4 = $_POST['nomecurso4'];
    $nomecurso5 = $_POST['nomecurso5'];

    $sigla1 = $_POST['sigla01'];
    $sigla2 = $_POST['sigla02'];
    $sigla3 = $_POST['sigla03'];
    $sigla4 = $_POST['sigla04'];
    $sigla5 = $_POST['sigla05'];


    $conectando = conectar();
    
    $query1 = "INSERT INTO cursos (nome, curso_sigla ) VALUES ('$nomecurso1','$sigla1' )";
    $query2 = "INSERT INTO cursos (nome, curso_sigla ) VALUES ('$nomecurso2','$sigla2' )";
    $query3 = "INSERT INTO cursos (nome, curso_sigla ) VALUES ('$nomecurso3','$sigla3' )";
    $query4 = "INSERT INTO cursos (nome, curso_sigla ) VALUES ('$nomecurso4','$sigla4' )";
    $query5 = "INSERT INTO cursos (nome, curso_sigla ) VALUES ('$nomecurso5','$sigla5' )";

    $insert1 = mysqli_query($conectando, $query1);
    $insert2 = mysqli_query($conectando, $query2);
    $insert3 = mysqli_query($conectando, $query3);
    $insert4 = mysqli_query($conectando, $query4);
    $insert5 = mysqli_query($conectando, $query5);
    
    if($insert1){
     if($insert2){
      if($insert3){   
       if($insert4){ 
        if($insert5){
        }
    }
}
}
?>

<script>
alertify.alert('Cursos Cadastrados Com Sucesso!.', function(){window.location.href='../3disciplinas.php'; } );
</script>

<?php 
}else{

?>

<script>
alertify.alert('Não foi Possível Cadastrar Os Cursos!.', function(){window.location.href='../3disciplinas.php'; } );
</script> 

<?php
}
?>

</body>
</html>