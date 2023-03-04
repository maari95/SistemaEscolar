<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384778.png" width="30px" height="30px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fixed" id="navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="administrativo.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="listagemAluno.php">Listagem</a>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="form.php">Alunos</a></li>
            <li><a class="dropdown-item" href="formProf.php">Professores</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="formt.php">Turmas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    <?php 
     echo ' ' .$_SESSION['usuarioNome'].  " <a href='sair.php'><button type='button' class='btn btn-dark'> Sair  </button></a>";
    ?>
    <!-- </form> -->
    </div>
  </div>
</nav>