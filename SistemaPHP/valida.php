<?php

session_start();

	include_once("conexao.php");

	//Verifica se os campos possuem dados 

	if((isset($_POST['usuario'])) && (isset($_POST['senha']))){

		$usuario = mysqli_real_escape_string($conn, $_POST['usuario']); 
        //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($senha);
		
		$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha'";

		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

//Encontrando um usuário na tabela usuario com os mesmos dados digitado pelo usuario


if(isset($resultado)){
    $_SESSION['usuarioId'] = $resultado['id'];
    $_SESSION['usuarioNome'] = $resultado['nome'];
    $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
    $_SESSION['usuarioEmail'] = $resultado['email'];


    if($_SESSION['usuarioNiveisAcessoId'] == "1"){
        header("Location: administrativo.php");
    }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
        header("Location: colaborador.php");
    }elseif($_SESSION['usuarioNiveisAcessoId'] == "3"){
        header("Location: cliente.php");
    }else{
        $_SESSION['loginErro'] = "Erro - Entre em contato marinagomes2@outlook.com";
        header("Location: index.php");
        $_SESSION['tentativa']++;
    }
}else{
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: index.php");
    $_SESSION['tentativa']++;
}
}else{
$_SESSION['loginErro'] = "Usuário ou senha inválido";
header("Location: index.php");
$_SESSION['tentativa']++;
}



?>



