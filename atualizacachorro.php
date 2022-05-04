<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./CSS/cadastroc.css">
    <title>Atualizar Cachorro</title>

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
    <div>

</head>
<body>
<?php require 'conectaBD.php'; ?>
    <div>
        <p>
            <div>
                <!-- Acesso em:-->
                <?php
                    date_default_timezone_set("America/Sao_Paulo");
                    $data = date("d/m/Y H:i:s", time());
                    echo "<p class='w3-small' > ";
                    echo "Acesso em: ";
                    echo $data;
                    echo "</p> "
                ?>

                <!-- Acesso ao BD-->
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

                    $sql = "SELECT Nome, Ano_Nascimento, Porte, Raca, Id_Instituicao from cachorro where Id = $id";

				?>
                <form id="cadastro" action="atualizacachorro_exe.php" method="post" onsubmit="return check(this.form)" enctype="multipart/form-data">
                    <input type="hidden" id="Id" name="Id" value="<?php echo $id; ?>">
                    <div class="form">
                        <label for="text"> Cadastro de Cachorro</label>
                        <label for="name"> Nome 
                            <input type="text" name="nome" value="<?php echo $row['Nome']; ?>">
                        </label>
                        <label for="date"> Ano 
                            <input type="date" name="ano"  
                            pattern="((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/((19|20)[0-9][0-9])"
                            title="Formato: dd/mm/aaaa." value="<?php echo $row['Ano_Nascimento']; ?>">
                        </label>
                        <label for="name"> Porte <span> <?php echo $porte; ?></span>
                            <select name="porte">
                                <option value="Selecione o porte desejado:"<?php echo $porte=='Selecione'?'selected':'';?> >Selecione</option>
                                <option value="Pequeno"<?php echo $porte=='Selecione'?'selected':'';?> >Pequeno</option>
                                <option value="Médio"<?php echo $porte=='Selecione'?'selected':'';?> >Medio</option>
                                <option value="Grande"<?php echo $porte=='Selecione'?'selected':'';?> >Grande</option>
                            </select>
                        </label>
                        <label for="name"> Raca <span> <?php echo $raca; ?></span>
                            <select name="raca">
                                <option value="Selecione a raca desejada:"<?php echo $raca=='Selecione'?'selected':'';?> >Selecione</option>
                                <option value="Shih Tzu"<?php echo $raca=='Selecione'?'selected':'';?> >Shih Tzu</option>
                                <option value="Yorkshire"<?php echo $raca=='Selecione'?'selected':'';?> >Yorkshire</option>
                                <option value="Buldogue frances"<?php echo $raca=='Selecione'?'selected':'';?> >Buldogue frances</option>
                                <option value="Maltes"<?php echo $raca=='Selecione'?'selected':'';?> >Maltes</option>
                                <option value="Golden Retriever"<?php echo $raca=='Selecione'?'selected':'';?> > Golden Retriever</option>
                                <option value="Labrador Retriever"<?php echo $raca=='Selecione'?'selected':'';?> >Labrador Retriever</option>
                                <option value="Pug"<?php echo $raca=='Selecione'?'selected':'';?> >Pug</option>
                                <option value="Pinscher"<?php echo $raca=='Selecione'?'selected':'';?> >Pinscher</option>
                                <option value="Schnauzer"<?php echo $raca=='Selecione'?'selected':'';?> >Schnauzer</option>
                                <option value="Beagle"<?php echo $raca=='Selecione'?'selected':'';?> >Beagle</option>
                                <option value="Border Collie"<?php echo $raca=='Selecione'?'selected':'';?> >Border Collie</option>                                
                                <option value="Raca nao definida"<?php echo $raca=='Selecione'?'selected':'';?> >Raca nao definida</option>    
                            </select>
                        </label>
                        <label for="name"> id_instituicao 
                                <input type="text" name="id_instituicao" value="<?php echo $row['Id_Instituicao']; ?>">
                        </label>
                        <label for="submit"> 
                                <button type="submit"><b>Atualizar</b></button>
                        </label>
                    </div>
                </form>
								
			<?php 
							}
						}
				}
				else {
					echo "Erro executando UPDATE: " . mysqli_error($conn);
				}
				echo "</div>"; //Fim DIV form
				mysqli_close($conn); //Encerra conexao com o BD

			?>

			</div>
		</p>
	</div>

<!-- FIM PRINCIPAL -->
</div>
<!-- Inclui RODAPE.PHP  -->
<?php require 'rodape.php';?>

</body>
</html>


