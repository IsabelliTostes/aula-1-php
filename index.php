<!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <?php 
                $nome= "Isabelli";
                $cidade= "Cornelio prcopio";
                $numeroCasa= 180;
                $numeroChamada=15;

                /*se (isso acontecer) {
                    faça isso 
                }*/

                if ($numeroCasa<$numeroChamada) {
                    echo 'verdadeiro';
                } else {
                    echo 'falso';
                }
            ?>

            <h1> Ficha de Cadastro </h1>

            <p> Nome: <?=$nome?> </p>
            <p> Cidade:<?=$cidade?></p>
        </body>
</html>