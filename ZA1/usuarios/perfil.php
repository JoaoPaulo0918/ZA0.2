<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERFIL | ZA</title>
    <link rel="stylesheet" href="./CssU/perfil.css">
</head>

<body>
    <header>
        <h1>PERFIL USUÁRIO</h1>
    </header>
    <main>
        <div class="infos">

            <a class='btn btn-sm btn-primary' href="edicao.php?cpf=user->cpf;" title='Editar'>
                <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='pencil'
                    viewBox='0 0 16 16'>
                    <path
                        d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z' />
                </svg>
            </a>

            <img class="logo" src="./imagensU/perfil.png">


            <hr style="margin-top: 10%;">


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
                    if (count($result) > 0) {
                        // Autenticação bem-sucedida   
                        ?>

                        <p>NOME:
                            <?php echo $result->nome . "<br>"; ?>
                        </p>

                        <p>CPF:
                            <?php echo $result->cpf . "<br>"; ?>
                        </p>

                        <p>E-MAIL:
                            <?php echo $result['email'] . "<br>"; ?>
                        </p>

                        <p>TELEFONE:
                            <?php echo $result['fone'] . "<br>"; ?>
                        </p>

                        <p>DATA DE NASCIMENTO:
                            <?php echo $result['data_de_nascimento'] . "<br>"; ?>
                        </p>

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
        <a href="principal.php"> <img class="inicio   " src="./imagensU/inicio.png   "> </a>
        <a href="historico.php"> <img class="historico" src="./imagensU/historico.png"> </a>
        <a href="carteira.php "> <img class="carteira " src="./imagensU/carteira.png "> </a>
        <a href="veiculos.php "> <img class="carro    " src="./imagensU/carro.png"> </a>
        <a href="perfil.php   "> <img class="perfil   " src="./imagensU/perfil.png  "> </a>
    </nav>




</body>

</html>