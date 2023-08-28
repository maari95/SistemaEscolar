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
                <h1 class="display-4;  font-effect-shadow-multiple" style="font-family:'Sofia', sans-serif; font-size: 4rem">Professores Cadastrados</h1>
              </div>
            </div>     
       <a href="formProf.php"><button class="btn btn-dark">Novo Professor</button></a>
     <table style="font-size: 20px; color:black" class="table table-hover">
      <p class="p-1"></p>
      <tr id="iniciotabela">
     
    
      <td><center>Id Professor</center></td>
      <td><center>Nome Professor</center></td>
      <td><center>Disciplina</center></td>
      <td><center>Ações</center></td>
      
  </tr>
  <?php if ($result2->num_rows > 0) {
      foreach($result2 as $row) {?>
  
          <td><?php echo $row['idProfessor']; ?></td>
          <td><?php echo $row['nomeProfessor']; ?></td>
          <td><?php echo $row['disciplina'] ?></td>
                  
          <td><center><button id="editar" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editp">Editar</button></a> 
          <?php echo " <form method='post' style='display:inline;'><input type='hidden' name='idProfessor' value='" . $row['idProfessor'] . "'>
         <input type='submit' class='btn btn-dark' name='excluir1' value='Excluir'></form>" ; 
         
         if (isset($_POST['excluir1'])) {
            
          $id = $_POST['idProfessor'];
            $query = "DELETE FROM professor WHERE idProfessor = $id";
            $result = mysqli_query($conn, $query);
                if (mysqli_affected_rows($conn) > 0) {
                 echo 'Item deletado com sucesso';
                 header('location: listagemAluno.php');
                 exit();
                     } else {
                       echo "Ocorreu Um Erro Ao Deletar O Item.";
                      }
                     }
     ?>
    
  
    <!-- Modal de Edição  -->
     <div class="modal" id="editp">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <form action="editp.php" method="POST">
          <h4 class="modal-title">Edição de Cadastro de Professores</h4>
          </div>
  
        <!-- Modal body -->
        <div class="modal-body"> 
          <div class="row">
            <div class="col-sm-10">

         <label>Id Professor</label>
         <input type="text" class="form-control form-control-sm" name="id"><br>
         <label>Nome Professor</label>
        <input type="text" class="form-control form-control-sm"  name="nomeProfessor"><br>
        <label>Disciplina</label>
       <input type="text" class="form-control form-control-sm" name="disciplina"><br>
    
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
        echo "Lista Vazia, insira um novo professor";
  
      }
  
      
      ?> 
        </table> 