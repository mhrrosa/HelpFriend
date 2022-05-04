<?php

    $id =  $_POST['Id']
    $nome    = $_POST['Nome'];
    $senha = $_POST['Senha'];
    $cpf = $_POST['cpf'];
    $cargo = $_POST['Cargo'];
    $id_instituicao = $_POST['Id_Instituicao'];
    $id_email = $_POST['id_email'];


    $sql = "UPDATE funcionario SET Nome = '$nome', Senha = '$senha', cpf = '$cpf', Cargo = '$cargo', id_email = '$id_email', Id_Instituicao = '$id_instituicao' WHERE Id = $id";

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
        echo "Um registro atualizado!";
    } else {
        echo "Erro executando a atualização: " . mysqli_error($conn);
    }
    echo "</div>";
    mysqli_close($conn);  //Encerra conexao com o BD


?>
