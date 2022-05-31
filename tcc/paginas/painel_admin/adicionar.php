<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Administrador</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <nav>
            <div class="navLogo">
            <a href=""><img src="logo-bola.svg"><img src="logo-letters.svg"></a>
            </div>
            <div class="navOptions">
                <ul>
                    <li>
                        <i class="fas fa-undo-alt"></i>
                        <a href="index.php" class="nav-link">SAIR DO PAINEL</a> 
                        <!--Deixar o index para voltar -->
                    </li>
                    <li>
                    <form action="" method="get">
                        <i class="fas fa-list"></i>
                        <a href="listarprodutos.php" class="nav-link">LISTAR PRODUTOS
                            <!-- <input type="submit"  value="Listar" name="listar" class="bt_listar"/> -->
                        </a>
                    </form>
                    
                    </li>
                    <li>
                        <i class="fas fa-plus"></i>
                        <a href="adicionar.php" class="nav-link">ADICIONAR ROUPAS</a>
                    </li> 
                    <li>
                        <i class="fas fa-pencil-alt"></i>
                        <a href="editar.php" class="nav-link">EDITAR PRODUTO</a>
                    </li> 
                    <li>
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="adm_rsimports.php" class="nav-link">VOLTAR AO PRINCIPAL </a>
                    </li>
                </ul>
            </div>
            <div class="selecao">

<form action="" method="post" enctype="multipart/form-data">
                    <h3>Cadastro de Produto</h3>
                    <p>Descrição do Produto
                    <input name="descricaoprodu" type="text" placeholder="Descrição do Produto"></p>
                    <p>Valor do Produto
                    <input name="valorprodu" type="text" placeholder="Preço do Produto"></p>
                    <p>Imagem do Produto
                    <input name="imagemprodu" type="file" placeholder="Imagem do Produto"></p> 
                    <p>Categoria:
			        <select name="categoria">
			           	<option value="1">Camisa</option>
				        <option value="2">Short</option>
                        <option value="3">Kit Infantil</option></p>
</select>
          
                    <p>Gênero:
			        <select name="genero">
			           	<option value="F">Feminino</option>
				        <option value="M">Masculino</option>
                        <option value="U">Unissex</option></p>
			        </select>    </br> </br> 

                    <input name="cadastrar"  type="submit" value="Cadastrar">
                </form>
       

</body>
</html>

<?php
if (isset($_POST["cadastrar"])) {	
		    //cadastro do usuário
			include "cadastro.php"; // Chama o PHP de Conexão
			
			//////////////////////$codigo=$_GET["codigo"];		
$descricaoprodu=$_POST["descricaoprodu"];
$valorprodu=$_POST["valorprodu"];
$categoria=$_POST["categoria"];   
$tmp_img = $_FILES['imagemprodu']['tmp_name'];
$genero=$_POST["genero"];
$img=$_FILES['imagemprodu']['name'];
  
   if (($categoria=="1") && ($genero=="F"))
   { 
     $caminhoimg="IMGS/CAMISAS FEMININAS/";
     $caminhoimg.=$img;
   }
   else if (($categoria=="1") && ($genero=="M"))
   {
     $caminhoimg="IMGS/CAMISAS MASCULINA/";
     $caminhoimg.=$img;	   
   }
   else if (($categoria=="2") && ($genero=="M"))
  {
     $caminhoimg="IMGS/SHORTS MASCULINOS/";
     $caminhoimg.=$img;	 	 
  }
   else if (($categoria=="3") && ($genero=="U"))
  {
     $caminhoimg="IMGS/KIT INFANTIL/";
	 $caminhoimg.=$img;	 
  }

 // refazer o if de qual caminho irá e também fazer com que fisicamente o arquivo se "mova" para o local adequado
 ///move_uploaded_file ( string $arquivo , string $novoDestino );

  move_uploaded_file ($tmp_img,$caminhoimg);

  $erro="";

            if ($descricaoprodu== "") 
			{ 
				$erro .= "Digite a descrição do produto<br/>";
			}
			
			if ($valorprodu == "") 
			{ 
				$erro .= "Digite o preço do produtobr/>";
			}
			if ($caminhoimg== "") 
			{ 
				$erro .= "Carregue a imagem do produto<br/>";
			}
    
            
            
            if($erro=="")
			{
				$sql1="SELECT  DESCRICAO,SEXO
					  FROM     tb_produto
					  WHERE    DESCRICAO LIKE '$descricaoprodu' AND SEXO LIKE '$genero'";

				$result=mysqli_query($conn,$sql1)or die ("Impossivel verificar o usuário");
			   
                if ($linha1=mysqli_fetch_assoc($result));{
               
                $qtd = mysqli_num_rows($result);
 			   
			    if ($qtd > 0)
                //if(($linha1["SEXO"]==$genero) && ($linha1["DESCRICAO"]==$descricaoprodu))
				{
                    echo "Esse produto já está cadastrado";
                }
				else{

					$sql2="INSERT INTO tb_produto (DESCRICAO,SEXO,CATEGORIA,PRECO_UNITARIO,CAMINHO) 
					VALUES ('$descricaoprodu','$genero','$categoria','$valorprodu', '$caminhoimg')"; 

					 mysqli_query($conn,$sql2)or die ("Impossivel Cadastrar ".mysqli_error($conn)); 
				 
			
							   
						 echo "<img src='$caminhoimg' width='30%' height='55%'/>";
				 
				 echo "Você acabou de cadastrar um produto!";			 
						
				}				
            }
        }

    }
?>
</div>
        </nav>
        <div class="dashboardInfo">
            <div class="dashboardPhrase">
            </div>
    <script src="https://kit.fontawesome.com/6bb7bca18b.js" crossorigin="anonymous"></script>
</body>
        </div>
</html>