<style>
       table,tr, td{
                    border:3px solid black;
                    border-collapse: collapse;
                    border-style: solid;
  
                }
                table{
                    width: 100%;
                                 
                }  
      </style>
     <p class="p-2"></p>    
     <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align:center;">
              <h1 class="display-4;  font-effect-shadow-multiple" style="font-family:'Sofia', sans-serif; font-size: 4rem">Alunos Cadastrados</h1>
              </div>
              </div>     
     <a href="form.php"><button class="btn btn-dark">Novo Aluno</button></a>
     <table style="font-size: 20px;" class="table table-hover">
      <p class="p-1"></p>
      <tr id="iniciotabela">
     
    
      <td><center>Id Aluno</center></td>
      <td><center>Nome Aluno</center></td>
      <td><center>Turma</center></td>
      <td><center>Mensalidade</center></td>
      <td><center>Responsável</center></td>
      <td><center>Telefone</center></td>
      <td><center>Endereço</center></td>
      <td><center>Cidade</center></td>
      <td><center>CEP</center></td>
      <td><center>Estado</center></td>
      <td><center>Ações</center></td>
      
  </tr>
  <?php if ($result->num_rows > 0) {
      foreach($result as $row) { ?>
  
          <td><?php echo $row['idAluno']; ?></td>
          <td><?php echo $row['nomeAluno']; ?></td>
          <td><?php echo $row['turma'] ?></td>
          <td>R$ <?php echo $row['mensalidade'] ?></td>
          <td><?php echo $row['nomeR'] ?></td>
          <td><?php echo $row['telefone'] ?></td>
          <td><?php echo $row['endereco'] ?></td>
          <td><?php echo $row['cidade'] ?></td>
          <td><?php echo $row['cep'] ?></td>
          <td><?php echo $row['uf'] ?></td>
         
    <td><center><button id="editar" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit">Editar</button></a>
    
    <?php echo " <form method='post' style='display:inline;'><input type='hidden' name='idAluno' value='" . $row['idAluno'] . "'>
    <input type='submit' class='btn btn-dark' name='excluir' value='Excluir'></form>" ; 
    if (isset($_POST['excluir'])) {
        $id = $_POST['idAluno'];
        $query = "DELETE FROM tb_alunos WHERE idAluno = $id";
         $result = mysqli_query($conn, $query);
           if (mysqli_affected_rows($conn) > 0) {
            echo 'Item deletado com sucesso';
             header('location: listagemAluno.php');
            exit();
                } else {
                  echo "Ocorreu um erro ao deletar o item.";
                 }
                }
?>

    <!-- Modal de Edição  -->
    <div class="modal" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <form action="edicao.php" method="POST">
          <h4 class="modal-title">Edição de Cadastro de Alunos</h4>
          </div>
  
        <!-- Modal body -->
        <div class="modal-body"> 
          <div class="container col-sm-20 text-start" style="font-size:medium;">
        <div class="row">
          <div class="col-sm-4">
         <label>Id</label>
         <input type="text" name="idAluno" class="form-control form-control-sm" readonly value="<?php echo $row['idAluno']?>">
        </div>
         <div class="col-sm">
         <label>Nome Aluno</label>
        <input type="text" class="form-control form-control-sm"  name="nome">
        </div>
        </div>
       
        

        <div class="row">
        <div class="col-sm-6">
        <label>Turma</label>
       <input type="text" class="form-control form-control-sm" name="turma">
        </div>
        <div class="col-sm">
        <label>Mensalidade</label>
       <input type="text" class="form-control form-control-sm" name="mensalidade">
       </div>
      </div>

       <div class="row">
        <div class="col-sm-6">
        <label>Responsável</label>
        <input type="text" class="form-control form-control-sm" name="nomeR">
        </div>
        <div class="col-sm-6">
          <label>Telefone</label>
          <input type="text" class="form-control form-control-sm" name="telefone">
          </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <label>Endereço</label>
              <input type="text" class="form-control form-control-sm" name="endereco">  
              </div>
              <div class="col-sm-6">
              <label>Cidade</label>
              <input type="text" class="form-control form-control-sm" name="cidade">
              </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <label>CEP</label>
                  <input type="text" class="form-control form-control-sm" name="cep">
                  </div>
                  <div class="col-sm-6">
                  <label>UF</label>
                <input type="text" class="form-control form-control-sm" name="uf"> 
              </div>
              </div>

       <p class="p-0.75"></p>
     </div>
     </div>
    
    
        <!-- Modal footer -->
        <div class="modal-footer">
        <center><button type="submit" class="btn btn-dark">Alterar</button>
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancelar</button></center>
        </div>
    </form>
  </div>
  
  </td>      
    </tr>
              <!-- FECHANDO O WHILE -->
  
          <?php }
  
      } else {
        echo "Lista Vazia, insira um novo aluno";
  
      }
  
      
      ?> 
    </table> 
 