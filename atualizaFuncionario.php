<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./CSS/cadastroc.css">
    <title>Atualizar Funcionario</title>

</head>

<body>
    <header class="cadastro-cachorro">
        <main>
            <div class="header-1">
                <div class="logo">
                    <img src="IMG/logo.jpeg" height="120" />
                </div>
                <div class="botao-inicio-login">
                    <ul>
                        <li>
                            <a href="">
                                <h3>MENU</h3>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h3>SOBRE</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <header class="linha-1"></header>
    </header>
    <header>
    <div>

</head>
<body>
<?php require 'conectaBD.php'; ?>

    <div>

        <p>
            <div>
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
				$id=$_GET['id'];

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

				// Faz Select na Base de Dados
				$sql = "SELECT Nome, Senha, Id_Instituicao, cpf, Cargo, Id_Email from funcionario where Id = $id";
				
				//Inicio DIV form
				echo "<div class='w3-responsive w3-card-4'>"; 
				if ($result = mysqli_query($conn, $sql)) {
						if (mysqli_num_rows($result) > 0) {
						// Apresenta cada linha da tabela
							while ($row = mysqli_fetch_assoc($result)) {
				?>
                    <form id="cadastro" action="atualizaFuncionario_exe.php" method="post" onsubmit="return check(this.form)" enctype="multipart/form-data">
                        <div class="form">
                            <label for="text"> Cadastro de Funcionário</label>
                            <label for="name"> Nome 
                                <input type="text" name="nome" value="<?php echo $row['Nome']; ?>">
                            </label>
                            <label for="email"> Email 
                                <input name="email" value="<?php echo $row['Id_Email']; ?>">
                            </label>

                            <label for="password"> Senha 
                                <input type="password" name="senha" value="<?php echo $row['Senha']; ?>">
                            </label>

                            <label for="number"> CPF
                                <input type="number" name="cpf" value="<?php echo $row['cpf']; ?>">
                            </label>

                            <label for="name"> Cargo 
                                <input type="text" name="cargo" value="<?php echo $row['Cargo']; ?>">
                            </label>

                            <label for="name"> id instituicao 
                                <input type="text" name="id" value="<?php echo $row['Id_Instituicao']; ?>">
                            </label>

                            <label for="submit"> 
                                <button type="submit"><b>Atualizar</b></button>
                            </label>

                        </div>
                    </form>
								
			<?php 
							}
						}
				}
				else {
					echo "Erro executando UPDATE: " . mysqli_error($conn);
				}
				echo "</div>"; //Fim DIV form
				mysqli_close($conn); //Encerra conexao com o BD

			?>

			</div>
		</p>
	</div>

<!-- FIM PRINCIPAL -->
</div>
<!-- Inclui RODAPE.PHP  -->
<?php require 'rodape.php';?>

</body>
</html>


