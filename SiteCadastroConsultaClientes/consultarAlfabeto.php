<?php
include('conexao.php');
include('consulta.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!isset($_SESSION['status_logado'])) {
    header('Location: login.php');
    unset($_SESSION);
    exit();
}

error_reporting(E_ERROR | E_PARSE);

$nome = $_REQUEST['l_alfabeto'];

$tabelaAlfabeto = 'clientes';
$tabelaAlfabeto .= strtolower($nome[0]);

$sql = "SELECT * FROM $tabelaAlfabeto";
$result = mysqli_query($conexao, $sql);


if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $infoClientes[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<?php 
if (isset($_POST['checkBoxAlfabeto'])) {
    $_SESSION['consultaRealizada'] = TRUE;
 ?>
<body>
    <table border="1" style="margin: auto; max-width: 99%; border-radius: 15px; border: orange; border-top-style: double; table-layout: fixed; word-wrap:break-word; overflow: hidden; margin-top: -15%" class="table table-dark table-striped">
                                 <tr style="font-weight: bold; font-size: 2vh">
                                    <td>ID</td>              
                                    <td>Nome</td>
                                    <td>CPF</td>
                                    <td>Telefone</td>
                                    <td>Dn</td>
                                    <td>RG</td>
                                    <td>Banco</td>
                                    <td>Conta</td>
                                    <td>Órgão</td>
                                    <td>Estado C.</td>
                                    <td>Correspondente</td>
                                    <td>Pai</td>
                                    <td>Mae</td>
                                    <td>NB</td>
                                    <td>Rua</td>
                                    <td>DC</td>
                                    <td>Descricao</td>
                                </tr>
                                <?php foreach ($infoClientes as $linhas) { ?>
                                <tr style="font-size: 95%">
                                    <td><?php echo $linhas['id'];?></td>
                                    <td><?php echo $linhas['nome'];?></td>
                                    <td><?php echo $linhas['cpf'];?></td>
                                    <td><?php echo $linhas['telefone'];?></td>
                                    <td><?php echo $linhas['dn'];?></td>
                                    <td><?php echo $linhas['rg'];?></td>
                                    <td><?php echo $linhas['banco'];?></td>
                                    <td><?php echo $linhas['conta'];?></td>
                                    <td><?php echo $linhas['orgao'];?></td>
                                    <td><?php echo $linhas['estadocivil'];?></td>
                                    <td><?php echo $linhas['correspondente'];?></td>
                                    <td><?php echo $linhas['nomepai'];?></td>
                                    <td><?php echo $linhas['nomemae'];?></td>
                                    <td><?php echo $linhas['nb'];?></td>
                                    <td><?php echo $linhas['rua'];?></td>
                                    <td><?php echo $linhas['dc'];?></td>
                                    <td><?php echo $linhas['descricao'];?></td>
                                </tr>
                                <?php } ?>
    </table>
</body>
</html>
<style>
    body {
        background-color: orange;
    }
</style>


<?php } ?>

<?php  } ?>

<?php 
if (!isset($_POST['checkBoxAlfabeto'])) {
 ?>
<body>
    <table border="1" style="margin: auto; max-width: 99%; border-radius: 15px; border: orange; border-top-style: double; table-layout: fixed; word-wrap:break-word; overflow: hidden; margin-top: -15%" class="table table-dark table-striped"">
                                <tr style="font-weight: bold; font-size: 2vh">
                                    <td>ID</td>              
                                    <td>Nome</td>
                                    <td>CPF</td>
                                    <td>Telefone</td>
                                    <td>DN</td>
                                </tr>
                                <?php foreach ($infoClientes as $linhas) { ?>
                                <tr>
                                    <td><?php echo $linhas['id'];?></td>
                                    <td><?php echo $linhas['nome'];?></td>
                                    <td><?php echo $linhas['cpf'];?></td>
                                    <td><?php echo $linhas['telefone'];?></td>
                                    <td><?php echo $linhas['dn'];?></td>
                                </tr>
                                <?php } ?>
    </table>
</body>
</html>
<style>
    body {
        background-color: orange;
    }
</style>


<?php } ?>