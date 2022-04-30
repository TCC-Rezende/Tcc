<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     <title>Título</title>
<!-- Estilos necessários               ps: sempre carrafgar nessa ordem-->
    <link rel="stylesheet" type="text/css" href="estilos/padrao.css">
    <link rel="stylesheet" type="text/css" href="estilos/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="estilos/rodape.css">   
    
    <!-- //Estilos da pagina  -->
    
    <link rel="stylesheet" type="text/css" href="estilos/carrossel.css">   
    <link rel="stylesheet" type="text/css" href="estilos/styleInicio.css"> 
</head>

<body onload="carrossel()">
    <!-- Cabeçalho da página  -->
<div class="container">
    <?php  include_once "elementos/cabecalho.html";   ?>
    <!-- Corpo da página  -->
    <div class="titulo">
    <h1>Bem-Vindo</h1>
    </div>
        <div class="carrossel">
            <div class="container-car" id="img">
                <img src="imagens/camisa.png" alt="">
                <img src="imagens/neymar.png" alt="">
                <img src="imagens/salah.png" alt="">
           
            </div>
        </div>

<?php include_once "elementos/rodape.html";      ?>
</div>


<!-- Links para os icones & logos usados -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<!-- ********************************* -->
<!-- Scripts necesários -->

<script src="action/carrossel.js"></script>
    <script src="action/cabecalho.js"></script>
    


<!-- ***************************** -->
</body>
</html>