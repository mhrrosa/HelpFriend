<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cadastroc.css">
    <link rel="icon" type="image/jpg" href="IMG/logo_icone.jpg"/>
    <title>Cadastro de Adotante - Help Friend</title>
</head>
<body>
    <header class="cadastro-cachorro">
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
    </header>
    <header>
            <div class="formcadastro">
                <form id="cadastro" action="cadastroAdotante_exe.php" method="post" onsubmit="return check(this.form)" enctype="multipart/form-data">
                    <div class="form">
                        <label for="text" style="color: black;"><b>CADASTRO ADOTANTE</b></label>
                        <label for="name"> Nome 
                            <input type="text" name="nome" required>
                        </label>
                        <label for="password"> Senha 
                            <input type="password" name="senha"required>
                        </label>

                        <label for="cpf"> CPF
                            <input type="text" name="cpf"required>
                        </label>

                        <label for="email"> E-mail
                            <input type="email" name="email"required>
                        </label>

                        <label for="logradouro"> Logradouro 
                            <input type="text" name="logradouro"required>
                        </label>               

                        <label for="numero"> Numero 
                            <input type="text" name="numero"required>
                        </label>

                        <label for="complemento"> Complemento
                            <input type="text" name="complemento"required>
                        </label>

                        <label for="bairro"> Bairro
                            <input type="text" name="bairro"required>
                        </label>

                        <label for="cidade"> Cidade
                            <input type="text" name="cidade"required>
                        </label>

                        <label for="estado"> Estado 
                            <input type="text" name="estado"required>
                        </label>



                        <label for="submit"> 
                            <button type="submit" style="max-width: 100px"><b>Cadastrar</b></button>
                        </label>

                    </div>
                </form>
            </div>
        </header>

    <footer style="background-color: white; margin-top: 100px">
        <header class="linha-1"></header>
        <img class="img-rodape" src="IMG/logo_verticalpng.png" style="height: 200px; margin-left: 43%">
        <p class="copyright" style="text-align: center;">&copy; Copyright Help Friend - 2022</p>
    </footer>
</body>
</html>