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

            .img-rodape {
                display: block;
                margin-top: 30px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 25px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="CSS/cadastrof.css">
        <title>Cachorros - Help Friend</title>
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

        <div class="w3-panel w3-padding-large w3-card-4 w3-light-dark">
            <h1 class="w3-xxlarge"style="margin-left:43%">Cachorros</h1>

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

                    $sql = "SELECT id, Nome, Raca, Ano_nascimento,Porte FROM cachorro";
                    echo "<div class='w3-responsive w3-card-4'>";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo "<table class='w3-table-all'>";
                        echo "	<tr>";
                        echo "	  <th>Id</th>";
                        echo "	  <th>Nome</th>";
                        echo "	  <th>Raça</th>";
                        echo "	  <th>Ano Nascimento</th>";
                        echo "	  <th>Porte</th>";
                        echo "	  <th> </th>";
                        echo "	  <th> </th>";
                        echo "	</tr>";
                        if (mysqli_num_rows($result) > 0) {
                            // Apresenta cada linha da tabela
                            while ($row = mysqli_fetch_assoc($result)) {
                                $dataN = explode('-', $row["Ano_nascimento"]);
                                $ano = $dataN[0];
                                $mes = $dataN[1];
                                $dia = $dataN[2];
                                $cod = $row["id"];
                                $nova_data = $ano;
                                echo "<tr>";
                                echo "<td>";
                                echo $cod;
                                echo "</td><td>";
                                echo $row["Nome"];
                                echo "</td><td>";
                                echo $row["Raca"];
                                echo "</td><td>";
                                echo $nova_data;
                                echo "</td><td>";
                                echo $row["Porte"];
                                echo "</td><td>";
                                
                                //Atualizar e Excluir registro de prof
                ?>
                            
                            <a href='atualizacachorro.php?id=<?php echo $cod; ?>'><img src='IMG/editar.png' title='Editar Cachorro' width='32'></a>
                            </td><td>
                            <a href='deletarCachorro.php?id=<?php echo $cod; ?>'><img src='IMG/excluir.png' title='Excluir Cachorro' width='32'></a>
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
    </div>
    <footer style="background-color: white; margin-top: 100px">
        <header class="linha-1"></header>
        <img class="img-rodape" src="IMG/logo_verticalpng.png" style="height: 200px; text-align:center;">
        <p class="copyright" style="text-align: center;">&copy; Copyright Help Friend - 2022</p>
    </footer>
</body>

