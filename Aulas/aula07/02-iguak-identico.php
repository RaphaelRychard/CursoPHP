<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso de PHP</title>
        <link rel="stylesheet" href="./css/estilo.css">
    </head>

    <body>
        <section>
            <?php
                $a = 3;
                $b = "3";
                $r = $a === $b ? "SIM" : "NÃO";

                echo "As variaveis A e B são iguais? $r";
            ?>
        </section>
    </body>

</html>