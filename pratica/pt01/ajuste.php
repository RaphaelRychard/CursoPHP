<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php</title>

        <!-- PHP -->
        <?php
            $nome = isset ($_GET ["text-nome"]) ? $_GET ["text-nome"] : "[ <strong>Sem dados</strong> ]";
            $tamanho = isset ($_GET ["camptext"]) ? $_GET ["camptext"] : "12pt";
            $city = $_GET ["city"] ;
            $cor = isset ($_GET ["capm-cor"]) ? $_GET ["capm-cor"] : "#000";
            $anos = isset ($_GET ["text-ano"]) ? $_GET ["text-ano"] : "Idade não Digitada";
            $idade = date("Y") - $anos
        ?>

        <style>
            span.user {
                font-size: <?php echo $tamanho; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>

        <link rel="stylesheet" href="./css/style.css">

    </head>

    <body>
        <main>
            <section class="item">
                <h1>PHP - Pratica</h1>
                <article>
            
                    <?php
                        echo "<span class='user'>$nome de $idade anos, mora em $city</span>";
                    ?>

                    <a id="voltar" href="./index.html">Voltar</a>

                </article>
            </section>
        </main>
    </body>

</html>