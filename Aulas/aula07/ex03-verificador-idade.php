<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/php-estyle.css">
    </head>

    <body>
        <section>
            <h1>Verificador se pode votar!</h1>
            <?php
                $ano = $_GET ["an"];
                $idade = 2021 - $ano;
                echo "<p> Quem naceu em $ano, e tem a idade de $idade anos.</p> ";
                $tipo = (($idade >= 18 && $idade <= 65) ? "<span> OBRIGATORIO</span>" : "<strong> NÃO OBRIGATORIO</strong>");
                echo "<p>E dessa forma seu voto é  $tipo</p>";
            ?>  
        </section>
    </body>

</html