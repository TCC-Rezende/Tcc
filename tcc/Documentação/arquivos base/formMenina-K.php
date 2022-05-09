<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Formulário Responsivo</title>
    <style>
        <?php
     // estilos necessários
    include_once "../estilos/padrao.css";
    include_once "../estilos/cabecalho.css";
    include_once "../estilos/rodape.css";
    // estilos da página
    include_once "../estilos/form.css";
        
        
        ?>
    </style>
</head>
<body>
    <?php  include_once "../elementosPag/cabecalho.html";   ?>
<div class="body">
<div class="container">


    
        <div class="blueBg">
            <div class="box  logar">
                <h2>Já tem uma conta?</h2>
                <button class="logarBtn">Entrar</button>
            </div>
            <div class="box  cadastr">
                <h2>Ainda não tem uma conta?</h2>
                <button class="cadastrBtn">Cadastrar</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form logarForm">
                <form>
                    <h3>Login Usuário</h3>
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Senha">
                    <input type="submit" value="Entrar">
                    <a href="#" class="escSenha">Esqueceu a senha?</a>
                </form>
            </div>

            <div class="form cadasForm">
                <form>
                    <h3>Cadastro Usuário</h3>
                    <input name="NomeUsu" type="text" placeholder="Nome">
                    <input name="CPF" type="text" placeholder="CPF">
					<p>Sexo:
			        <select name="listasexo">
			           	<option value="0">Feminino</option>
				        <option value="1">Masculino</option>
			        </select>
					<input name="Email" type="email" placeholder="Email"> 
					<input name="Login" type="text" placeholder="Login">
                    <input name="Senha" type="password" placeholder="Senha">
                    <input type="password" placeholder="Confirmar Senha">
                    <input name="Registrar" type="submit" value="Registrar"> 
                </form>
            </div>
        </div>
    </div>
 </div>


    <?php include_once "../elementosPag/rodape.html";      ?>

    <script src="../action/form.js"></script>

<!-- Links para os icones & logos usados -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- ********************************* -->
</body>
</html>

<?php

	if(isset($_GET["Registrar"])) {
			include "cadastro.php"; // Chama o PHP de Conexão
			
			//////////////////////$codigo=$_GET["codigo"];		
			$nomeUsu=$_GET["NomeUsu"];
			$Email=$_GET["Email"];
            $CPF=$_GET["CPF"];
            $Senha=$_GET["Senha"];
			$Login=$_GET["Login"];
			$Sexo=$_GET["listasexo"];
			$erro="";

			/*if ($codigo == "") 
			{ 
				$erro .= "Digite o código do produto<br/>";
			}*/
			
			if ($nomeUsu == "") 
			{ 
				$erro .= "Digite a descrição do produto<br/>";
			}
			
			if ($Login == "") 
			{ 
				$erro .= "Digite a categoria<br/>";
			}
			if ($Email== "") 
			{ 
				$erro .= "Digite a categoria<br/>";
			}

            if ($CPF == "") 
			{ 
				$erro .= "Digite o preço<br/>";
			}
			
            if ($Senha== "") 
			{ 
				$erro .= "Digite o seu sexo<br/>";
			}

			if($erro=="")
			{
				$sql="SELECT  NOME,EMAIL,SEXO
					  FROM    tb_cliente
					  WHERE  NOME LIKE '$nomeUsu'";

					 
				$result=mysqli_query($conn,$sql)or die ("Impossivel verificar o produto");
				$linha=mysqli_fetch_assoc($result);


				$sql2="SELECT  LOGINUSU,SENHA,TIPO
					  FROM    tb_usuario
					  WHERE  LOGINUSU LIKE '$Login'";

					 
				$result=mysqli_query($conn,$sql2)or die ("Impossivel verificar o produto");
				$linha=mysqli_fetch_assoc($result);

				// verifica se já existe sigla cadastrada no banco
				// não existindo faço insert
				
				$qtd= mysqli_num_rows($result);
				
				
				if ($qtd==0)
				{		
                
            
                    // insere no usuário
					
					$sql=" INSERT INTO tb_cliente (NOME,EMAIL,SEXO,USUARIO) 
						   VALUES ('$nomeUsu','$Email','$Sexo','7')
							";
		
					
				    mysqli_query($conn,$sql)or die ("Impossivel Cadastrar ".mysqli_error($conn));
					
					$sql2="INSERT INTO tb_usuario (LOGINUSU,SENHA,TIPO) 
							VALUES ('$nomeUsu','$Senha','C' )
						   "; 

				mysqli_query($conn,$sql2)or die ("Impossivel Cadastrar ".mysqli_error($conn));								

					echo "<p><font size='5' color='green'>Obrigado por Cadastrar o produto</font></p>
					      <form>   
							 <p><input type='submit' value='Novo Cadastro'/></p>
						  </form>";					
				}
                // senão, informo que já está cadastrada o produto			
				else
				{
					echo "<font size=5 color= red>Produto já cadastrado<br><br></font>";
					echo "<form action='' method=''>
							<p>  <input type='submit'  value='Limpar'/></p>
						 </form>";
				}
				// Fechar conexão
				////////mysqli_close($conn);
			}
		  else {
			echo("<font size=5 color=green><b>Erro ao enviar o formulario!<br> Verifique as mensagens abaixo:<br></font>");
			echo("<font size=5 color=red>$erro</b></font>");
				echo"<form action='' method=''>
					<p> <input type='submit'  value='Voltar'/></p>
				 </form>";
		 }
	} 

?>