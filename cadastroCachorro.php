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
            </div>
        </header>
        <!-- LINHA DE DIVISÃO -->
        <header class="linha-divisao"></header>
        <!-- FORMULÁRIO -->
        <header>
            <div class="formcadastro">
                <form id="cadastro" action="cadastroCachorro_exe.php" method="post" onsubmit="return check(this.form)">
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
                                <option value="Shih Tzu">Shih Tzu</option>
                                <option value="Yorkshire">Yorkshire</option>
                                <option value="Buldogue frances">Buldogue frances</option>
                                <option value="Maltes">Maltes</option>
                                <option value="Golden Retriever">Golden Retriever</option>
                                <option value="Labrador Retriever">Labrador Retriever</option>
                                <option value="Pug">Pug</option>
                                <option value="Pinscher">Pinscher</option>
                                <option value="Schnauzer">Schnauzer</option>
                                <option value="Beagle">Beagle</option>
                                <option value="Border Collie">Border Collie</option>                                
                                <option value="Raca nao definida">Raca nao definida</option>      
                            </select>
                        </label>
                        <label for="name"> ID Instituição 
                                <input type="text" name="id_instituicao"required>
                        </label>
                        <label for="submit"> 
                                <button class="cadastrar" type="submit"><b>Cadastrar</b></button>
                        </label>
                    </div>
                </form>
            </div>
        </header>
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