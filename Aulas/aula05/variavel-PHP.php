<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variaves PHP</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        
        <article>
            <h1>Curso de PHP para Iniciantes - By Raphael Rychard</h1>
            <section>

               <!--  <img id="logo" src="img/logo-php.png" alt="logo do PHP"> -->
                
                <?php
                    $n1 = $_GET["a"];
                    $n2 = $_GET["b"];
                    $m = ($n1 + $n2) / 2;
                    echo "O n1 vale: $n1 <br> O n2 vale: $n2";
                    echo "<h2> Valores recebidos: $n1 e $n2 </h2>";

                    echo "a média vale $m";
                    echo "<br>A Soma vale: ". ($n1 + $n2);
                    echo "<br>A Subtaração vale: ". ($n1 - $n2);
                    echo "<br>A multiplicação vale: ". ($n1 * $n2);
                    echo "<br>A divisão vale: ". ($n1 / $n2);
                    echo "<br>O modulo vale: ". ($n1 % $n2);

                ?>
              
            </section>

        </article>

    </body>

</html>