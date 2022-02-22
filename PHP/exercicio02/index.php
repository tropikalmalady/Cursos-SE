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
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            $p =array();
            $p[] = new PessoaS;
            $p[] = new Aluno;
            $p[] = new Professor;
            $p[] = new Funcionario;
            $p[0]->setNome("Pedro");
            $p[1]->setNome("Maria");
            $p[2]->setNome("Claudio");
            $p[3]->setNome("Fabiana");
            $p[1]->setCurso("Informatica");
            $p[2]->setSalario(2500);
            $p[3]->setSetor("Estoque");
            $p[2]->receberAum(510);
            $p[3]->mudarTrabalho();
            $p[1]->cancelarMatr();
            var_dump($p);
        ?>
    </div></pre>
    </body>
</html>