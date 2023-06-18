<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Veículos</title>
    <link rel="stylesheet" href="./css/addvei.css">
</head>
<body>
    <header><h1>VEÍCULOS</h1></header>

<main>
    <div class="box">
        <form action=""  method="post"> 
        
            <h1>CADASTRO VEÍCULO</h1>
        
            <div class="inputBox">
            <input style="margin-top: 5%;" type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput">Nome Completo</label>
            </div>
        
            <div class="inputBox">
            <input type="text" name="email" id="email" class="inputUser" required>
            <label for="email" class="labelInput">E-mail</label>
            </div>
            
            <div class="inputBox">
            <input type="text" name="cpf" id="CPF" class="inputUser" required>
            <label for="cpf" class="labelInput">CPF</label>
            </div>
            <div id="voltar">
                <button class="voltar"><a href="veiculos.php">VOLTAR</a></button>
            
            </div>
            
            <div id="voltar">
                <button id="submit" class="submit" type="submit" name="submit" value="Entrar"> CADASTRAR </button>
            </div>
        </form>
    </div>
</main>

    <nav>
        <a href="principal.php"> <img class="inicio" src="./imagensC/inicio.png" ></a>
        <a href="historico.php"> <img class="historico" src="./imagensC/historico.png" > </a>
        <a href="carteira.php"> <img class="carteira" src="./imagensC/carteira.png" > </a>
        <a href="veiculos.php"> <img class="carro" src="./imagensC/carro.png" > </a>
        <a href="perfil.php"> <img class="perfil" src="./imagensC/perfil.png" ></a>
    </nav>
</body>
</html>