<?php
session_start();
ob_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";
$port = 3307;
$conn = mysqli_connect($servername, $username, $password, $dbname,$port);

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