<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Veículos</title>
    <link rel="stylesheet" href="./assetsU/addvei.css">
</head>
<body>
    <header><h1>VEÍCULOS</h1></header>

<main>
    <div class="box">
        <form action=""  method="post"> 
        
            <h1>CADASTRO VEÍCULO</h1>
        
            <div class="inputBox">
            <input style="margin-top: 10%;" type="text" name="modelo" id="modelo" class="inputUser" required>
            <label for="modelo" class="labelInput">Modelo</label>
            </div>
            
            <div class="inputBox">
            <input style="margin-top: 5%;" type="text" name="placa" id="placa" class="inputUser" required>
            <label for="placa" class="labelInput">placa</label>
            </div>

            <div class="inputBox">
            <input style="margin-top: 5%;" type="text" name="cor" id="cor" class="inputUser" required>
            <label for="cor" class="labelInput">Cor</label>
            </div>

            <div class="inputBox">
            <input style="margin-top: 5%;" type="text" name="ano" id="ano" class="inputUser" required>
            <label for="ano" class="labelInput">Ano</label>
            </div>

            <div id="voltar">
                <a class="voltar" href="./veiculos.php">VOLTAR</a>
            
            </div>
            
            <div id="voltar">
                <button id="submit" class="submit" type="submit" name="submit" value="Entrar"> CADASTRAR </button>
            </div>
        </form>
    </div>
</main>

    <nav>
        <a href="index.php"> <img class="inicio" src="../imagens/inicio.png" ></a>
        <a href="historico.php"> <img class="historico" src="../imagens/historico.png" > </a>
        <a href="carteira.php"> <img class="carteira" src="../imagens/carteira.png" > </a>
        <a href="veiculos.php"> <img class="carro" src="../imagens/carro.png" > </a>
        <a href="perfil1.php"> <img class="perfil" src="../imagens/perfil.png" ></a>
    </nav>
        
</body>
</html>