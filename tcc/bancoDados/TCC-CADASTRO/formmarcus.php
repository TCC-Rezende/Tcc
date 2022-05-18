    <form action="" method="get">
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
		<input name="registrar" type="submit" value="Registrar"> 
	</form>
				
	<form action="" method="get">
		<h3>login usuário</h3>
		<input name="usuario" type="text" placeholder="usuario">
		<input name="senha" type="password" placeholder="senha">
		<input name="entrar"  type="submit" value="entrar">
		<a href="#" class="escsenha">esqueceu a senha?</a>
	</form>	

<?php

	if(isset($_GET["registrar"]))
	{
			include "cadastro1.php"; // Chama o PHP de Conexão
			
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
				


				$sql2="SELECT  LOGINUSU,SENHA,TIPO
					  FROM    tb_usuario
					  WHERE  LOGINUSU LIKE '$Login'";

					 
				$result=mysqli_query($conn,$sql2)or die ("Impossivel verificar o usuário");
				$linha=mysqli_fetch_assoc($result);

				$sql="SELECT  NOME,EMAIL,SEXO
					  FROM    tb_cliente
					  WHERE  NOME LIKE '$nomeUsu'";

					 
				$result=mysqli_query($conn,$sql)or die ("Impossivel verificar o cliente");
				$linha=mysqli_fetch_assoc($result);

				// verifica se já existe sigla cadastrada no banco
				// não existindo faço insert
				
				$qtd= mysqli_num_rows($result);
				
				
				if ($qtd==0)
				{		
                
            
                    // insere no usuário
					
					
					$sql2="INSERT INTO tb_usuario (LOGINUSU,SENHA,TIPO) 
							VALUES ('$Login','$Senha','C' )
						   "; 

				mysqli_query($conn,$sql2)or die ("Impossivel Cadastrar ".mysqli_error($conn));   
				
				
		
              $ult = mysqli_insert_id($conn);


				$sql=" INSERT INTO tb_cliente (NOME,CPF,EMAIL,SEXO,USUARIO) 
						   VALUES ('$nomeUsu','$CPF','$Email','$Sexo','$ult')
							";
		
					
				    mysqli_query($conn,$sql)or die ("Impossivel Cadastrar ".mysqli_error($conn));
					

					
				}
               
			}
		  else {
			
		 }
	}
	else if(isset($_GET["entrar"])) {
		include "cadastro1.php";
	
		$usuario=$_GET["usuario"];
		$senha=$_GET["senha"];
		

		if ($usuario == "") 
		{ 
			$erro .= "Digite o usuário/>";
		}
		
		if ($senha == "") 
		{ 
			$erro .= "Digite a senha<br/>";
		}
		
                
				$sql3="SELECT COUNT(*) qtd
					FROM tb_usuario
					WHERE LOGINUSU LIKE '$usuario' AND 
					SENHA LIKE '$senha' ";

				$result=mysqli_query($conn,$sql3)or die ("Impossivel verificar o cliente");
				$linha=mysqli_fetch_assoc($result);
				$quantidade = $linha["qtd"];
	
	        if ($quantidade != 0) {
				header("location:login.php");
			}
			else {
				echo "Usuário não castrado.";
			}

	}			
	else{
		echo "Voçê não está cadastrado!";
	}

?>	