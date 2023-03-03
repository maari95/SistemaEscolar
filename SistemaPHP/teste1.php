<?php
// Conecta ao banco de dados
$conn = mysqli_connect('localhost', 'root', '', 'sistema');

// Seleciona os itens da tabela
$query = "SELECT * FROM tb_alunos";
$result = mysqli_query($conn, $query);

// Exibe os itens em uma lista
echo "<ul>";
foreach ($result as $row) {
  echo "<li>";
  echo $row['nomeAluno'];
  echo " <form method='post' style='display:inline;'><input type='hidden' name='idAluno' value='" . $row['idAluno'] . "'><input type='submit' name='delete' class='btn' value='Deletar'></form>";
  echo "</li>";
}
echo "</ul>";

// Deleta o item quando o botão de delete for pressionado
if (isset($_POST['delete'])) {
  $id = $_POST['idAluno'];
  $query = "DELETE FROM tb_alunos WHERE idAluno = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_affected_rows($conn) > 0) {
    echo "O item foi deletado com sucesso!";
    header('location:teste1.php');
  } else {
    echo "Ocorreu um erro ao deletar o item.";
  }
}
?>
