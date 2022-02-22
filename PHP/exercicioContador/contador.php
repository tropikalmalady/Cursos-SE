<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercicio</title>
        <link rel="stylesheet" href="_css/index.css"/>
    </head>
    <body>
    <div>
        <?php
            $start = $_GET["start"];
            $end = $_GET["end"];
            $inc = $_GET["inc"];
            if ($start<=$end) {
                for ($i=$start; $i<=$end; $i=$i + $inc) {
                    echo "$i ";
                }
            } else {
                for ($i=$start; $i>=$end; $i=$i - $inc) {
                    echo "$i ";
                } 
            }
            echo "<a href='javascript:history.go(-1)'>VOLTAR</a>";
        ?>
    </div>
    </body>
</html>