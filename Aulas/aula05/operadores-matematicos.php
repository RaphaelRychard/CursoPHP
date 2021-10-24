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
                    $v1 = $_GET ["X"];
                    $v2 = $_GET["Y"];

                    echo "<h2> Valores recebidos: $v1 e $v2 </h2>";
                    echo "O valor absoluto de $v2 é ". abs($v2);
                    echo "<br>O valor de $v1 <sup>$v2</sup> é ". pow($v1, $v2);
                    echo "<br>A raiz de $v1 é: ". sqrt($v1);
                    echo "<br> O valor $v2 arredondado é ". round($v2);/* ceil(arronda para cima) / floor (arredonda para baixo)*/
                    echo "<br>A parete intiera de $V2 é ". intval($v2);
                    echo "<br> O valor de $v1 em moeda é R$". number_format ($v1, 2, ",", ".");
                ?>
              
            </section>

        </article>

    </body>

</html>