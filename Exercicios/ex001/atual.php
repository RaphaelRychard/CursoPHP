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
            <h1>Ano atual</h1>
            <?php           
                $atual = $_GET ["a"]; /* Ano atual */
                echo "<h2>O Ano atual é $atual é o ano anterior é ". --$atual. " </h2>";
                echo "";
            ?>
        </section>
    </body>

</html>