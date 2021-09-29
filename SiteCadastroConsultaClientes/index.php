<?php
    include('conexao.php');

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
            <p id="p_nomeloja">Marilu Empréstimos</p>
            <p id="p_cadastro">Cadastro de Clientes<img src="loading2.gif" class="loading-gif"></p>
            <p id="p_consultar"><a href="consulta.php">Consultar Clientes</a></p>
        </div>
    </nav>
    <section class="hero is-success is-fullheight" style="background-color:orange;">
        <div class="hero-body" style="margin-bottom: 15%;">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                <div class="box">
                        <?php
                            if(isset($_SESSION['usuario_existe'])){
                            ?>
                            <div class="notification is-danger">
                                <p>CPF JÁ CADASTRADO, TENTE NOVAMENTE!</p>
                            </div>
                            <?php
                            };
                        ?>
                        <?php
                            if(isset($_SESSION['status_cadastro'])){
                            ?>
                            <div class="notification is-success">
                                <p>CPF CADASTRADO COM SUCESSO!</p>
                            </div>
                            <?php
                            };
                        ?>
                        <?php 
                            unset($_SESSION['status_cadastro']);
                            unset($_SESSION['usuario_existe']);
                        ?>
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <h2 style="text-align: center; margin-bottom: 5%">Cadastrar Clientes</h2>
                                    <h4 style="text-align: center;">Obrigatório</h4>
                                    <input name="nome" name="text" class="input is-large" placeholder="Nome do cliente" autofocus="" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="cpf" class="input is-large" placeholder="CPF do cliente" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input  name="telefone" class="input is-large" placeholder="Telefone do cliente" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <h4>Data de Nascimento</h4>
                                    <input type="date" name="data_de_nascimento" class="input is-large" placeholder="Data de Nascimento (Obrigatório)" required>
                                </div>
                            </div>

                            <h4>Opcional</h4>

                            <div class="field">
                                <div class="control">
                                    <input name="rg" class="input is-large" placeholder="RG (Opcional)">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="banco" class="input is-large" placeholder="Banco (Opcional)">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="conta" class="input is-large" placeholder="Conta (Opcional)">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="orgao" class="input is-large" placeholder="Orgão (Opcional)">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="estado_civil" class="input is-large" placeholder="Estado Civil (Opcional)">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="correspondente" class="input is-large" placeholder="Correspondente (Opcional)">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="pai" class="input is-large" placeholder="Nome do Pai (Opcional)">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="mae" class="input is-large" placeholder="Nome da Mãe (Opcional)">
                                </div>
                            </div>        

                            <div class="field">
                                <div class="control">
                                    <input name="nb" class="input is-large" placeholder="NB (Opcional)">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="rua" class="input is-large" placeholder="Rua (Opcional)">
                                </div>
                            </div>
                            
                            <div class="field">
                                <div class="control">
                                    <h4>Data de Cadastro</h4>
                                    <input type="date" name="data_cadastro" class="input is-large" placeholder="Data de Cadastro (Opcional)">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input style="height: 20vh;" name="descricao" class="input is-large" placeholder="Descrição/Informações Adicionais (Opcional)">
                                </div>
                            </div>

                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar Cliente</button>
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
        margin-right: -2%;
    }
    #p_consultar {
        color: lightblue;
        font-size: 160%;
        margin-right: 5%;
    }
    #p_nomeloja {
        color: yellow;
        font-size: 160%;
        margin-left: 5%;
    }
    img.loading-gif{
    width: 5.5%;
    height: auto;
    }
    

</style>