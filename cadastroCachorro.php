<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
        <title>Cadastro de Cachorro - Help Friend</title>
        <link rel="icon" type="image/jpg" href="IMG/logo_icone.jpg"/>
    </head>
    <body>
    <!-- CONEXÃO COM O BANCO DE DADOS -->
    <?php require 'conectaBD.php'; ?>
        <!-- CABEÇALHO -->
        <header class="cabecalho">
            <div>
                <img class="logo" src="IMG/logopng.png"/>
            </div>
            <div class="botao-cabecalho">
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
                    <li>
                        <a href="">
                            <h3>CONTATO</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <!-- LINHA DE DIVISÃO -->
        <header class="linha-divisao"></header>
        <!-- FORMULÁRIO -->
        <div class="formcadastro">
            <form id="cadastro" action="cadastroCachorro_exe.php" enctype="multipart/form-data" method="post">
                <div class="form">
                    <label class="titulo-form" for="text"><b>CADASTRO DE CACHORRO</b></label>
                    <label for="name"> Nome 
                        <input type="text" name="nome" required>
                    </label>
                    <label for="name"> Ano de Nascimento
                        <select name="ano" required>
                            <option class="indicacao-option" value="">Selecione o ano de nascimento:</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                        </select>
                    </label>
                    <label for="name"> Porte 
                        <select name="porte" required>
                            <option class="indicacao-option" value="">Selecione o porte desejado:</option>
                            <option value="Pequeno">Pequeno</option>
                            <option value="Médio">Medio</option>
                            <option value="Grande">Grande</option>
                        </select>
                    </label>
                    <label for="name"> Raça
                        <select name="raca" required>
                            <option class="indicacao-option" value="">Selecione a raça desejada:</option>
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

                        $sql = "SELECT Id, Nome from raca";

                        if ($result = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['Id'];
                                    $nome = $row['Nome'];
                    ?>

                            <option value="<?php echo $id ?>"><?php echo $nome ?></option>
                        
                    <?php
                                }
                            } else {
                                //ENCERRA CONEXÃO COM O BANCO DE DADOS
                                mysqli_close($conn);
                            }
                        }
                    ?>
                    </select>
                    </label>
                    <label for="name"> ID Instituição 
                            <input type="text" name="id_instituicao"required>
                    </label>
                    <div class = "switchs">
                        <br>
                        <b>Apto</b>
                        <br>
                        <b>Não</b>
                        <label class="switch">
                            <input name = "apto" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <b>Sim</b>
                    </div>
                    <p>
                        <label class="w3-text-deep-brown"><b>Imagem:</b></label>
                        <label class="w3-btn w3-theme"><b>Selecione uma imagem</b>
                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                        <input type="file" style="display:none;background-color:brown;" id="Imagem" name="Imagem" accept="imagem/*" onchange="previewImagem();"></label>
                    </p>
                    <img id="imgCamp" style="width:20vw;height:auto;">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                    <script>
                        function previewImagem(){
                            var imagem = document.querySelector('input[name=Imagem]').files[0];
                            var preview = document.getElementById('imgCamp');

                            var reader = new FileReader();
                            reader.onload = function(e){
                                preview.src = e.target.result;
                            }
                            if(imagem){
                                reader.readAsDataURL(imagem);
                            }else{
                                preview.src = "";
                            }
                        }
                    </script>
                    <label for="submit"> 
                            <button class="botao-cadastro" type="submit"><b>Cadastrar</b></button>
                    </label>
                </div>
            </form>
        </div>
        <!-- RODAPÉ -->
        <footer>
            <header class="linha-divisao"></header>
            <img class="img-rodape" src="IMG/logo_verticalpng.png">
            <p class="copyright">&copy; Copyright Help Friend - 2022</p>
        </footer>
        <?php 
            //FIM DA DIV FORM
            echo "</div>";
            //ENCERRA CONEXÃO COM O BANCO DE DADOS
            mysqli_close($conn);
        ?>
    </body>
</html>