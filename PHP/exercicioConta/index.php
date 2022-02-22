<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>POO</title>
        <link rel="stylesheet" href="_css/index.css"/>
    </head>
    <body>
    <div>
        <form method="GET" action="MenuConta.php">
            <legend>Abrir conta em banco:</legend>
            <fieldset>
                <legend>Tipo da conta: </legend>
                <label for="cc">Conta Corrente:</label>
                <input type="radio" name="tipo" id="cc" value="cc" required/>
                <label for="cp">Conta Poupança:</label>
                <input type="radio" name="tipo" id="cp" value="cp" required/>
            </fieldset>
            Proprietário da conta: <input type="text" name="dono" placeholder="Nome Completo"/>
            <input type="submit" class="button" value="ABRIR CONTA"/>
        </form>
    </div>
    </body>
</html>