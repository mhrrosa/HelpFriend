<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
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
    <link rel="stylesheet" type="text/css" href="./CSS/cadastrof.css">
    <title>Help Friend</title>
    <link rel="icon" type="image/jpg" href="IMG/logo_icone.jpg"/>
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
<body  onload="w3_show_nav('menuProf')">
    <!-- Inclui MENU.PHP  -->
    <?php require 'conectaBD.php'; ?>

    <!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
    <div class="w3-main w3-container">

        <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
            <h1 class="w3-xxlarge" style="margin-left:40%">Funcionários</h1>

            <p class="w3-large">
            <p>
            <div class="w3-code cssHigh notranslate">  
       <!-- Acesso ao BD-->
        <?php

        // Cria conexão
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Verifica conexão 
        if (!$conn) {
            echo "</table>";
            echo "</div>";
            die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
        }
        // Configura para trabalhar com caracteres acentuados do português
        mysqli_query($conn,"SET NAMES 'utf8'");
        mysqli_query($conn,'SET character_set_connection=utf8');
        mysqli_query($conn,'SET character_set_client=utf8');
        mysqli_query($conn,'SET character_set_results=utf8');

                    $sql = "SELECT id, Nome, Id_email,cpf,cargo FROM funcionario";
                    echo "<div class='w3-responsive w3-card-4'>";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo "<table class='w3-table-all'>";
                        echo "	<tr>";
                        echo "	  <th>Id</th>";
                        echo "	  <th>Nome</th>";
                        echo "	  <th>E-mail</th>";
                        echo "	  <th>CPF</th>";
                        echo "	  <th>Cargo</th>";
                        echo "	  <th> </th>";
                        echo "	  <th> </th>";
                        echo "	</tr>";
                        if (mysqli_num_rows($result) > 0) {
                            // Apresenta cada linha da tabela
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["id"];
                                echo "</td><td>";
                                echo $row["Nome"];
                                echo "</td><td>";
                                echo $row["Id_email"];
                                echo "</td><td>";
                                echo $row["cpf"];
                                echo "</td><td>";
                                echo $row["cargo"];
                                echo "</td><td>";
                                
                                //Atualizar e Excluir registro de prof
                ?>
                            
                            <a href='atualizaFuncionario.php?id=<?php echo $row["id"]; ?>'><img src='IMG/editar.png' title='Editar Funcionario' width='32'></a>
                            </td><td>
                            <a href='deletarFuncionario.php?id=<?php echo $row["id"]; ?>'><img src='IMG/excluir.png' title='Excluir Funcionario' width='32'></a>
                            </td>
                            </tr>
                <?php
                            }
                        }
                            echo "</table>";
                            echo "</div>";
                    } else {
                        echo "Erro executando SELECT: " . mysqli_error($conn);
                    }

                    mysqli_close($conn);

                ?>
            </div>
        </div>

