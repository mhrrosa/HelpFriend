<!DOCTYPE html>
<html>
	<head>
	  <title>Exclusão de Funcionário - Help Friend</title>
	  <link rel="icon" type="image/jpg" href="IMG/logo_icone.jpg"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <link rel="stylesheet" type="text/css" href="CSS/cadastrof.css"/>
	  <style>
            .w3-theme {
                color: rgb(197, 146, 83) !important;
                background-color: #380077 !important
            }

            .w3-code {
                border-left: 10px solid rgb(197, 146, 83)
            }

            .myMenu {
                margin-bottom: 150px
            }

			.img-rodape {
				display: block;
				margin-top: 30px;
				margin-left: auto;
				margin-right: auto;
				margin-bottom: 25px;
        	}
      </style>
	</head>
<header class="cadastro-funcionario">
    <main>
        <div class="header-1">
            <div class="logo">
				<img src="IMG/logopng.png" height="130" />
            </div>
            <div class="botao-inicio-login">
                <ul>
                    <li><a href="" style="color: black; text-decoration: none;">
							<h3>MENU</h3>
						</a>
					</li>
                    <li>
						<a href="" style="color: black; text-decoration: none;">
							<h3>SOBRE</h3>
						</a>
					</li>
					<li>
                        <a href="" style="color: black; text-decoration: none;">
                            <h3>CONTATO</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</header>
<header class="linha-1"></header>

<body>
<!-- Inclui MENU.PHP  -->
<?php require 'conectaBD.php'; ?>

<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
<div class="w3-main w3-container" style="margin-left:10px;margin-top:117px;">

	<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
	<h1 class="w3-xxlarge">Exclusão de Funcionários</h1>

	<p class="w3-large">
		<div class="w3-code cssHigh notranslate">
		<!-- Acesso em:-->
			<?php

			date_default_timezone_set("America/Sao_Paulo");
			$data = date("d/m/Y H:i:s",time());
			echo "<p class='w3-small' > ";
			echo "Acesso em: ";
			echo $data;
			echo "</p> "
			?>

			<!-- Acesso ao BD-->
			<?php
						
				// Cria conexão
				$conn = mysqli_connect($servername, $username, $password, $database);

				// ID do registro a ser excluído
				$id = $_POST['Id'];

				// Verifica conexão
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// Faz DELETE na Base de Dados
				$sql = "DELETE FROM funcionario WHERE Id = $id";

				echo "<div>";
				if ($result = mysqli_query($conn, $sql)) {
						echo "Um funcionário excluído!";
				} else {
					echo "Erro executando DELETE: " . mysqli_error($conn);
				}
				echo "</div>";
				mysqli_close($conn);  //Encerra conexao com o BD

			?>
		</div>
	</div>
</div>
<footer style="background-color: white; margin-top: 100px">
    <header class="linha-1"></header>
    <img class="img-rodape" src="IMG/logo_verticalpng.png" style="height: 200px; text-align:center;">
    <p class="copyright" style="text-align: center;">&copy; Copyright Help Friend - 2022</p>
</footer>
</body>
</html>