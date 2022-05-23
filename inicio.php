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
            <div class="w3-code cssHigh notranslate">  
       <!-- Acesso ao BD-->
            <?php

                // Cria conexão
                $conn = mysqli_connect($servername, $username, $password, $database);

                // Verifica conexão 
                if (!$conn) {
                    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
                }
                // Configura para trabalhar com caracteres acentuados do português
                mysqli_query($conn,"SET NAMES 'utf8'");
                mysqli_query($conn,'SET character_set_connection=utf8');
                mysqli_query($conn,'SET character_set_client=utf8');
                mysqli_query($conn,'SET character_set_results=utf8');

                // Faz Select na Base de Dados
                $sql = "SELECT c.id as id, c.Nome as Nome, r.Nome as Raca, c.Ano_nascimento as Ano_nascimento, c.Porte as Porte, c.Imagem as Imagem FROM cachorro c, raca r where c.Id_Raca = r.Id";
                class cachorro {
                    public $nome;
                    public $raca;
                    public $ano_nascimento;
                    public $porte;
                    public $imagem;
                }

                $item = array();

                if (mysqli_num_rows($sql) > 0) {
                    print("Hello World");
                    $item[0] -> new cachorro();
                    $item[0] -> nome = $row'['Nome']';
                    // $item[mysqli_num_rows[($result)]] => raca = $row['Raca'];
                    // $item[mysqli_num_rows[($result)]] => ano_nascimento = $row['Ano_Nascimento'];
                    // $item[mysqli_num_rows[($result)]] => porte = $row['Porte'];
                    // $item[mysqli_num_rows[($result)]] => imagem = $row['Imagem'];
                }
                foreach($item as $key => $value) {

            ?>

        </div>
    </div>

    <footer style="background-color: white; margin-top: 100px">
        <header class="linha-1"></header>
        <img class="img-rodape" src="IMG/logo_verticalpng.png" style="height: 200px; margin-left: 43%">
        <p class="copyright" style="text-align: center;">&copy; Copyright Help Friend - 2022</p>
    </footer>
</body>
</html>