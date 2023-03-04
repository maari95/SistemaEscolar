<?php
session_start();

include('conexao.php');
include('seguranca.php');
seguranca_adm();

//  echo 'olá, ' .$_SESSION['usuarioNome']. "- <a href='sair.php'>Sair</a>";


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5956/5956912.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>
  </head>
  <body>
    <!-- navbar -->
  <?php include ('./menus/menu_colab.php');?>
<!-- fim da navbar -->
<div class="jumbotron jumbotron-fluid">
            <div class="container" style="text-align:center;">
             <h1 class="display-4; font-effect-shadow-multiple" style="font-family:'Sofia', sans-serif; font-size: 5rem">Página Inicial</h1>
            </div>
          </div>
    <p class="p-1"></p>
 
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
    <div class="card w-75 mb-3">
  <div class="card-body">
    <h5 class="card-title"><img src="https://cdn3.iconfinder.com/data/icons/feather-5/24/file-text-256.png" width="30px" height="30px"> Listagem Geral</h5>
    <p class="card-text">Redirecionar à página com listagem de alunos, professores e turmas .</p>
    <a href="listagemAluno.php" class="btn btn-outline-dark">Acessar</a>
  </div>

</div>
</div>
    

 



<!-- DIV PARA RODAPÉ, NÃO MEXER   -->
</div>
</div>
<footer style="background-color: black; bottom: 0; position: absolute; width: 100%; height:10%;"><p style="color: white;text-align: center; padding: 30px">
 Rio de Janeiro - Brasil </p></footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>