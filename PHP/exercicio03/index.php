<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Pessoa - Livro</title>
        <link rel="stylesheet" href="_css/index.css"/>
    </head>
    <body>
    <div><pre>
        <?php
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            require_once 'Visitante.php';
            $p1 = new Bolsista;
            $c=($p1 instanceof Aluno);
            echo $c;
        ?>
    </div></pre>
    </body>
</html>