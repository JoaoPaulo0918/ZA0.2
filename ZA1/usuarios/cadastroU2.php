<?php

$nome = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
//retira qualquer codigo perigoso que vai entrar no input.

$cpf = filter_input(INPUT_POST, 'cpf_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
//retira qualquer codigo perigoso que vai entrar no input.

$email = filter_input(INPUT_POST, 'email_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
//retira qualquer codigo perigoso que vai entrar no input.

$telefone = filter_input(INPUT_POST, 'fone_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
//retira qualquer codigo perigoso que vai entrar no input.

$genero = filter_input(INPUT_POST, 'sexo_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
//retira qualquer codigo perigoso que vai entrar no input.

$data_nasc = filter_input(INPUT_POST, 'data_de_nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
//retira qualquer codigo perigoso que vai entrar no input.

$senha = filter_input(INPUT_POST, 'senha_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
//retira qualquer codigo perigoso que vai entrar no input.

$erros = array();

// empty verifica se o campo esta vazio
if (empty($nome)) {
    array_push($erros, 'O campo nome nao pode ficar em branco!');
}

if (empty($cpf)) {
    array_push($erros, 'O campo cpf nao pode ficar em branco!');
}

if (empty($email)) {
    array_push($erros, 'O campo email nao pode ficar em branco!');
}

if (empty($telefone)) {
    array_push($erros, 'O campo telefone nao pode ficar em branco!');
}

if (empty($genero)) {
    array_push($erros, 'O campo genero nao pode ficar em branco!');
}

if (empty($data_nasc)) {
    array_push($erros, 'O campo data_nascimento nao pode ficar em branco!');
}

if (empty($senha)) {
    array_push($erros, 'O campo senha nao pode ficar em branco!');
}

if (count($erros) == 0) {
    //código de salvar os dados
    try {
        require_once '../conexao/conexao.php';

        $insert = $pdo->prepare('INSERT INTO usuario VALUES (:id, :nome, :cpf, :email, :fone, :sexo, :data_de_nascimento, :senha)');
        $insert->bindValue(':id', null);
        $insert->bindValue(':nome', $nome);
        $insert->bindValue(':cpf', $cpf);
        $insert->bindValue(':email', $email);
        $insert->bindValue(':fone', $telefone);
        $insert->bindValue(':sexo', $genero);
        $insert->bindValue(':data_de_nascimento', $data_nasc);
        $insert->bindValue(':senha', $senha);
        $insert->execute();

        header('Location: ../usuarios/loginU.php');

    } catch (PDOException $e) {
        //$e recebe os erros se ocorrerem e guarda nessa variavel.
        array_push($erros, 'Erro ao salvar os dados na tabela');
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
        }

        main {
            width: 340px;
            height: 200px;
            background-color: lightslategrey;
            margin-left: 7%;
        }

        main h1 {
            margin-left: 39%;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 26px;

        }

        main p {
            margin-left: 5%;
            margin-bottom: 15px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
        }

        main a {
            display: inline;
            text-align: center;
            background-color: lightgray;
            width: 100px;
            padding: 10px 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            color: black;
            border-radius: 10px;
            margin-left: 37%;
        }

        main a:hover {
            background-color: blue;
            color: aqua;
        }
    </style>

</head>

<body>

    <main>
        <h1>Erros</h1>
        <?php foreach ($erros as $e) { ?>
            <p>
                <?php echo $e; ?>
            </p>
        <?php } ?>
        <a href="javascript:history.back();">Voltar</a>
        <!--Serve para usar como voltar no navegador, mas sem perder os dados inseridos na tela. -->
    </main>
</body>

</html>