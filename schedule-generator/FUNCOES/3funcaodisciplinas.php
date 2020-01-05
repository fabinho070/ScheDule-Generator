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
include_once("../funcao.php");
$conectando = conectar();

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

if(isset($_POST['acao']) && $_POST['acao'] == "enviar"){
    $campo = $_POST['campos'];

    $disciplina01 = $campo[0];
    $professor01 = $campo[1];
    $professorhorario01 = $campo[2];

    $disciplina02 = $campo[3];
    $professor02 = $campo[4];
    $professorhorario02 = $campo[5];

    $disciplina03 = $campo[6];
    $professor03 = $campo[7];
    $professorhorario03 = $campo[8];

    $disciplina04 = $campo[9];
    $professor04 = $campo[10];
    $professorhorario04 = $campo[11];

    $disciplina05 = $campo[12];
    $professor05 = $campo[13];
    $professorhorario05 = $campo[14];

    $disciplina06 = $campo[15];
    $professor06 = $campo[16];
    $professorhorario06 = $campo[17];

    $disciplina07 = $campo[18];
    $professor07 = $campo[19];
    $professorhorario07 = $campo[20];

    $disciplina08 = $campo[21];
    $professor08 = $campo[22];
    $professorhorario08 = $campo[23];

    $disciplina09 = $campo[24];
    $professor09 = $campo[25];
    $professorhorario09 = $campo[26];

    $disciplina10 = $campo[27];
    $professor10 = $campo[28];
    $professorhorario10 = $campo[29];

        $query1=  " INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina01','$dropdown1')";
        $query2 = " INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina02','$dropdown2')";
        $query3 = " INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina03','$dropdown3')";
        $query4 = " INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina04','$dropdown4')";
        $query5 = " INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina05','$dropdown5')";
        $query6 = " INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina06','$dropdown6')";
        $query7 = " INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina07','$dropdown7')";
        $query8 = " INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina08','$dropdown8')";
        $query9 = " INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina09','$dropdown9')";
        $query10 =" INSERT INTO disciplinas (nome, curso) VALUES ('$disciplina10','$dropdown10')";
        $query11 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor01', '$professorhorario01')";
        $query12 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor02', '$professorhorario02')";
        $query13 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor03', '$professorhorario03')";
        $query14 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor04', '$professorhorario04')";
        $query15 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor05', '$professorhorario05')";
        $query16 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor06', '$professorhorario06')";
        $query17 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor07', '$professorhorario07')";
        $query18 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor08', '$professorhorario08')";
        $query19 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor09', '$professorhorario09')";
        $query20 = "INSERT INTO professores (nome, nomehorario) VALUES ('$professor10', '$professorhorario10')";
        
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
        $insert11 = mysqli_query($conectando, $query11);
        $insert12 = mysqli_query($conectando, $query12);
        $insert13 = mysqli_query($conectando, $query13);
        $insert14 = mysqli_query($conectando, $query14);
        $insert15 = mysqli_query($conectando, $query15);
        $insert16 = mysqli_query($conectando, $query16);
        $insert17 = mysqli_query($conectando, $query17);
        $insert18 = mysqli_query($conectando, $query18);
        $insert19 = mysqli_query($conectando, $query19);
        $insert20 = mysqli_query($conectando, $query20);
        
        if($insert1){
            if($insert2){
                if($insert3){
                    if($insert4){
                        if($insert5){
                            if($insert6){
                                if($insert7){
                                    if($insert8){
                                        if($insert9){
                                            if($insert10){
                                                if($insert11){
                                                    if($insert12){
                                                        if($insert13){
                                                            if($insert14){
                                                                if($insert15){
                                                                    if($insert16){
                                                                        if($insert17){
                                                                            if($insert18){
                                                                                if($insert19){
                                                                                    if($insert20){
                                                                                        ?>

                                                                                        <script>
                                                                                        alertify.alert('Disciplinas Cadastradas Com Sucesso!', function(){window.location.href='../4professor.php'; } );
                                                                                        </script>

                                                                                        <?php
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
    }else{
        ?>
        <script>
        alertify.alert('Não Foi Possível Cadastrar As Disciplinas', function(){window.location.href='../3disciplinas.php'; } );
        </script>
        <?php 
    }
}
?>
</body>