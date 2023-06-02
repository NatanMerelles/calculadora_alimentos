<?php
require_once("banco.php");
require_once("model.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
    <title>Pesquisar</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
	
    <header class="header">
			<div class="container flexible-menu">
				<h1 class="title">Calculadora</h1>

				<ul class="menu">
					<li class="menu-item">
						<a href="login.php">Admin</a><BR>
					</li>
				</ul>
			</div>

			
		</header>

		<main class="content">
			<div class="container">
				<div style="margin-bottom: 1rem;">
					<form action="index.php" method="get">
						<input type="search" name="search" placeholder="Pesquisar Alimento" tabindex="1" />
					</form>
				</div>

				

				<?php 
					if($_GET && $_GET['search']){
						echo '
							<h2 class="page-title">
								Exibindo Resultados Para: '.$_GET['search'].'
							</h2>
						';
						$alimentos = search_alimentos($_GET['search']);

						foreach ($alimentos as $alimento){
							echo '
								<h2 class="page-title page-title-sm">'.$alimento['nm_alimento'].'</h2>
								<table class="table">
									<thead>
										<tr>
											<th>Nutriente</th>
											<th>Valor</th>
										</tr>
									<thead>
									<tbody>
										<tr>
											<td>Calorias</td>
											<td>'.$alimento['caloria'].'</td>
										</tr>
										<tr>
											<td>Carboidratos</td>
											<td>'.$alimento['carboidrato'].'</td>
										</tr>
										<tr>
											<td>Proteinas</td>
											<td>'.$alimento['proteina'].'</td>
										</tr>
										<tr>
											<td>Gorduras</td>
											<td>'.$alimento['gordura'].'</td>
										</tr>
									</tbody>
								</table>
							';
						};
					};
				?>
			</div>  
		</main>

		<footer class="footer">
		</footer>
</body>
</html>