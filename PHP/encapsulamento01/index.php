<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Encapsulamento</title>
        <link rel="stylesheet" href="_css/style.css"/>
    </head>
    <body>
    <div>
        <?php
            require_once 'RemoteControl.php';
            $controle = new RemoteControl();
            $controle->powerOn();
            $controle->openMenu();
        ?>
    </div>
    </body>
</html>