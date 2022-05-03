<body>
	<?php require 'conectaBD.php'; ?>

    <?php

				$nome    = $_POST['nome'];
				$email = $_POST['email'];
                $senha = $_POST['senha'];
                $cpf = $_POST['cpf'];
                $cargo = $_POST['cargo'];
				$id_instituicao = $_POST['id'];


                $sql = "INSERT INTO funcionario(Nome, Id_email, Senha,Id_Instituicao,cargo,cpf) VALUES ('$nome','$email', '$senha','$id_instituicao','$cargo','$cpf')";

                // Cria conexão
				$conn = mysqli_connect($servername, $username, $password, $database);

				// Verifica conexão 
				if (!$conn) {
					echo "</table>";
					echo "</div>";
					die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
				}

                // Configura para trabalhar com caracteres acentuados do português
				mysqli_query($conn, "SET NAMES 'utf8'");
				mysqli_query($conn, 'SET character_set_connection=utf8');
				mysqli_query($conn, 'SET character_set_client=utf8');
				mysqli_query($conn, 'SET character_set_results=utf8');

                // Faz Select na Base de Dados
				echo "<div>";
				if ($result = mysqli_query($conn, $sql)) {
					echo "Um registro adicionado!";
				} else {
					echo "Erro executando INSERT: " . mysqli_error($conn);
				}
				echo "</div>";
				mysqli_close($conn);  //Encerra conexao com o BD


		?>
