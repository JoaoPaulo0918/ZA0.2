<?php
session_start();

require_once '../conexao/conexao.php';

try {

    if (isset($_POST['cpf_usuario'], $_POST['senha_usuario'])) {
            
        $_SESSION['cpf_usuario'] = $_POST['cpf_usuario'];
        $_SESSION['senha_usuario'] = $_POST['senha_usuario'];

        $erros = array();

        // empty verifica se o campo esta vazio
        if (empty($cpf)) {
            array_push($erros, 'O campo cpf nao pode ficar em branco!');
        }

        if (empty($senha)) {
            array_push($erros, 'O campo senha nao pode ficar em branco!');
        }

        // Query SELECT específica com base no cpf e senha
        $sql = "SELECT cpf, senha FROM usuario WHERE cpf LIKE :cpf AND senha LIKE :senha";

        // Prepara a consulta
        $stmt = $pdo->prepare($sql);

        // Associa os valores aos parâmetros
        $stmt->bindValue(':cpf', $_SESSION['cpf_usuario']);
        $stmt->bindValue(':senha', $_SESSION['senha_usuario']);

        // Executa a consulta
        $stmt->execute();

        // Obtém os resultados
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verifica se há um resultado
        if ($result) {
            // Autenticação bem-sucedida
            header('Location: dados.php');

        } else {
            // Autenticação falhou
            echo "Credenciais inválidas!";
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

// Fecha a conexão
$pdo = null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | ZA</title>
    <link rel="stylesheet" href="../assets/login.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<body>
    <div class="login">
        <img class="logo" src="../imagens/logo.png">
<h1>LOGIN USUÁRIO</h1>
<form action="dados.php" method="post">

    <div class="caixa">
        <input  class="user" type="text" id="cpf_usuario" name="cpf_usuario" placeholder="CPF">
    </div>
    
    <div style="margin-bottom: 0;" class="caixa">    
        <input class="senha" id="senha_usuario" type="password" name="senha_usuario" placeholder="Digite sua senha">
        <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
    </div>
    
    <div class="cadastrar">
        <a href="">ESQUECEU A SENHA ?</a>
        <a href="../usuarios/cadastroU.php">CRIAR CONTA</a>
    </div>

    <div id="voltar">
        <button class="voltar"><a href="../home.php">VOLTAR</a></button>
    
    </div>
    
    <div id="voltar">
        <button class="submit" type="submit" name="submit" value="Entrar" > ENTRAR </button>
    </div>

        
</form>
        
    </div>
    

</body>

</html>
<script>
    let btn = document.querySelector('#olho');

    btn.addEventListener('click', function () {

    let input = document.querySelector('#password');

    if (input.getAttribute('type') == 'password') {
        input.setAttribute('type', 'text');
    } else {
        input.setAttribute('type', 'password');
    }
    });
</script>