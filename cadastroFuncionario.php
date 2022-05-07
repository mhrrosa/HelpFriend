<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="CSS/cadastrof.css">
        <title>Help Friend</title>
        <link rel="icon" type="image/jpg" href="IMG/logo_icone.jpg"/>
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
                            <input type="text" name="nome">
                        </label>
                        <label for="email"> ID Email 
                            <input type="text" name="email">
                        </label>

                        <label for="password"> Senha 
                            <input type="password" name="senha">
                        </label>

                        <label for="number"> CPF
                            <input type="number" name="cpf">
                        </label>

                        <label for="name"> Cargo 
                            <input type="text" name="cargo">
                        </label>

                        <label for="name"> ID Instituição 
                            <input type="text" name="id">
                        </label>

                        <label for="submit"> 
                            <button type="submit" style="max-width: 100px"><b>Cadastrar</b></button>
                        </label>

                    </div>
                </form>
            </div>
        </header>
    </body>
</html>