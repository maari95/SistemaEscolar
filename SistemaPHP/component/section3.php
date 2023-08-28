<style>
       table,tr, td{
                    border:3px solid black;
                    border-collapse: collapse;
                    border-style: color: #0000;
                    

                }
                table{
                    width: 100%;
                                 
                }  
       {
        
       }         
                
      </style>
     <p class="p-2"></p>    
     <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align:center;">
                <h1 class="display-4;  font-effect-shadow-multiple" style="font-family:'Sofia', sans-serif; font-size: 4rem;color: black;">Turmas Cadastradas</h1>
              </div>
            </div>     
       <a href="formt.php"><button class="btn btn-dark">Nova Turma</button></a>
       <table style="font-size: 20px; color:black" class="table table-hover">
      <p class="p-1"></p>
      <tr id="iniciotabela">
     
    
      <td><center>Id Turma</center></td>
      <td><center>Nome Turma</center></td>
      <td><center>Ações</center></td>
      
      
  </tr>
      <?php if ($result3->num_rows > 0) {
  
          foreach($result3 as $row) { ?>

        <td><?php echo $row['idTurma']; ?></td>
        <td><?php echo $row['turma']; ?></td>
          
                  
          <td><center><button id="editar" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editt">Editar</button></a> 
          <!-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#excluirt">Excluir</button></center> -->
          <?php echo " <form method='post' style='display:inline;'><input type='hidden' name='idTurma' value='" . $row['idTurma'] . "'>
          <input type='submit' class='btn btn-dark' name='excluir3' value='Excluir'></form>"; 
        if (isset($_POST['excluir3'])) {
          $id = $_POST['idTurma'];
          $query = "DELETE FROM turma WHERE idTurma = $id";
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
     <div class="modal" id="editt">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <form action="editT.php" method="POST">
          <h4 class="modal-title">Edição de Cadastro de Turmas</h4>
          </div>
  
        <!-- Modal body -->
        <div class="modal-body"> 
          <div class="row">
            <div class="col-sm-10">
            <label>Id Turma</label>
            <input type="text" class="form-control form-control-sm" name="id"><br>
            
            <label>Turma</label>
          <input type="text" class="form-control form-control-sm"  name="turma"><br>
    
    
       <p class="p-1"></p>
     </div>
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
        echo "Lista Vazia, insira uma nova turma";
  
      }
  
      mysqli_close($conn);
      ?> 
        </table> 