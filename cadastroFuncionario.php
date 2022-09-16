<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
        <title>Cadastro de Funcionário - Help Friend</title>
        <link rel="icon" type="image/jpg" href="IMG/logo_icone.jpg"/>
    </head>
    <body> 
    <!-- CONEXÃO COM O BANCO DE DADOS -->
    <?php require 'conectaBD.php'; ?>
        <!-- CABEÇALHO -->
        <div class="cabecalho">
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
                        <a href="" >
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
        </div>
        <!-- LINHA DE DIVISÃO -->
        <header class="linha-divisao"></header>
        <!-- FORMULÁRIO -->
        <div class="formcadastro">
            <form id="cadastro" action="cadastroFuncionario_exe.php" method="post" onsubmit="return check(this.form)">
                <div class="form">
                    <label class="titulo-form" for="text"><b>CADASTRO DE FUNCIONÁRIO</b></label>
                    <label for="name"> Nome 
                        <input type="text" name="nome" required>
                    </label>
                    <label for="apelido"> Apelido 
                        <input type="text" name="apelido" required>
                    </label>
                    <label for="email"> Email 
                        <input type="email" name="email"required>
                    </label>

                    <label for="password"> Senha 
                        <input type="password" name="senha"required>
                    </label>

                    <label for="number"> CPF
                        <input type="text" name="cpf"required>
                    </label>
                    
                    <label for="name"> Idade 
                        <input type="text" name="idade"required>
                    </label>

                    <label for="name"> Salario 
                        <input type="text" name="salario"required>
                    </label>

                    <label for="name"> Cargo 
                        <input type="text" name="cargo"required>
                    </label>
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

                    <label for="name"> ID Instituição 
                        <input type="text" name="id"required>
                    </label>

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
