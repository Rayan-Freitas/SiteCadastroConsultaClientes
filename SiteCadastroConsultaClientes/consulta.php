<?php
include_once('conexao.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!isset($_SESSION['status_logado'])) {
    header('Location: login.php');
    unset($_SESSION);
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cadastro de Clientes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script>
        <script>
        $(document).ready(function() {
            $("button").click(function() {
                $(document).scrollTop($(document).height());
            });
        });
    </script>

    <!-- Ícone da Página -->
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Eo_circle_yellow_letter-m.svg/1200px-Eo_circle_yellow_letter-m.svg.png" type="image/x-icon"/>
    <!-- Bulma css -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
  <body>
    <nav class="navbar navbar-expand navbar-light bg-dark">
        <div class="div_nav">
            <p id="p_voltar"><a href="index.php">Voltar</a></p>
            <p id="p_cadastro">Consultar Clientes<img src="loading2.gif" class="loading-gif"></p>
            <p id="p_gerarRelatorio"><a style="color: #05eb68;" href="gerarRelatorio.php">Gerar Relatório <br> Email</a></p>
        </div>
    </nav>
    <section class="hero is-success is-fullheight" style="background-color:orange;">
        <div class="hero-body" style="margin-bottom: 15%;">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                <div class="box">
                        <form action="consultarCPF.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <h2 style="text-align: center;">Consulta por CPF</h2>
                                    <div style="margin: 3%;">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="checkBoxCPF">
                                        <p class="form-check-label" for="flexCheckDefault" style="margin-left: 8%;">
                                            Consultar TODOS os Dados 
                                        </p>
                                    </div>
                                        <input name="cpf" class="input is-large" placeholder="CPF do Cliente">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Consulta por CPF</button>
                        </form>
                    </div>
                    <div style="margin: 10%; color: black;"><h1>OU</h1></div>
                    <div class="box">
                        <form action="consultarAlfabeto.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <h2 style="text-align: center;">Consulta por Alfabeto</h2>
                                    <div style="margin: 3%;">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="checkBoxAlfabeto">
                                            <p class="form-check-label" for="flexCheckDefault" style="margin-left: 8%;">
                                                Consultar TODOS os Dados 
                                            </p>
                                    </div>
                                    <input name="l_alfabeto" class="input is-large" placeholder="Digite a primeira letra">
                                </div>
                            </div>
                            <p style="font-size: large; color: red;">Digite Apenas uma letra!</p>
                            <p style="font-size: large; color: purple;">Deixe em branco caso queira consultar TODOS os clientes</p>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Consulta lista por Alfabeto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<style>
    nav {
        position: relative;
        box-shadow: 0.5px 3px #888888;
    }
    
    .div_nav {
        border: 1px solid white;
        width:100%;
        display: flex;
        justify-content: center;
        text-align: center;
        align-items: center;

    }
    #p_cadastro {
        color:aliceblue;
        text-align: center;
        flex: auto;
        font-size: 200%;
        font-weight: bold;
        margin-left: 8%;
    }
    #p_consultar {
        color: lightblue;
        font-size: 160%;
        margin-right: 5%;
    }
    #p_voltar {
        color: yellow;
        font-size: 150%;
        margin-left: 5%;
    }
    #p_gerarRelatorio {
        color: green;
        font-size: 130%;
        margin-right: 5%;
        margin-top: 0.5%;
    }

    input[type=checkbox]
{
  -webkit-transform: scale(2); /* Safari and Chrome */
  transform: scale(2);
  padding: 10px;
  margin-left: -1%;
}

/* Might want to wrap a span around your checkbox text */
.checkboxtext
{
  font-size: 110%;
  display: inline;
}
img.loading-gif{
    width: 5.5%;
    height: auto;
    }
</style>

<?php

