<?php
include('index.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!isset($_SESSION['status_logado'])) {
    header('Location: login.php');
    unset($_SESSION);
    exit();
}

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$dn = mysqli_real_escape_string($conexao, trim($_POST['data_de_nascimento']));
$rg = mysqli_real_escape_string($conexao, trim($_POST['rg']));
$banco = mysqli_real_escape_string($conexao, trim($_POST['banco']));
$conta = mysqli_real_escape_string($conexao, trim($_POST['conta']));
$orgao = mysqli_real_escape_string($conexao, trim($_POST['orgao']));
$estado_civil = mysqli_real_escape_string($conexao, trim($_POST['estado_civil']));
$correspondente = mysqli_real_escape_string($conexao, trim($_POST['correspondente']));
$pai = mysqli_real_escape_string($conexao, trim($_POST['pai']));
$mae = mysqli_real_escape_string($conexao, trim($_POST['mae']));
$nb = mysqli_real_escape_string($conexao, trim($_POST['nb']));
$rua = mysqli_real_escape_string($conexao, trim($_POST['rua']));
$dc = mysqli_real_escape_string($conexao, trim($_POST['data_cadastro']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));


$tabelaAlfabeto = 'clientes';
$nomeStr = strtolower($nome[0]);
$tabelaAlfabeto .= $nomeStr;

$sql = "SELECT cpf FROM clientes WHERE cpf = '$cpf'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['cpf'] == $cpf){
    $_SESSION['usuario_existe'] = true;
?>
<html>
    <head>
        <meta>
        <script>
        location.replace('index.php');
        </script>
    </head>
</html>
<?php 
    exit;
    }
?>

<?php 

if($nome and $cpf and $telefone != NULL){
    $sql = "INSERT INTO clientes (nome, cpf, telefone, dn, rg, banco, conta, orgao, estadocivil, correspondente, nomepai, nomemae, nb, rua, dc, descricao) VALUES ('$nome' , '$cpf' , '$telefone', '$dn', '$rg','$banco','$conta','$orgao','$estado_civil','$correspondente','$pai','$mae','$nb','$rua','$dc','$descricao')";

    if($conexao->query($sql) === TRUE) {
        $_SESSION['status_cadastro'] = true;
    }
}
if($nome and $cpf and $telefone != NULL){
    $sql = "INSERT INTO $tabelaAlfabeto (nome, cpf, telefone, dn, rg, banco, conta, orgao, estadocivil, correspondente, nomepai, nomemae, nb, rua, dc, descricao) VALUES ('$nome' , '$cpf' , '$telefone', '$dn', '$rg','$banco','$conta','$orgao','$estado_civil','$correspondente','$pai','$mae','$nb','$rua','$dc','$descricao')";

    if($conexao->query($sql) === TRUE) {
        $_SESSION['status_cadastro'] = true;
    }
}

$conexao->close();
?>
<html>
    <head>
        <meta>
        <script>
        location.replace('index.php');
        </script>
    </head>
</html>