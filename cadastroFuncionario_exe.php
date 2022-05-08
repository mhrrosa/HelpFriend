<html>
	<head>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="CSS/cadastroc.css">
		<style>
			.img-rodape {
				display: block;
				margin-top: 30px;
				margin-left: auto;
				margin-right: auto;
				margin-bottom: 25px;
			}
		</style>
		<title>Help Friend</title>
		<link rel="icon" type="image/jpg" href="IMG/logo_icone.jpg"/>

    </head>



<body>
	<header class="cadastro-cachorro">
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
	<?php require 'conectaBD.php'; ?>
	<div class="w3-main w3-container" style="">

	<div class="w3-panel w3-padding-large w3-card-4 w3-light-brown">

	<h1 class="w3-xxlarge">Registro de Funcionario</h1>
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
				echo "<div class='w3-responsive w3-card-4'>";
				if ($result = mysqli_query($conn, $sql)) {
					echo "Um registro adicionado!";
				} else {
					echo "Erro executando INSERT: " . mysqli_error($conn);
				}
				echo "</div>";
				mysqli_close($conn);  //Encerra conexao com o BD


		?>
