<!--<?php

include_once('../conexao/conexao.php');

        $sql = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
        $sql->bindValue(':id', $_GET['id']);
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_OBJ);

?>-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | ZA </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="../assets/cadastroU.css">

</head>

<body>

    <div class="box">
        <form action="atualizar.php" method="post">

            <h1>Editar USUÁRIO</h1>

            <input type="hidden" name="txtid" value="<?php echo $result->id; ?>">

            <div class="inputBox">
                <input type="text" name="txtnome" id="nome" class="inputUser" required
                    value="<?php echo $result->nome; ?>">
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>

            <div class="inputBox">
                <input type="text" name="txtcpf" id="CPF" class="inputUser" required
                    value="<?php echo $result->cpf; ?>">
                <label for="cpf" class="labelInput">CPF</label>
            </div>

            <div class="inputBox">
                <input type="text" name="txtemail" id="email" class="inputUser" value="<?php echo $result->email; ?>">
                <label for="email" class="labelInput">E-mail</label>
            </div>

            <div class="inputBox">
                <input type="tel" name="txttelefone" id="telefone" class="inputUser"
                    value="<?php echo $result->fone; ?>">
                <label for="tel" class="labelInput">Telefone</label>
            </div>

            <h5 style="margin-left: 2.5%; "><b>SEXO:</b></h5>

            <div style="margin-left: 2.5%; " class="inputBox">
                <input type="radio" id="feminino" name="txtgenero" value="feminino"
                    value="<?php echo $result->sexo; ?>">
                <label for="feminino"><b>Feminino</b></label>
                <br>
                <input type="radio" id="masculino" name="txtgenero" value="masculino">
                <label for="masculino"><b>Masculino</b></label>
                <br>
                <input type="radio" id="outro" name="txtgenero" value="outro">
                <label for="outro"><b>Outro</b></label>
                <br><br>
            </div>
            <div style="margin-left: 2.5%; " class="inputBox">
                <label for="data_nascimento"><b>DATA DE NASCIMENTO:</b></label>
                <input style="margin-left: 1.2%; " type="date" name="txtdata_nascimento" id="data_nascimento"
                    value="<?php echo $result->data_de_nascimento; ?>">
            </div>

            <div class="inputBox">
                <input style="margin-top: 5%;" type="password" name="txtsenha" id="senha" class="inputUser"
                    value="<?php echo $result->senha; ?>">
                <label for="senha" class="labelInput"> Senha</label>
                <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho"
                    class="olho">
            </div>

            <div id="voltar">
                <button class="voltar"><a href="loginU.html">VOLTAR</a></button>

            </div>

            <div id="voltar">
                <button id="submit" class="submit" type="submit" name="submit" value="Entrar"> Salvar </button>
            </div>



    </div>

    </form>
    </div>
    <script>
        let btn = document.querySelector('#olho');

        btn.addEventListener('click', function () {

            let input = document.querySelector('#senha');

            if (input.getAttribute('type') == 'password') {
                input.setAttribute('type', 'text');
            } else {
                input.setAttribute('type', 'password');
            }
        });
    </script>
</body>

</html>