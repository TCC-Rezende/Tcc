<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Responsivo</title>

    <!-- Estilos necessários               ps: sempre carrafgar nessa ordem-->
   
    <link rel="stylesheet" type="text/css" href=" /tcc/estilos/padrao.css">
    <link rel="stylesheet" type="text/css" href=" /tcc/estilos/cabecalho.css"> 
    <link rel="stylesheet" type="text/css" href=" /tcc/estilos/rodape.css">   
    
    <!-- //Estilos necessários  -->


    <link rel="stylesheet" type="text/css" href=" /tcc/estilos/form.css">
   

</head>
<body>
  <?php include_once "../elementos/cabecalho.html";   ?>

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
                <form action="" method="POST">
                    <h3>Login Usuário</h3>
                    <input name="usuario" type="text" placeholder="Usuario">
                    <input name="senha" type="password" placeholder="Senha">
                    <input name="entrar" type="submit" value="Entrar">
                    <a href="#" class="escSenha">Esqueceu a senha?</a>
                </form>
            </div>
            <div class="form cadasForm">
                <form action="" method="POST">
                    <h3>Cadastro Usuário</h3>
                    <input name="nomeusu" type="text" placeholder="Nome">
                        
						<div class="formLinha">                    
                            <input name="CPF" type="text" placeholder="CPF">
								<div class="formGenero">

									<p>Sexo:
									<select name="listasexo">
										<option value="0">Feminino</option>
										<option value="1">Masculino</option>
									</select>
							
								</div>
						</div>
				
					<input name="Email" type="email" placeholder="Email"> 
					<input name="Login" type="text" placeholder="Login">
                    <input name="Senha" type="password" placeholder="Senha">
                    <input type="password" placeholder="Confirmar Senha">
                    <input name="registrar" type="submit" value="Registrar"> 
                </form>
            </div>
        </div>
    </div>
</div>

     <?php include_once "../elementos/rodape.html" ;    ?> 


<!-- Links para os icones & logos usados -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- ********************************* -->
<!-- Scripts necesários -->

<script src="../action/cabecalho.js"></script>
<script src=" ../action/form.js"></script>


<!-- ***************************** -->
</body>
</html>

<?php
	if ( isset($_POST["registrar"]) )
	//if ( isset($_POST["registrar"]) || isset($_POST["entrar"]) )
	{
		//cadastro do usuário
		include "cadastro.php"; // Chama o PHP de Conexão
		
		//////////////////////$codigo=$_POST["codigo"];		
		$nomeUsu=$_POST["nomeusu"];
		$Email=$_POST["Email"];
		$CPF=$_POST["CPF"];
		$Senha=$_POST["Senha"];
		$Login=$_POST["Login"];
		$Sexo=$_POST["listasexo"];
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
			$sql1="SELECT  LOGINUSU,SENHA,TIPO
					FROM     tb_usuario
					WHERE    LOGINUSU LIKE '$Login'";

			$result=mysqli_query($conn,$sql1)or die ("Impossivel verificar o usuário");
			$linha1=mysqli_fetch_assoc($result);

			$sql2="SELECT  NOME,EMAIL,SEXO
					FROM    tb_cliente
					WHERE  NOME LIKE '$nomeUsu'";

			$result=mysqli_query($conn,$sql2)or die ("Impossivel verificar o cliente");
			$linha2=mysqli_fetch_assoc($result);

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
			
			} // fim do if ($qtd==0)
		} // fim do ($erro=="")		
   } // fim do if ( isset($_POST["registrar"]) || isset($_POST["entrar"]) )
   else if(isset($_POST["entrar"]))
   {	
	 //login do usuário
	 include "cadastro.php";

	 $usuario=$_POST["usuario"];
	 $senha=$_POST["senha"];
	 $tipo="C";
	 $erro="";

	 if ($usuario == "") 
	 { 
		$erro .= "Digite o usuário/>";
	 }
	
	 if ($senha == "") 
	 { 
		$erro .= "Digite a senha<br/>";
	 }
	
	 $sql3="SELECT LOGINUSU,SENHA,TIPO
		FROM tb_usuario
		WHERE LOGINUSU LIKE '$usuario' and SENHA LIKE '$senha' ";

	 $result=mysqli_query($conn,$sql3)or die ("Impossivel verificar o cliente");
	 $qtdREGISTRO = 0; // incializo
	 $qtdREGISTRO = mysqli_num_rows($result);
     $linha=mysqli_fetch_assoc($result);

	 if ($qtdREGISTRO > 0)
	 {
		  if ( $linha["TIPO"] == $tipo )
		  {
		      echo"<meta http-equiv='refresh' content='0;url=pagina_do_usuario/pag_usu.html'>";
		  }
		  else
		  {
			echo"<meta http-equiv='refresh' content='0;url=painel_admin/adm_rsimports.php'>";  
		  }
	 }
	 else 
	 {
		echo "<h1>usuário ou senha incorreta</h1>";
	 }				
	} // else	
?>	