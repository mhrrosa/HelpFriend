<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./CSS/cadastroc.css">
    <title>Cadastro Cachorro</title>

</head>

<body>
    <header class="cadastro-cachorro">
        <main>
            <div class="header-1">
                <div class="logo">
                    <img src="IMG/logo.jpeg" height="120" />
                </div>
                <div class="botao-inicio-login">
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
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <header class="linha-1"></header>
    </header>
    <header>
        <div class="formcadastro">
            <form id="cadastro" action="cadastroCachorro_exe.php" method="post" onsubmit="return check(this.form)" enctype="multipart/form-data">>
                <div class="form">
                    <label for="text"> Cadastro de Cachorro</label>
                    <label for="name"> Nome 
                        <input type="text" name="nome">
                    </label>
                    <label for="date"> Ano 
                        <input type="date" name="ano">
                    </label>
                    <label for="name"> Porte 
                        <select name="porte" name="porte">
                            <option value="Selecione o porte desejado:"></option>
                            <option value="Pequeno">Pequeno</option>
                            <option value="Médio">Medio</option>
                            <option value="Grande">Grande</option>
                        </select>
                    </label>
                    <label for="name"> Raca
                        <select name="raca">
                            <option value="Selecione a raca desejada:"></option>
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
                    <label for="name"> id_instituicao 
                            <input type="text" name="id_instituicao">
                    </label>
                    <label for="submit"> 
                            <button type="submit"><b>Cadastrar</b></button>
                    </label>
                </div>
            </form>
        </div>
    </header>
</body>

</html>