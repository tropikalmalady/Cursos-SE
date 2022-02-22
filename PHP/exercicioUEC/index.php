<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>UEC</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
    <div><pre>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = array();
            $l[] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $l[] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $l[] = new Lutador("Lincolnn", "Brasil", 21, 1.78, 70, 0, 20, 1);
            $l[] = new Lutador("Jabulani", "África do Sul", 24, 1.82, 80, 15, 1, 1);
            foreach ($l as $i) {
                $i->status();
            }
            $UEC = new Luta();
            $UEC->marcarLuta($l[0], $l[1]);
            $UEC->lutar();
            $l[0]->status();
            $l[1]->status();
        ?></pre>
    </div>
    </body>
</html>