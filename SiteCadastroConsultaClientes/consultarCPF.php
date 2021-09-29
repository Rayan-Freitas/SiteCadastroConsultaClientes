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

$cpf = $_REQUEST['cpf'];

if (!is_numeric($cpf) or is_null($cpf)) { ?>

<html>
    <head>
        <meta>
        <script>
        location.replace('consulta.php');
        </script>
    </head>
</html>

<?php } ?>

<?php 

$sql = "SELECT * FROM clientes WHERE cpf = '$cpf'";
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
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $("html, body").animate({
                    scrollTop: $(
                      'html, body').get(0).scrollHeight
                }, 2000);
            });
        });
    </script>
</head>


<?php 
if (isset($_POST['checkBoxCPF'])) {
    $_SESSION['consultaRealizada'] = TRUE;
 ?>
<body>
    <table border="1" style="margin: auto; max-width: 99%; border-radius: 15px; border: orange; border-top-style: double; table-layout: fixed; word-wrap:break-word; overflow: hidden; margin-top: -15%" class="table table-dark table-striped">
                                <tr style="font-weight: bold; font-size: 2vh" >
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
                                    <td>Mãe</td>
                                    <td>NB</td>
                                    <td>Rua</td>
                                    <td>DC</td>
                                    <td>Descricao</td>
                                </tr>
                                <?php foreach ($infoClientes as $linhas) { ?>
                                <tr style="font-size: 97%;">
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
if (!isset($_POST['checkBoxCPF'])) {
    $_SESSION['consultaRealizada'] = TRUE;
 ?>
<body>
    <table border="1" style="margin: auto; max-width: 99%; border-radius: 15px; border: orange; border-top-style: double; table-layout: fixed; word-wrap:break-word; overflow: hidden; margin-top: -15%" class="table table-dark table-striped">
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

<?php

if(isset($_SESSION['consultaRealizada']))
{

    //[...]
    //sql query and display
    //[...]

    ?>
        <script>

        </script>
    <?php

}

?>

