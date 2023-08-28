<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="imagens/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5404/5404967.png">
    <title>Area Restrita</title>
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
  </head>
  <header></header>
 
  <body class="text-center" style="background-color: #F8F8FF;">
  <main class="form-signin w-100 m-auto">
    <img class="mb-4" src="https://cdn-icons-png.flaticon.com/512/6815/6815337.png" alt="" width="80" height="80">
   
    <h1 class="h3 mb-3 fw-normal">Área Restrita</h1>

    <main class="form-signin w-100 m-auto">
    <form class="form-signin" method="POST" action="valida.php">
      
        <div class="form-floating">
        <input type="email" name="usuario" id="inputEmail" class="form-control"  placeholder="name@example.com" required autofocus>
        <label for="floatingInput">Login</label>
        </div>
        <div class="form-floating">
        <input type="password" name="senha" id="inputPassword" class="form-control form-control-md" placeholder="Senha" required>
        <label for="inputPassword" class="sr-only">Senha</label>
    </div>
        
        <p class="p-1"></p>
        <button class="w-100 btn btn-md btn-dark btn-block" id="submit" type="submit">Acessar</button>
        <p class="p-0.3"></p>

  <p class="mt-5 mb-3 text-muted">&copy; Mari 2023</p>  
  </form>
</main>

  
  
    <br>
		<p class="text-center text-danger">

      <?php if(isset($_SESSION['tentativa'])){
        echo "Tentativa: ". $_SESSION['tentativa'];
      }
    ?>

			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset ($_SESSION['loginErro']);
			}
    ?>

		</p>
        
		<p class="text-center text-success">
			<?php if(isset($_SESSION['loginDeslogado'])){
				echo $_SESSION['loginDeslogado'];
				unset ($_SESSION['loginDeslogado']);
			}
      ?>
		</p>
    </form>
    </div>
    </div>



    </div> <!-- /container -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
