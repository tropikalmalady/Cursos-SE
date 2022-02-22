<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>POO</title>
        <link rel="stylesheet" href="_css/index.css"/>
    </head>
    <body>
    <div>
        <?php
            require_once "Conta.php";
            $conta = new Conta();
            $conta->abrirConta($_GET["tipo"], $_GET["dono"]);
            $conta->depositar(500);
            $conta->sacar(80);
            echo "Seu saldo é de R$ ".$conta->getSaldo();
        ?>
    </div>
    </body>
</html>l