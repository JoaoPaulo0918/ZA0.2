<?php
require_once 'conexao.php';
$select = $pdo->prepare('SELECT * FROM veiculos');
$select->execute();

$veiculos = $select->fetchAll(); //pega os dados que vem da variável select e deixa em um formato acessivel.
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos</title>
    <link rel="stylesheet" href="./css/veic.css">

</head>

<body>
    <header>
        <h1>VEÍCULOS</h1>
    </header>

    <main>



        <div class="infos">
            <div class="adicionar"><a href="addvei.php">ADICIONAR VEÍCULOS</a></div>
            <hr style="margin-top: 25px;">
            <div class="m-5">
                <table class="table text-white table-bg">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Cor</th>
                            <th scope="col">Ano</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($veiculos as $veiculo) { ?>
                            <tr>
                                <td>
                                    <?php echo $veiculo->id_veiculo; ?>
                                </td>
                                <td>
                                    <?php echo $veiculo->modelo; ?>
                                </td>
                                <td>
                                    <?php echo $veiculo->placa; ?>
                                </td>
                                <td>
                                    <?php echo $veiculo->cor; ?>
                                </td>
                                <td>
                                    <?php echo $veiculo->ano; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <nav>
        <a href="principal.php"> <img class="inicio" src="imagens/inicio.png"></a>
        <a href="historico.php"> <img class="historico" src="imagens/historico.png"> </a>
        <a href="carteira.php"> <img class="carteira" src="imagens/carteira.png"> </a>
        <a href="veiculos.php"> <img class="carro" src="imagens/carro.png"> </a>
        <a href="perfil.php"> <img class="perfil" src="imagens/perfil.png"></a>
    </nav>

</body>

</html>