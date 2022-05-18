<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produto</title>
</head>
<body>
            
                <form action="" method="get">
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
if (isset($_GET["cadastrar"])) {	
		    //cadastro do usuário
			include "cadastro.php"; // Chama o PHP de Conexão
			
			//////////////////////$codigo=$_GET["codigo"];		
$descricaoprodu=$_GET["descricaoprodu"];
$valorprodu=$_GET["valorprodu"];
$imagemprodu=$_GET["imagemprodu"];
$genero=$_GET["genero"];
$erro="";

            if ($descricaoprodu== "") 
			{ 
				$erro .= "Digite a descrição do produto<br/>";
			}
			
			if ($valorprodu == "") 
			{ 
				$erro .= "Digite o preço do produtobr/>";
			}
			if ($imagemprodu== "") 
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
               
                if($linha1["SEXO"]==$genero and $linha1["DESCRICAO"]==$descricaoprodu){
               
                    echo "Esse produto já está cadastrado";
                }
            }
        }
        else{

            $sql2="INSERT INTO tb_produto (DESCRICAO,SEXO) 
			VALUES ('$descricaoprodu','$genero' )
						   "; 

			 mysqli_query($conn,$sql2)or die ("Impossivel Cadastrar ".mysqli_error($conn));   
				
        }
    }
?>