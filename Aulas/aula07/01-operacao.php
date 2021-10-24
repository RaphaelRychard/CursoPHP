<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body>
        <section>
            <h1>Operadores Ralacionais</h1>
            <?php  
                $n1 = $_GET ["a"];
                $n2 = $_GET ["b"];
               $tipo = $_GET ["op"];

               echo "<p>Os valores passados foram $n1 e $n2 </p>";

               $r = ($tipo == "s" ) ? $n1+$n2 : $n1*$n2; 
               echo "<p>O resultado sera $r</p>"; 
            ?>

        </section>
    </body>

</html>