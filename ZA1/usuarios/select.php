<?php
/*require_once 'conexao.php';
$select = $con->prepare('SELECT * FROM usuario');
$select->execute();

$usuario = $select->fetchAll(); //pega os dados que vem da variável select e deixa em um formato acessivel.



foreach ($usuario as $usu) { ?>
	<p>NOME:
		<?php echo $usu->nome_usuario; ?>
	</p>

	<p>CPF:
		<?php echo $usu->cpf_usuario; ?>
	</p>

	<p>E-MAIL:
		<?php echo $usu->email_usuario; ?>
	</p>

	<p>TELEFONE:
		<?php echo $usu->fone_usuario; ?>
	</p>

	<p>DATA DE NASCIMENTO:
		<?php echo $usu->data_de_nascimento; ?>
	</p>


	<a href="sair.php" class="sair">Sair</a>

<?php } ?>