
    <?php
    $servername = "localhost";
//  $database = "NOME DA BASE";
    $username = "root";
    $password = "";

    // Criar a conecção
    $conexao = mysqli_connect($servername,$username,$password,$database) ;

    // Checar a Conecção
    if (!$conexao){
        die ("Não conectou : ".mysqli_connect_error());
    }

    echo "Conexção feita com Sucesso";
    ////mysql_close($conexao);
    ?>