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
    
        <section>
            <h1>Curso de PHP para Iniciantes - By Raphael Rychard</h1> 
            <img id="logo" src="img/logo-php.png" alt="logo do PHP">

            <?php
                $valor = $_GET ["calcular"];
                $raiz = sqrt($valor);
                echo "A raiz de $valor é igual ". number_format($raiz, 2);
            ?>
            <!-- as aspas tem que ser duplas -->
            <a href="./index.html">Voltar</a>
        </section>

    </body>

</html>