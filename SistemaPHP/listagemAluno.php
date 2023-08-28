<?php include ('./model/conect.php');?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Listagem de Alunos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5956/5956912.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
<link rel="stylesheet" href="css/style.css">
</head>

<header>
<?php 
include('./menus/menu_admin.php');
?>
</header>

<body>
<!-- ALUNOS -->
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
<div id="section1" class="container-fluid" style="padding:100px 20px;">
<div class="container">
  
<?php include ('./component/section1.php');?>
 
</div>
</div>  

  <div id="section2" class="container-fluid" style="padding:100px 5px;">
  <div class="container">

  <?php include ('./component/section2.php');?>
 
</div>
</div>

<!-- TURMAS -->
<div id="section3" class="container-fluid text-white" style="padding:100px 20px;">
<div class="container">
  
<?php include ('./component/section3.php');?>
 
</div>
</div>


</body>

<footer style="background-color: black; position: absolute; width: 100%; height:10%;"><p style="color: aliceblue;text-align: center; padding: 30px">RJ-BR</p></footer>
<link src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</html>
<?php ob_end_flush(); ?>
