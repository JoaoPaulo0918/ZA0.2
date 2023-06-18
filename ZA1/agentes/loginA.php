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
<h1>LOGIN AGENTE</h1>
<form action="" method="POST">

    <div class="caixa">
        <input class="user" type="text" name="Agente" placeholder="N° Agente">
    </div>
    
    <div class="caixa">    
        <input class="senha" id="password" type="password" name="senha" placeholder="Digite sua senha">
        <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
    </div>
    
    <div class="cadastrar">
        <a href="">ESQUECEU A SENHA ?</a>
        <a href="../agentes/cadastroA.php">CRIAR CONTA</a>
    </div>

    <div id="voltar">
        <button class="voltar"><a href="../home.php">VOLTAR</a></button>
    
    </div>
    
    <div id="voltar">
        <button class="submit" type="submit" name="submit" value="Entrar"> ENTRAR </button>
    </div>

    
</form>
        
    </div>
    
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
</body>
</html>