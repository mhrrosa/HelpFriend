<!DOCTYPE html>

</html>
<head>
    <title>Help Friend</title>
    <link rel="icon" type="image/jpg" href="IMG/logo_icone.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .w3-theme {
				padding-left: 20px;
                color: black !important;
                background-color: white !important
            }

			.w3-btn {
				border: 1px solid rgb(235, 235, 235);
			}

            .w3-code {
                border-left: 10px solid rgb(197, 146, 83)
            }

            .myMenu {
                margin-bottom: 150px
            }

			.label_exclusao {
				color: black;
				text-align: start;
			}

			.img-rodape {
				display: block;
				margin-top: 30px;
				margin-left: auto;
				margin-right: auto;
				margin-bottom: 25px;
       		}
        </style>
    <link rel="stylesheet" type="text/css" href="CSS/cadastrof.css"/>
</head>
<header class="cadastro-funcionario">
    <main>
        <div class="header-1">
            <div class="logo">
				<img src="IMG/logopng.png" height="130" />
            </div>
            <div class="botao-inicio-login">
                <ul>
                    <li>
						<a href="" style="color: black; text-decoration: none;">
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
<div class="w3-main w3-container">

    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <h1 class="w3-xxlarge">Exclusão de Funcionários</h1>

        <p class="w3-large">
            <div class="w3-code cssHigh notranslate">
                <!-- Acesso em:-->
                <?php

                date_default_timezone_set("America/Sao_Paulo");
                $data = date("d/m/Y H:i:s", time());
                echo "<p class='w3-small' > ";
                echo "Acesso em: ";
                echo $data;
                echo "</p> "
                ?>

                <!-- Acesso ao BD-->
				<?php
	
				// Cria conexão
				$conn = mysqli_connect($servername, $username, $password, $database);

				// Verifica conexão
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				// Configura para trabalhar com caracteres acentuados do português
				mysqli_query($conn,"SET NAMES 'utf8'");
				mysqli_query($conn,'SET character_set_connection=utf8');
				mysqli_query($conn,'SET character_set_client=utf8');
				mysqli_query($conn,'SET character_set_results=utf8');

				$id=$_GET['id'];
				
				// Faz Select na Base de Dados
				$sql = "SELECT Id, Nome, Senha, cpf, cargo FROM funcionario";
				echo "<div class='w3-responsive w3-card-4'>"; //Inicio form
				 if ($result = mysqli_query($conn, $sql)) {
						if (mysqli_num_rows($result) > 0) {
						// Apresenta cada linha da tabela
							while ($row = mysqli_fetch_assoc($result)) {
								
				?>
								<div class="w3-theme">
									<h2>ID do Funcionário COD: <?php echo $row['Id']; ?></h2>
								</div>
								<form class="w3-container" action="deletarFuncionario_exe.php" method="post" onsubmit="return check(this.form)">
									<input type="hidden" id="Id" name="Id" value="<?php echo $row['Id']; ?>">
									<p>
									<label class="label_exclusao"><b>Nome: </b> <?php echo $row['Nome']; ?> </label></p>
									<p>
									<label class="label_exclusao"><b>Senha: </b><?php echo $row['Senha']; ?></label></p>
									<p>
									<label class="label_exclusao"><b>CPF: </b><?php echo $row['cpf'] ?></label></p>
									<p>
									<label class="label_exclusao"><b>Cargo: </b><?php echo $row['cargo']; ?></label></p>
									<p>
									<input type="submit" value="Excluir" class="w3-btn w3-red" >
									<input type="button" value="Cancelar" class="w3-btn" onclick="window.location.href='mostrarFuncionario.php'"></p>
								</form>
			<?php 
							}
						}
				}
				else {
					echo "Erro executando DELETE: " . mysqli_error($conn);
				}
				echo "</div>"; //Fim form
				mysqli_close($conn);  //Encerra conexao com o BD

			?>

			</div>
		</p>
	</div>
<!-- FIM PRINCIPAL -->
</div>
<footer style="background-color: white; margin-top: 100px">
    <header class="linha-1"></header>
    <img class="img-rodape" src="IMG/logo_verticalpng.png" style="height: 200px; text-align:center;">
    <p class="copyright" style="text-align: center;">&copy; Copyright Help Friend - 2022</p>
</footer>
</body>
</html>