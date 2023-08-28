<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sistema";
$port = 3307;
//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname, $port);

if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
    //echo "Conexao realizada com sucesso";
}

?>
