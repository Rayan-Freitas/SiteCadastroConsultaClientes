<?php 
define('HOST', 'localhost');   //MUDAR PORTA QUANDO FOR CONFIGURAR
define('USUARIO', 'u432591547_rayan');
define('SENHA', 'Deniedofservice0401');
define('DB', 'u432591547_clientes');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


