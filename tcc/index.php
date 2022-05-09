<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     <title>SR.Imports | A loja dos fanáticos por futebol</title>
<!-- Estilos necessários               ps: sempre carrafgar nessa ordem-->
    <link rel="stylesheet" type="text/css" href="estilos/padrao.css">
    <link rel="stylesheet" type="text/css" href="estilos/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="estilos/rodape.css">   
    
    <!-- //Estilos da pagina  -->
    
    <link rel="stylesheet" type="text/css" href="estilos/carrossel.css">   
    <link rel="stylesheet" type="text/css" href="estilos/styleInicio.css"> 
</head>

<body>
    <!-- Cabeçalho da página  -->
<div class="container">
    <?php  include_once "elementos/cabecalho.html";   ?>
    <!-- Corpo da página  -->
    <div class="titulo">
    <h1>Bem-Vindo</h1>
    </div>
        <div class="slider">
            <div class="slides">
                <!--Radio Button--->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <!-- <input type="radio" name="radio-btn" id="radio4"> -->
                <!--Fim Radio Button--->

                <!--Slides imagens--->
                <div class= "slide first">
                    <img src="imagens/camisa.png" alt="imagem 1 camisas">
                </div>
                
                <div class="slide">
                    <img src="imagens/neymar.png" alt="imagem 2 ney">
                </div>

                <div class="slide">
                    <img src="imagens/salah.png" alt="imagem 3 salah">
                </div>
                 <!--Fim Slides imagens--->

                  <!--Navigaton auto--->
            <div class="navigation-auto">
                  <div class="auto-btn1"></div>
                  <div class="auto-btn2"></div>
                  <div class="auto-btn3"></div>
                  <!-- <div class="auto-btn4"></div> -->
            </div>

            </div>
        <div class="manual-navegation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <!-- <label for="radio4" class="manual=btn"></label> -->
        </div>

    </div>

<?php include_once "elementos/rodape.html";      ?>
</div>


<!-- Links para os icones & logos usados -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<!-- ********************************* -->
<!-- Scripts necesários -->

<script src="action/slider.js"></script>
    <script src="action/slider.js"></script>
    


<!-- ***************************** -->
</body>
</html>