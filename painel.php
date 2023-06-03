<?php
	require_once("banco.php");
	require_once("model.php");
	require_once("sessao_testa_sessao.php");
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Painel</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>

<header class="header">
			<div class="container flexible-menu">
				<h1 class="title">Calculadora</h1>

				<?php
					require_once("sessao_opcoes.php");
				?>
			</div>
		</header>

		<main class="content">
			<div class="container">

				<h2 class="page-title">
					Listagem de Alimentos:
				</h2>

				<table class="table">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Calorias</th>
							<th>Cadastrado Por</th>
							<th>Ações</th>
						</tr>
					<thead>
					<tbody>
					<?php 
							$alimentos = list_alimentos();

							foreach ($alimentos as $alimento){
								echo '
									<tr>
										<td>'.$alimento['nm_alimento'].'</td>
										<td>'.$alimento['caloria'].'</td>
										<td>'.$alimento['id_usuario'].'</td>
										<td>
											<a href="editar.php?alimento_id='.$alimento['id_alimento'].'">Editar</a>
											<a href="excluir.php?alimento_id='.$alimento['id_alimento'].'">Excluir</a>
										</td>
									</tr>
								';
							}
						?>
					</tbody>

				</table>
			</div>  
		</main>

		<footer class="footer">
		</footer>
</body>
</html>
