<meta charset="utf-8">
<link rel='stylesheet' href='AlertifyJS/css/alertify.min.css' />
<link rel='stylesheet' href='AlertifyJS/css/themes/semantic.min.css' />
<script src='AlertifyJS/alertify.min.js'></script>
<link href="../css/estilo.css" rel="stylesheet">
<link rel='shortcut icon' href='../IMG/ICONEPAGINA.png' type='image/x-png'/>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/signin.css" rel="stylesheet">

<style>
body{
  background-color:#000;
}	
</style>

<title> ScheDule Generator </title> 

<?php
@session_start();
if(isset($_POST['acao']) && $_POST['acao'] == "enviar"){
$campo = $_POST['select'];
$matutino = $campo[0] ;
$vespertino = $campo[1];
$noturno = $campo[2];
?>        
<script>
alertify.alert('Turnos Cadastrados Com Sucesso!.', function(){window.location.href='../2cursos.php'; } );
</script>
<?php
}
?>