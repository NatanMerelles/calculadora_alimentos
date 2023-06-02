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
				<h1 class="title">Calculadora</h1>

                <?php
					require_once("sessao_opcoes.php");
				?>
			</div>
		</header>

		<main class="content">
			<div class="container">

                <h2 class="page-title">
					Editando Alimento: 
                    <?php
					    echo $_GET['alimento_id'];
				    ?>
				</h2>

                <form class="form">
                    <div class="form-field">
                        <label>Titulo:</label>
                        <input type="text" placeholder="Digite o valor" value="Arroz" />
                    </div>

                    <div class="form-field">
                        <label>Calorias:</label>
                        <input type="text" placeholder="Digite o valor" value="200" />
                    </div>

                    <div class="form-field">
                        <label>Carboidratos:</label>
                        <input type="text" placeholder="Digite o valor" value="20" />
                    </div>

                    <div class="form-field">
                        <label>Proteinas:</label>
                        <input type="text" placeholder="Digite o valor" value="10" />
                    </div>


                    <div class="form-field">
                        <label>Gorduras:</label>
                        <input type="text" placeholder="Digite o valor" value="5" />
                    </div>

                    <div>
                        <button type="submit">Salvar</button>
                    </div>
                </form>
			</div>  
		</main>

		<footer class="footer">
		</footer>
</body>
</html>