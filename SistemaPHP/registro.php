<?php

$conexao = mysqli_connect("localhost", "root", "", "sistema", 3307);


// Verifica se houve um envio de formulário
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$mensalidade = $_POST['mensalidade'];
$nomeR=$_POST['nomeR'];
$telefone=$_POST['telefone'];
$endereco=$_POST['endereco'];
$cidade=$_POST['cidade'];
$cep=$_POST['cep'];
$uf=$_POST['uf'];

$sql = "insert into tb_alunos(nomeAluno, turma, mensalidade, nomeR, telefone, endereco, cidade, cep, uf) 
VALUES ('$nome','$turma','$mensalidade', '$nomeR', '$telefone','$endereco', '$cidade', '$cep', '$uf')";

mysqli_query($conexao, $sql);

echo "Aluno Registrado com Sucesso!";
header("Location: listagemAluno.php");
 exit;

}
?>
