<?php

$conexao = mysqli_connect("localhost", "root", "", "sistema");


// Verifica se houve um envio de formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$turma = $_POST['turma'];


$sql = "insert into turma(turma) VALUES ('$turma')";

mysqli_query($conexao, $sql);

echo "Aluno Registrado com Sucesso!";
header("Location: listagemAluno.php");
 exit;

}
?>