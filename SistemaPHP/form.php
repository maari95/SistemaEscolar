<?php 
session_start();

?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro Alunos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5956/5956912.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">

<link rel="stylesheet" href="css/style.css">
</head>
<header></header>
<body>
<?php 
include('./menus/menu_admin.php');
?>
    <p class="p-2"></p>
    <form action="registro.php" method="POST" id="form">
        <div class="jumbotron jumbotron-fluid">
            <div class="container" style="text-align:center;">
              <h1 class="display-4;  font-effect-shadow-multiple" style="font-family:'Sofia', sans-serif; font-size: 4rem">Cadastro de Alunos</h1>
              <p class="lead">Área de Cadastro</p>
            </div>
          </div>
        <div class="container" style="padding: 20px;">
    <div class="row">
        <div class="col-sm-4">
        <label for="nome">Nome Aluno</label>
        <input class="form-control form-control-sm" type="text" name="nome" placeholder="Nome Aluno">
        
    </div> 
    <div class="col-sm-4">
        <label for="turma">Turma</label>
        <input class="form-control form-control-sm" type="text" name="turma" placeholder="Turma">
        
    </div>

     <div class="col-sm">
        <label for="mensalidade">Mensalidade</label>
        <input class="form-control form-control-sm" type="text" name="mensalidade" placeholder="Mensalidade">
        
    </div>
    </div>
</div>
<p class="p-1"></p>
<center><button type="submit" id="submit" class="btn btn-dark"><img src="icons/send.png" width="25px" height="25px"> Enviar</button></center>


</div>
</div>
</div>
</form>

<script></script>



<footer style="background-color: black; bottom: 0; position: absolute; width: 100%; height:10%;"><p style="color: aliceblue;text-align: center; padding: 30px">RJ-BR</p></footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

