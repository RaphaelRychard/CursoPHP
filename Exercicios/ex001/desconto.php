<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desconto de 10%</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <section>
            <h1>10% de Aumento.</h1>

            <?php
                $preco = $_GET ["p"];
                $preco += ($preco * (10/100));
                echo "<h2>O preço do produto foi $preco.</h2>";
                echo "<p>O produto sobreu 10% de Aumento e passou a valer  R$:". number_format($preco, 2, '.', ','). " </p>";
            ?>

            

        </section>
    </body>

</html>