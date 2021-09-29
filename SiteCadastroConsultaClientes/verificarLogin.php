<?php
include_once('login.php');

$nomeLogin = mysqli_real_escape_string($conexao, trim($_POST['nomeLogin']));
$senhaLogin = mysqli_real_escape_string($conexao, trim($_POST['senhaLogin']));


if ($nomeLogin and $senhaLogin != NULL or '') {
    
    $query = "SELECT * FROM users WHERE nome = '$nomeLogin' and senha = md5('$senhaLogin')";

	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);

    if($row == 1) {
		$userDados = mysqli_fetch_assoc($result);

		$_SESSION['status_logado'] = $userDados['nome']; ?>

        <html>
        <head>
        <meta>
        <script>
        location.replace('index.php');
        </script>
        </head>
        </html>

        <?php
		
	} else {
		$_SESSION['status_naoLogado'] = true; ?>
        <html>
        <head>
        <meta>
        <script>
        location.replace('login.php');
        </script>
        </head>
        </html>
        <?php
		exit();
	}
}

