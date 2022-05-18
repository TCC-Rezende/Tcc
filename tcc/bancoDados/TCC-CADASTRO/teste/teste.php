<html>
<head>
   <title></title>
</head>
<body>

<form action="" method="get">
                    <h3>Mostra Produto</h3>
                    <input name="d" type="text" placeholder="descrição" autofocus>
                   
                    <input name="mostrar" type="submit" value="Mostrar">
</form> 


<?php

       include "cadastro.php";


       if ( isset($_GET["mostrar"]) )
       {
              $descricao=$_GET["d"];
              $erro="";

              $sql1="SELECT  CODIGO, DESCRICAO,CAMINHO
                     FROM     tb_produto
                     WHERE    DESCRICAO LIKE '$descricao'  ";

              $result=mysqli_query($conn,$sql1)or die ("Impossivel CONSULLTAR");

              while ($linha = mysqli_fetch_assoc($result) )
              {
                 $img=$linha["CAMINHO"];
                 echo "Nome: $descricao<br/>";
				 //     $img<br/>;
					   
                 echo "<img src='$img' width='30%' height='55%'/>";
					   
              }
       }       

?>

</body>
</html>