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
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            $p = array();
            $l = array();
            $p[] = new PessoaL('Lincolnn', 21, 'M');
            $p[] = new PessoaL('Dani', 21, 'F');
            $l[] = new Livro('1984', 'George Orwell', 200, $p[0]);
            $l[] = new Livro('Admiravel Mundo Novo', 'Aldous Huxley', 150, $p[0]);
            $l[] = new Livro('A cabana', 'WIlliam Young',250, $p[1]);
            $l[0]->folhear(134);
            $l[0]->voltarPag();
            $l[0]->detalhes();
        ?>
    </div></pre>
    </body>
</html>