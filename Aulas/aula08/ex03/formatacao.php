<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <?php 
            $txt = isset ($_GET ["t"] ) ? $_GET ["t"] : "<strong>Texto Generico</strong>";
            $tam = isset ($_GET ["tem"]) ?  $_GET ["tem"] : "<strong>12pt</strong>";
            $cor = isset ($_GET ["cor"]) ?  $_GET ["cor"] : "#000";
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            span.texto {
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>
    </head>

    <body>
        <section id="bg">
            <h1>Formularios com persolização·</h1>

            <?php
                echo "<span class='texto' >$txt</span>";
            ?>

            <a href="./index.html">Voltar</a>
        </section>
    </body>

</html>