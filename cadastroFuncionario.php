<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./CSS/cadastrof.css">
        <title>Help Friend</title>

    </head>
    <body> 
    <?php require 'conectaBD.php'; ?>
        <header class="cadastro-funcionario">
            <main>
                <div class="header-1">
                    <div class="logo">
                        <img src="IMG/logo.jpeg" height="120"/>
                    </div>
                    <div class="botao-inicio-login">
                        <ul>
                            <li><a href=""><h3>MENU</h3></a></li>
                            <li><a href=""><h3>SOBRE</h3></a></li>
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
                        <label for="text"> Cadastro de Funcionário</label>
                        <label for="name"> Nome 
                            <input type="text" name="nome">
                        </label>
                        <label for="email"> Id email 
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

                        <label for="name"> id instituicao 
                            <input type="text" name="id">
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