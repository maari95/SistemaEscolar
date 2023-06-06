<?php

// Connect to database
$db = mysqli_connect("localhost", "root", "", "sistema", 3307);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$id = $_POST['idAluno'];
$result = mysqli_query($db, "SELECT * FROM tb_alunos WHERE idAluno = $id"); 
$data = mysqli_fetch_assoc($result);

  $nomeAluno = $_POST['nome'];
  $turma = $_POST['turma'];
  $mensalidade = $_POST['mensalidade'];
  $nomeR=$_POST['nomeR'];
  $telefone=$_POST['telefone'];
  $endereco=$_POST['endereco'];
  $cidade=$_POST['cidade'];
  $cep=$_POST['cep'];
  $uf=$_POST['uf'];

  mysqli_query 
  ($db,"UPDATE tb_alunos SET nomeAluno = '$nomeAluno', turma = '$turma', mensalidade = '$mensalidade', 
  nomeR = 'nomeR', telefone = '$telefone', endereco = '$endereco', cidade = '$cidade', cep = '$cep', uf = '$uf'  WHERE idAluno = $id");

  // Redirect to homepage
  header("Location: listagemAluno.php");
  exit();

?>