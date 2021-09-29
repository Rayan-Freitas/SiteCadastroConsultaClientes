<?php
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

echo '<script>alert("Relatório sendo gerado, Execute o gerarRelatório.py na Área de Trabalho do seu computador e aguarde, e não mexa quando o programa for executado")</script>';

$sql = "SELECT cpf FROM clientes WHERE id > 0";
$result = mysqli_query($conexao, $sql);



if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $infoClientes[] = $row;

        $gerarRelatorio = fopen("python/relatorio.txt", "w") or die ("Não foi possível gerar o relatório");

        $cpfs = array();

        foreach($infoClientes as $linhas) {
         $cpfs[] = $linhas['cpf'];
        }
        
        print_r($cpfs);

        fwrite($gerarRelatorio, json_encode($cpfs));

        fclose($gerarRelatorio);
    }
}
?>
<html>
    <head>
        <meta>
        <script>
        location.replace('consulta.php');
        </script>
    </head>
</html>
<?php exit;?>
