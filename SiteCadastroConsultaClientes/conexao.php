<?php 
define('HOST', '');   //MUDAR PORTA QUANDO FOR CONFIGURAR
define('USUARIO', '');
define('SENHA', '');
define('DB', '');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


