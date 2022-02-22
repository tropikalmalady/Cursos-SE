<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercicio</title>
        <link rel="stylesheet" href="_css/index.css"/>
    </head>
    <body>
    <div>
        <form method="get" action="contador.php">
            Inicio: 
            <input type="number" min="0" max="100" name="start" required=""/><br/>
            Final: 
            <input type="number" min="0" max="100" name="end" required=""/><br/>
            Incremento: 
            <select name="inc">
                <?php
                for ($i=1; $i<=10; $i++) {
                    echo "<option>$i</option>";
                }
                ?>
            </select>
            <input type="submit" id="button">
        </form>
    </div>
    </body>
</html>