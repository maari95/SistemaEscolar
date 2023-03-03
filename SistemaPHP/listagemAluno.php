<?php
session_start();
ob_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tb_alunos";
$sql1 = "SELECT * FROM professor";
$sql2 = "SELECT * FROM turma";

$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql1);
$result3 = mysqli_query($conn, $sql2);

?>

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
  
  <style>
       table,tr, td{
                    border:3px solid black;
                    border-collapse: collapse;
                    border-style: solid;
  
                }
                table{
                    width: 100%;
                                 
                }  
      </style>
     <p class="p-2"></p>    
     <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align:center;">
              <h1 class="display-4;  font-effect-shadow-multiple" style="font-family:'Sofia', sans-serif; font-size: 4rem">Alunos Cadastrados</h1>
              </div>
              </div>     
       <a href="form.php"><button class="btn btn-dark">Novo Aluno</button></a>
     <table style="font-size: 20px;" class="table table-hover">
      <p class="p-1"></p>
      <tr id="iniciotabela">
     
    
      <td><center>Id Aluno</center></td>
      <td><center>Nome Aluno</center></td>
      <td><center>Turma</center></td>
      <td><center>Mensalidade</center></td>
      <td><center>Ações</center></td>
      
  </tr>
  <?php if ($result->num_rows > 0) {
      foreach($result as $row) { ?>
  
          <td><?php echo $row['idAluno']; ?></td>
          <td><?php echo $row['nomeAluno']; ?></td>
          <td><?php echo $row['turma'] ?></td>
          <td><?php echo $row['mensalidade'] ?></td>
         
    <td><center><button id="editar" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit">Editar</button></a>
    
    <?php echo " <form method='post' style='display:inline;'><input type='hidden' name='idAluno' value='" . $row['idAluno'] . "'>
    <input type='submit' class='btn btn-dark' name='excluir' value='Excluir'></form>" ; 
    if (isset($_POST['excluir'])) {
        $id = $_POST['idAluno'];
        $query = "DELETE FROM tb_alunos WHERE idAluno = $id";
         $result = mysqli_query($conn, $query);
           if (mysqli_affected_rows($conn) > 0) {
            echo 'Item deletado com sucesso';
             header('location: listagemAluno.php');
            exit();
                } else {
                  echo "Ocorreu um erro ao deletar o item.";
                 }
                }
?>

    <!-- Modal de Edição  -->
     <div class="modal" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <form action="edicao.php" method="POST">
          <h4 class="modal-title">Edição de Cadastro de Alunos</h4>
          </div>
  
        <!-- Modal body -->
        <div class="modal-body"> 
          <div class="row">
            <div class="col-sm-10">
         <label>Id Aluno</label>
         <input type="text" class="form-control form-control-sm" name="id"><br>
         <label>Nome Aluno</label>
        <input type="text" class="form-control form-control-sm"  name="nome"><br>
        <label>Turma</label>
       <input type="text" class="form-control form-control-sm" name="turma"><br>
        <label>Mensalidade</label>
       <input type="text" class="form-control form-control-sm" name="mensalidade"><br>
       <p class="p-1"></p>
     </div>
     </div>
     </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <center><button type="submit" class="btn btn-dark">Alterar</button>
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancelar</button></center>
        </div>
    </form>
  </div>
  
  </td>      
    </tr>
              <!-- FECHANDO O WHILE -->
  
          <?php }
  
      } else {
        echo "Lista Vazia, insira um novo aluno";
  
      }
  
      
      ?> 
        </table> 
 
</div>
</div>  

  <div id="section2" class="container-fluid" style="padding:100px 5px;">
  <div class="container">
  <style>
       table,tr, td{
                    border:3px solid black;
                    border-collapse: collapse;
                    border-style: solid;
  
                }
                table{
                    width: 100%;
                                 
                }  
      </style>
     <p class="p-2"></p>    
     <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align:center;">
                <h1 class="display-4;  font-effect-shadow-multiple" style="font-family:'Sofia', sans-serif; font-size: 4rem">Professores Cadastrados</h1>
              </div>
            </div>     
       <a href="formProf.php"><button class="btn btn-dark">Novo Professor</button></a>
     <table style="font-size: 20px; color:black" class="table table-hover">
      <p class="p-1"></p>
      <tr id="iniciotabela">
     
    
      <td><center>Id Professor</center></td>
      <td><center>Nome Professor</center></td>
      <td><center>Disciplina</center></td>
      <td><center>Ações</center></td>
      
  </tr>
  <?php if ($result2->num_rows > 0) {
      foreach($result2 as $row) {?>
  
          <td><?php echo $row['idProfessor']; ?></td>
          <td><?php echo $row['nomeProfessor']; ?></td>
          <td><?php echo $row['disciplina'] ?></td>
                  
          <td><center><button id="editar" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editp">Editar</button></a> 
          <?php echo " <form method='post' style='display:inline;'><input type='hidden' name='idProfessor' value='" . $row['idProfessor'] . "'>
         <input type='submit' class='btn btn-dark' name='excluir1' value='Excluir'></form>" ; 
         
         if (isset($_POST['excluir1'])) {
            
          $id = $_POST['idProfessor'];
            $query = "DELETE FROM professor WHERE idProfessor = $id";
            $result = mysqli_query($conn, $query);
                if (mysqli_affected_rows($conn) > 0) {
                 echo 'Item deletado com sucesso';
                 header('location: listagemAluno.php');
                 exit();
                     } else {
                       echo "Ocorreu Um Erro Ao Deletar O Item.";
                      }
                     }
     ?>
    
  
    <!-- Modal de Edição  -->
     <div class="modal" id="editp">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <form action="editp.php" method="POST">
          <h4 class="modal-title">Edição de Cadastro de Professores</h4>
          </div>
  
        <!-- Modal body -->
        <div class="modal-body"> 
          <div class="row">
            <div class="col-sm-10">
         <label>Id Professor</label>
         <input type="text" class="form-control form-control-sm" name="id"><br>
         <label>Nome Professor</label>
        <input type="text" class="form-control form-control-sm"  name="nomeProfessor"><br>
        <label>Disciplina</label>
       <input type="text" class="form-control form-control-sm" name="disciplina"><br>
    
       <p class="p-1"></p>
     </div>
     </div>
     </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <center><button type="submit" class="btn btn-dark">Alterar</button>
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancelar</button></center>
        </div>
    </form>
  </div>
  
  </td>      
    </tr>
              <!-- FECHANDO O WHILE -->
  
          <?php }
  
      } else {
        echo "Lista Vazia, insira um novo professor";
  
      }
  
      
      ?> 
        </table> 
 
</div>
</div>

<!-- TURMAS -->
<div id="section3" class="container-fluid text-white" style="padding:100px 20px;">
<div class="container">
  <style>
       table,tr, td{
                    border:3px solid black;
                    border-collapse: collapse;
                    border-style: color: #0000;
                    

                }
                table{
                    width: 100%;
                                 
                }  
       {
        
       }         
                
      </style>
     <p class="p-2"></p>    
     <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align:center;">
                <h1 class="display-4;  font-effect-shadow-multiple" style="font-family:'Sofia', sans-serif; font-size: 4rem;color: black;">Turmas Cadastradas</h1>
              </div>
            </div>     
       <a href="formt.php"><button class="btn btn-dark">Nova Turma</button></a>
       <table style="font-size: 20px; color:black" class="table table-hover">
      <p class="p-1"></p>
      <tr id="iniciotabela">
     
    
      <td><center>Id Turma</center></td>
      <td><center>Nome Turma</center></td>
      <td><center>Ações</center></td>
      
      
  </tr>
      <?php if ($result3->num_rows > 0) {
  
          foreach($result3 as $row) { ?>

        <td><?php echo $row['idTurma']; ?></td>
        <td><?php echo $row['turma']; ?></td>
          
                  
          <td><center><button id="editar" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editt">Editar</button></a> 
          <!-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#excluirt">Excluir</button></center> -->
          <?php echo " <form method='post' style='display:inline;'><input type='hidden' name='idTurma' value='" . $row['idTurma'] . "'>
          <input type='submit' class='btn btn-dark' name='excluir3' value='Excluir'></form>"; 
        if (isset($_POST['excluir3'])) {
          $id = $_POST['idTurma'];
          $query = "DELETE FROM turma WHERE idTurma = $id";
          $result = mysqli_query($conn, $query);
           if (mysqli_affected_rows($conn) > 0) {
            echo 'Item deletado com sucesso';
             header('location: listagemAluno.php');
            exit();
                } else {
                  echo "Ocorreu um erro ao deletar o item.";
                 }
                }
?> 

    <!-- Modal de Edição  -->
     <div class="modal" id="editt">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <form action="editT.php" method="POST">
          <h4 class="modal-title">Edição de Cadastro de Turmas</h4>
          </div>
  
        <!-- Modal body -->
        <div class="modal-body"> 
          <div class="row">
            <div class="col-sm-10">
            <label>Id Turma</label>
            <input type="text" class="form-control form-control-sm" name="id"><br>
            
            <label>Turma</label>
          <input type="text" class="form-control form-control-sm"  name="turma"><br>
    
    
       <p class="p-1"></p>
     </div>
     </div>
     </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <center><button type="submit" class="btn btn-dark">Alterar</button>
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancelar</button></center>
        </div>
    </form>
  </div>
  
  </td>      
    </tr>
              <!-- FECHANDO O WHILE -->
  
          <?php }
  
      } else {
        echo "Lista Vazia, insira uma nova turma";
  
      }
  
      mysqli_close($conn);
      ?> 
        </table> 
 
</div>
</div>



</body>
<footer style="background-color: black; position: absolute; width: 100%; height:10%;"><p style="color: aliceblue;text-align: center; padding: 30px">RJ-BR</p></footer>
<link src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</html>
<?php ob_end_flush(); ?>
