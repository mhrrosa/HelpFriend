<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="CSS/cadastrof.css">
        <title>Cadastro de Funcionário - Help Friend</title>
        <link rel="icon" type="image/jpg" href="IMG/logo_icone.jpg"/>
        <style>
            .img-rodape {
                display: block;
                margin-top: 30px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 25px;
            }
        </style>
    </head>
    <body> 
    <?php require 'conectaBD.php'; ?>
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
        </header>
        <header>
            <div class="formcadastro">
                <form id="cadastro" action="cadastroFuncionario_exe.php" method="post" onsubmit="return check(this.form)" enctype="multipart/form-data">
                    <div class="form">
                        <label for="text" style="color: black;"><b>CADASTRO DE FUNCIONÁRIO</b></label>
                        <label for="name"> Nome 
                            <input type="text" name="nome" required>
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

                        <label for="name"> Cargo 
                            <input type="text" name="cargo"required>
                        </label>

                        <label for="name"> ID Instituição 
                            <input type="text" name="id"required>
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
            <img class="img-rodape" src="IMG/logo_verticalpng.png" style="height: 200px; text-align:center;">
            <p class="copyright" style="text-align: center;">&copy; Copyright Help Friend - 2022</p>
        </footer>
    </body>
</html>
