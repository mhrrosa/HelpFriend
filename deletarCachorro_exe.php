<!DOCTYPE html>
<html>
	<head>

	  <title>Help Friend</title>
	  <link rel="icon" type="image/jpeg" href="IMG/logo.jpeg"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="CSS/cadastroc.css"/>
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
      </style>
	</head>
<header class="cadastro-cachorro">
    <main>
        <div class="header-1">
            <div class="logo">
                <img src="IMG/logo.jpeg" height="120"/>
            </div>
            <div class="botao-inicio-login">
                <ul>
                    <li><a href=""><h3>MENU</h3></a></li>
                    <li><a href=""><h3>SOBRE</h3></a></li>
                </ul>
            </div>
        </div>
    </main>
</header>
<header class="linha-1"></header>

<body onload="w3_show_nav('menuProf')">
<!-- Inclui MENU.PHP  -->
<?php require 'conectaBD.php'; ?>

<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

	<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
	<h1 class="w3-xxlarge">Exclusão de Cachorros</h1>

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
				$sql = "DELETE FROM cachorro WHERE Id = $id";

				echo "<div class='w3-responsive w3-card-4'>";
				if ($result = mysqli_query($conn, $sql)) {
						echo "Um cachorro excluído!";
				} else {
					echo "Erro executando DELETE: " . mysqli_error($conn);
				}
				echo "</div>";
				mysqli_close($conn);  //Encerra conexao com o BD

			?>
		</div>
	</div>
</div>
</body>
</html>