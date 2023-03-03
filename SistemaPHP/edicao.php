<?php

// Connect to database
$db = mysqli_connect("localhost", "root", "", "sistema");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$id = $_POST['id'];
$result = mysqli_query($db, "SELECT * FROM tb_alunos WHERE idAluno = $id"); 
$data = mysqli_fetch_assoc($result);

  $nomeAluno = $_POST['nome'];
  $turma = $_POST['turma'];
  $mensalidade = $_POST['mensalidade'];
 

  mysqli_query ($db,"UPDATE tb_alunos SET nomeAluno = '$nomeAluno', turma = '$turma', mensalidade = '$mensalidade' WHERE idAluno = $id");

  // Redirect to homepage
  header("Location: administrativo.php");
  exit();

?>