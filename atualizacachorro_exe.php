<html>
    <head>
    </head>
    <body>
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
    </body>
</html>