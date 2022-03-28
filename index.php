<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Título</title>
    <!--
     <link rel="stylesheet" type="text/css" href="estilos/default.css">
    <link rel="stylesheet" type="text/css" href="estilos/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="estilos/styleInicio.css"> -->
    <style>
    <?php
    include_once "estilos/padrao.css";
    include_once "estilos/cabecalho.css";
    include_once "estilos/rodape.css";
    include_once "estilos/styleInicio.css";
    ?>
    </style>
</head>

<body>
    <!-- Cabeçalho da página  -->
<div class="container">
    <?php  include_once "elementosPag/cabecalho.html";   ?>
    <!-- Corpo da página  -->
    <div class="titulo">
    <h1>Bem-Vindo</h1>
    </div>
    

<?php include_once "elementosPag/rodape.html";      ?>
</div>


<!-- Links para os icones & logos usados -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- ********************************* -->

</body>
</html>
