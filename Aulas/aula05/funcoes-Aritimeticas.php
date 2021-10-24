<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funçẽos Aritméticas</title>

        <!--CSS EXTERNAL  -->
        <link rel="stylesheet" href="./css/style.css">

    </head>

    <body>
    
        <section>
            <h1>Funçẽos Aritméticas</h1>

            <?php
                $n1 = $_GET ["X"];
                $n2 = $_GET ["Y"];

                echo "<h2>Valore Recebidos: $n1 e $n2 </h2>";
                echo "<p>O valor absoluto de $n2 é ". abs($n2). " </p>";
                echo "Valor $n1 <sup>". $n2 ."</sup> é igual a: ". pow($n1, $n2). " </p>";
                echo "<p>O valor absoluto de $n1 é ". round($n2). " </p>";
                echo "<p>O valor absoluto de $n1 é ". sqrt($n1). " </p>";
                echo "<p>O valor R$:". number_format($n1, 2, ",", "."). " </p>";
            ?>

        </section>

    </body>

</html>