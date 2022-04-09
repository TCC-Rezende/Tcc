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
                    <input type="text" placeholder="Usuario">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="CPF">
                    <input type="password" placeholder="Senha">
                    <input type="password" placeholder="Confirmar Senha">
                    <input type="submit" value="Registrar"> 
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