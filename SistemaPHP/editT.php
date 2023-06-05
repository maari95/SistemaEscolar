<?php

// Connect to database
$db = mysqli_connect("localhost", "root", "", "sistema", 3307);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$id = $_POST['id'];
$result = mysqli_query($db, "SELECT * FROM turma WHERE idTurma = $id"); 
$data = mysqli_fetch_assoc($result);

$turma = $_POST['turma'];


  mysqli_query ($db,"UPDATE professor SET turma = '$turma' WHERE idTurma = $id");

  // Redirect to homepage
  header("Location: listagemAluno.php");
  exit();

?>