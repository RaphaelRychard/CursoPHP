<!DOCTYPE html>
<html lang="pt-brs">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/media.css">
    </head>

    <body>
        <section>
            <h1>Verificando Notas</h1>

            <?php 
                $nota1 = $_GET ["n1"];
                $nota2 = $_GET ["n2"];
                $media = ($nota1 + $nota2) / 2;
                echo "<p>A media entre $nota1 e $nota2 é $media</p>";
                echo "<p>A situação do aluno é ".  
                (($media < 6) ? "<span>REPROVADO</span>" : "<strong>APROVADO</strong>"). " </p>";
            ?>
        </section>
    </body>

</html>