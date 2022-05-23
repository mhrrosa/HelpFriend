
<html>
	<head>
	  <title>Atualização de Cachorro - Help Friend</title>
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
    <header class="cadastro-cachorro">
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
    <div class="w3-main w3-container" style="margin-left:10px;margin-top:117px;">

        <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
            <h1 class="w3-xxlarge">Exclusão de Cachorros</h1>

                <p class="w3-large">
                    <div class="w3-code cssHigh notranslate">

                    <?php require 'conectaBD.php'; ?>
                    <?php
                        $id =  $_POST['Id'];
                        $nome    = $_POST['nome'];
                        $ano = $_POST['ano'];
                        $porte = $_POST['porte'];
                        $raca = $_POST['raca'];
                        $id_instituicao = $_POST['id_instituicao'];

                        $conn = mysqli_connect($servername, $username, $password, $database);

                        // Verifica conexão 
                        if (!$conn) {
                            die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
                        }

                        // Configura para trabalhar com caracteres acentuados do português
                        mysqli_query($conn, "SET NAMES 'utf8'");
                        mysqli_query($conn, 'SET character_set_connection=utf8');
                        mysqli_query($conn, 'SET character_set_client=utf8');
                        mysqli_query($conn, 'SET character_set_results=utf8');

                        $sql = "UPDATE cachorro SET Nome = '$nome', Ano_Nascimento = '$ano', Porte = '$porte' , Raca = '$raca', Id_Instituicao = '$id_instituicao' WHERE Id = '$id'";

                        // Faz o Upadate na Base de Dados

                        if ($result = mysqli_query($conn, $sql)) {
                            echo "Um registro atualizado!";
                        } else {
                            
                            echo "Erro executando a atualização: " . mysqli_error($conn);
                        }
                        echo "</div>";
                        mysqli_close($conn);  //Encerra conexao com o BD


                    ?>
            </div>
        </div>
    </div>
    </body>
    <footer style="background-color: white; margin-top: 100px">
    <header class="linha-1"></header>
    <img class="img-rodape" src="IMG/logo_verticalpng.png" style="height: 200px; text-align:center;">
    <p class="copyright" style="text-align: center;">&copy; Copyright Help Friend - 2022</p>
</footer>
</body>
</html>
</html>