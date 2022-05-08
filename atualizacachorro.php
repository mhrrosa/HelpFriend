<!DOCTYPE html>
<html>
    
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="CSS/cadastroc.css">
    <title>Help Friend</title>
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

                    $sql = "SELECT Id, Nome, Ano_Nascimento, Porte, Raca, Id_Instituicao from cachorro where Id = $id";

			

                if ($result = mysqli_query($conn, $sql)) {
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							$id_cachorro = $row['Id'];
							$nome      = $row['Nome'];
							$porte      = $row['Porte'];
							$Ano_Nascimento  = $row['Ano_Nascimento'];
							$raca  = $row['Raca'];
                            $id_instituicao  = $row['Id_Instituicao'];

						}
                    }
                ?>
                    <form id="cadastro" action="atualizacachorro_exe.php" method="post" onsubmit="return check(this.form)" enctype="multipart/form-data">
                        <input type="hidden" id="Id" name="Id" value="<?php echo $id_cachorro; ?>">
                        <div class="form">
                            <label for="text" style="color: black;"><b>ATUALIZAÇÃO DE CACHORRO</b></label>
                            <label for="name"> Nome 
                                <input type="text" name="nome" value="<?php echo $nome; ?>">
                            </label>
                            <label for="name"> Ano de Nascimento
                                <select name="ano">
                                    <option value= "<?php echo $Ano_Nascimento ?>">Ano de Nascimento atual - <?php echo $Ano_Nascimento; ?></option>
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
                            <label for="name"> Porte <span> </span>
                                <select name="porte">
                                    <option value= "<?php echo $porte; ?>">Porte Atual - <?php echo $porte; ?></option>
                                    <option value="Pequeno"<?php echo $porte=='Selecione'?'selected':'';?> >Pequeno</option>
                                    <option value="Médio"<?php echo $porte=='Selecione'?'selected':'';?> >Medio</option>
                                    <option value="Grande"<?php echo $porte=='Selecione'?'selected':'';?> >Grande</option>
                                </select>
                            </label>
                            <label for="name"> Raça <span></span>
                                <select name="raca">
                                    <option value= " <?php echo $raca; ?>">Raça Atual - <?php echo $raca; ?></option>
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
                            <label for="name">
                                    <input type="hidden" name="id_instituicao" value="<?php echo $id_instituicao; ?>">
                            </label>
                            <label for="submit"> 
                                    <button type="submit" style="max-width: 100px"><b>Atualizar</b></button>
                            </label>
                        </div>
                    </form>
                    <div id='teste'></div>
                
								
			<?php 
							
						
                    
				}else {
					echo "Erro executando UPDATE: " . mysqli_error($conn);
				}
				echo "</div>"; //Fim DIV form
				mysqli_close($conn); //Encerra conexao com o BD

			?>

			</div>
		</p>
	</div>
    <footer style="background-color: white; margin-top: 100px">
        <header class="linha-1"></header>
        <img class="img-rodape" src="IMG/logo_verticalpng.png" style="height: 200px; text-align:center;">
        <p class="copyright" style="text-align: center;">&copy; Copyright Help Friend - 2022</p>
    </footer>
</body>
</html>
