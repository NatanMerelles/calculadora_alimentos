<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
    <title>Pesquisar</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
			<div class="container flexible-menu">
				<h1 class="title">Calc.food</h1>

				<ul class="menu">
					<li class="menu-item">
						<a href="index.php">Pagina Inicial</a><BR>
					</li>
				</ul>
			</div>
		</header>

		<main class="content">
			<div class="container">
			<form action="sessao_verifica_login.php" method="POST">

			<div class="mb-1">
				<label class="label"  for="nome">Usuário</label>
				<input class="input" type="text" name="usuario" id="usuario">
			</div>
			<div class="mb-1">
				<label class="label" for="nome">Senha</label>
				<input class="input" type="password" name="senha" id="senha">
			</div>

			<?php
				if($_GET && $_GET['error']){
					echo '<p class="text text-danger mb-1">Usuário e/ou senha inválidos<p/>';
				}
			?>

			<button type="submit" class="btn">Login</button>
			</form>
			</div>  
		</main>

		<footer class="footer">
		</footer>
</body>