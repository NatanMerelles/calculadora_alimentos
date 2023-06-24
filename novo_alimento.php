<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
    <title>Novo Alimento</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
			<div class="container flexible-menu">
				<h1 class="title">Calc.food</h1>

                <?php
					require_once("sessao_opcoes.php");
				?>
			</div>
		</header>

		<main class="content">
			<div class="container">

                <h2 class="page-title">
					Cadastro de Alimento:
				</h2>

                <form class="form" action="cadastra.php" method="post">
                    <?php
                        echo '
                            <input type="hidden" name="id_usuario" value="'.$_SESSION["usuario"]["id_usuario"].'" />
                        ';
                    ?>

                    <div class="form-field">
                        <label class="label">Titulo:</label>
                        <input class="input" type="text" name="nm_alimento" placeholder="Digite o valor" required />
                    </div>

                    <div class="form-field">
                        <label class="label">Calorias:</label>
                        <input class="input" type="text" name="caloria" placeholder="Digite o valor" required />
                    </div>

                    <div class="form-field">
                        <label class="label">Carboidratos:</label>
                        <input class="input" type="text" name="carboidrato" placeholder="Digite o valor" required />
                    </div>

                    <div class="form-field">
                        <label class="label">Proteinas:</label>
                        <input class="input" type="text" name="proteina" placeholder="Digite o valor" required />
                    </div>

                    <div class="form-field">
                        <label class="label">Gorduras:</label>
                        <input class="input" type="text" name="gordura" placeholder="Digite o valor" required />
                    </div>

                    <div>
                        <button class="btn" type="submit">Cadastrar</button>
                    </div>
                </form>
			</div>  
		</main>

		<footer class="footer">
		</footer>
</body>
</html>