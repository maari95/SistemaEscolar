<?php

$conexao = mysqli_connect("localhost", "root", "", "sistema");

// Verifica se houve um envio de formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nomeProfessor = $_POST['nomeProf'];
$disciplina = $_POST['disciplina'];



$sql = "insert into professor(nomeProfessor, disciplina) VALUES ('$nomeProfessor','$disciplina')";

mysqli_query($conexao, $sql);

echo "Aluno Registrado com Sucesso!";
header("Location: listagemAluno.php");
 exit;

}


?>
