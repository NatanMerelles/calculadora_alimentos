<?php
	require_once("banco.php");
	require_once("model.php");
	require_once("sessao_testa_sessao.php");
?>

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
					Editando Alimento: 
                    <?php
					    echo $_GET['alimento_id'];
				    ?>
				</h2>

                <form class="form" action="edita.php" method="post">
                        <?php 
							$result = search_alimento_by_id($_GET['alimento_id']);
                            $alimento = $result[0];

                            echo '
                                <div class="form-field">
                                    <label class="label">Titulo:</label>
                                    <input class="input" type="text" name="nm_alimento" placeholder="Digite o valor" value="'.$alimento["nm_alimento"].'" />
                                </div>
            
                                <div class="form-field">
                                    <label class="label">Calorias:</label>
                                    <input class="input" type="text"  name="caloria" placeholder="Digite o valor" value="'.$alimento["caloria"].'" />
                                </div>
            
                                <div class="form-field">
                                    <label class="label">Carboidratos:</label>
                                    <input class="input" type="text" name="carboidrato" placeholder="Digite o valor" value="'.$alimento["carboidrato"].'" />
                                </div>
            
                                <div class="form-field">
                                    <label class="label">Proteinas:</label>
                                    <input class="input" type="text" name="proteina" placeholder="Digite o valor" value="'.$alimento["proteina"].'" />
                                </div>
            
                                <div class="form-field">
                                    <label class="label">Gorduras:</label>
                                    <input class="input" type="text" name="gordura" placeholder="Digite o valor" value="'.$alimento["gordura"].'" />
                                </div>

                                <input type="hidden" name="id_alimento" value="'.$alimento["id_alimento"].'" />
                            ';
						?>
                    <div>
                        <button class="btn btn-success" type="submit">EDITAR</button>
                    </div>
                </form>
			</div>  
		</main>

		<footer class="footer">
		</footer>
</body>
</html>