<?php

// Connect to database
$db = mysqli_connect("localhost", "root", "", "sistema");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$id = $_POST['id'];
$result = mysqli_query($db, "SELECT * FROM professor WHERE idProfessor = $id"); 
$data = mysqli_fetch_assoc($result);

$nomeProfessor = $_POST['nomeProf'];
$disciplina = $_POST['disciplina'];


  mysqli_query ($db,"UPDATE professor SET nomeProfessor = '$nomeProfessor', disciplina = '$disciplina' WHERE idProfessor = $id");

  // Redirect to homepage
  header("Location: listagemAluno.php");
  exit();

?>