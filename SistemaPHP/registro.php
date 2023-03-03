<?php

$conexao = mysqli_connect("localhost", "root", "", "sistema");


// Verifica se houve um envio de formulário
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$mensalidade = $_POST['mensalidade'];


$sql = "insert into tb_alunos(nomeAluno, turma, mensalidade) VALUES ('$nome','$turma','$mensalidade')";

mysqli_query($conexao, $sql);

echo "Aluno Registrado com Sucesso!";
header("Location: listagemAluno.php");
 exit;

}
?>
