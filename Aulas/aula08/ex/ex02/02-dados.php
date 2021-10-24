<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <article>
            <h1>Curso de PHP para Iniciantes - By Raphael Rychard</h1> 
            <section id="bg">
                <img id="logo" src="img/logo-php.png" alt="logo do PHP">
                <?php
                        //isset significa se foi configuraado se foi passado como parametro.
                    $nome = isset($_GET ["nome"] ) ?  $_GET ["nome"] : "[ Não informado ]"; 
                    $ano = isset($_GET ["ano"]) ? $_GET ["ano"] : 0;
                    $sexo = isset($_GET ["sexo"]) ? $_GET ["sexo"] : "[ Sem Sexo ]";
                    $idade = date("Y") - $ano;
                    echo "$nome é $sexo e tem $idade anos.";
                ?>
                <!-- as aspas tem que ser duplas -->
            </section>
            <a href="./02exercicios.html">Voltar</a>
            
        </article>

    </body>

</html>