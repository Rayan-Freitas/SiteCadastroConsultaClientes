<?php
    include('conexao.php');

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Sistema de Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <p id="p_cadastro">Sistema de Login<img src="loading3.gif" class="loading-gif"></p>
        </div>
    </nav>
    <section class="hero is-success is-fullheight" style="background-color:orange;">
        <div class="hero-body" style="margin-bottom: 15%;">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                <div class="box" id="div2">
                        <form action="verificarLogin.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <h2 style="text-align: center; margin-bottom: 5%">Entrar no Sistema</h2>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="nomeLogin" class="input is-large" placeholder="Insira o usuário" autofocus="" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                  <input name="senhaLogin" type="password" name="text" class="input is-large" placeholder="Insira a senha" required>
                                </div>
                            </div>

                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
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
    #div2 {
        background-color: aliceblue;
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
        margin-right: -5%;
    }
    img.loading-gif{
    width: 3%;
    height: auto;
    margin-left: 2%;

    }
    

</style>