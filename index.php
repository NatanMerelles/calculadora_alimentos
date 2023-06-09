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
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="favicon.png">
</head>
<body>
	
    <header class="header">
			<div class="container flexible-menu">
				<h1 class="title">Calc.food</h1>

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
					<form class="search" action="index.php" method="get">
						<input class="input search-input" type="search" name="search" placeholder="Pesquisar Alimento" tabindex="1" />
						<button class="btn" type="submit">Buscar</button>
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
								<div class="list">
									<div class="list-item">
										<h2 class="page-title page-title-sm">'.$alimento['nm_alimento'].'</h2>
										<h3 class="page-subtitle page-subtitle-sm">'.$alimento['descricao'].'</h3>
									</div>
									<div class="">
										<div class="square square-medium">
											<img class="square-content" src="'.$alimento["file_link"].'" />
										</div>
									</div>
								</div>
								<div class="mb-1">
									
								</div>
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