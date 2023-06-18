<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERFIL | ZA</title>
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
    <link rel="stylesheet" href="./assetsU/dados.css">
</head>

<body>
    <header>
        <h1>PERFIL USUÁRIO</h1>
    </header>
    <main>
        <div class="infos">

            

            <img class="logo" src="../imagens/perfil.png">

            <?php
            session_start();

            include_once('../conexao/conexao.php');

            try {

                // Verifica se o formulário de login foi submetido
                if (isset($_POST['cpf_usuario']) && isset($_POST['senha_usuario'])) {

                    $_SESSION['cpf_usuario'] = $_POST['cpf_usuario'];
                    $_SESSION['senha_usuario'] = $_POST['senha_usuario'];

                    // Query SELECT específica com base no cpf e senha
                    $sql = "SELECT * FROM usuario WHERE cpf = :cpf AND senha = :senha";

                    // Prepara a consulta
                    $stmt = $pdo->prepare($sql);

                    // Associa os valores aos parâmetros
                    $stmt->bindValue(':cpf', $_SESSION['cpf_usuario']);
                    $stmt->bindValue(':senha', $_SESSION['senha_usuario']);

                    // Executa a consulta
                    $stmt->execute();

                    // Obtém os resultados
                    $result = $stmt->fetch(PDO::FETCH_OBJ);

                    // Verifica se há um resultado
                    if ($result) {
                        // Autenticação bem-sucedida   
                        ?>

                        <hr style="margin-top: 10%;">
                        <div class="um">
                <a href="./sair.php" class="btn btn-danger me-5">Sair</a>

                <a class='btn btn-sm btn-primary' href='edicao.php?id=<?php echo $result->id; ?>' title="Editar">
                    <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='pencil'
                        viewBox='0 0 16 16'>
                        <path
                            d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z' />
                    </svg>
                </a>
            </div>
                        <p>NOME:
                            <?php echo $result->nome . "<br>"; ?>
                        </p>
                        <hr>
                        <p>CPF:
                            <?php echo $result->cpf . "<br>"; ?>
                        </p>
                        <hr>
                        <p>E-MAIL:
                            <?php echo $result->email . "<br>"; ?>
                        </p>
                        <hr>
                        <p>TELEFONE:
                            <?php echo $result->fone . "<br>"; ?>
                        </p>
                        <hr>
                        <p>DATA DE NASCIMENTO:
                            <?php echo $result->data_de_nascimento . "<br>"; ?>
                        </p>
                        <hr>

                        <a href="sair.php" class="sair">Sair</a>
                    <?php }
                } else {
                    // Autenticação falhou
                    echo "Credenciais inválidas!";
                }
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
            ?>
        </div>
    </main>

    <nav>
        <a href="index.php"> <img class="inicio   " src="../imagens/inicio.png   "> </a>
        <a href="historico.php"> <img class="historico" src="../imagens/historico.png"> </a>
        <a href="carteira.php "> <img class="carteira " src="../imagens/carteira.png "> </a>
        <a href="veiculos.php "> <img class="carro    " src="../imagens/carro.png    "> </a>
        <a href="perfil1.php   "> <img class="perfil   " src="../imagens/perfil.png   "> </a>
    </nav>




</body>

</html>