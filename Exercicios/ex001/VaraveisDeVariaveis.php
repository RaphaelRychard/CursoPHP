<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>

        <section>
            <h1>variavel de variavel</h1>

            <?php           
                $site = "Cursoemvideo";
                $$site = "CURSOPHP";
                echo "<h2>O conteudo da variavel $site</h2>";
                echo "<p>A variavel do valor criada recebeu o valor $Cursoemvideo</p>"; 
            ?>

        </section>
    </body>

</html>