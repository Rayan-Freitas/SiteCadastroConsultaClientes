<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!isset($_SESSION['status_logado'])) {
    header('Location: login.php');
    unset($_SESSION);
    exit();
}

exec('archives/teste.py', $output);
echo $output;

?>
<html>
    <head>
        <meta>
        <script>
        location.replace('index.php');
        </script>
    </head>
</html>
