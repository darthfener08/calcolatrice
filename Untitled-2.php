<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $Risultato = ""






    ?>
    <h1>Calcolatrice</h1>
    <form action="">
        <br>
        <div>
            <label for="a"> a: </label>
            <input id="a" type="text" name="a" />
            
        </div>
        <div>
            <label for="a"> b: </label>
            <input id="b" type="text" name="b" />
        </div>
        <br>
        <fieldset>
                <legend>operatori</legend>
                <div>
                    <input id="somma" type="radio" name="operatore" value="somma" />
                    <label for="somma"> somma </label>
                </div>
                <div>
                    <input id="sottrazione" type="radio" name="operatore" value="sottrazione" />
                    <label for="sottrazione"> sottrazione </label>
                </div>
                <div>
                    <input id="moltiplicazione" type="radio" name="operatore" value="moltiplicazione" />
                    <label for="moltiplicazione"> moltiplicazione </label>
                </div>
                <div>
                    <input id="divisione" type="radio" name="operatore" value="divisione" />
                    <label for="divisione"> divisione </label>
                </div>

        </fieldset>
        <br>
        <fieldset>
                <legend>opzioni</legend>
                <div>
                    <input id="absolute" type="checkbox" name="options[]" value="absolute" />
                    <label for="absolute"> valore assoluto </label>
                </div>
                <div>
                    <input id="square" type="checkbox" name="options[]" value="square" />
                    <label for="square"> quadrato </label>
                </div>
                <div>
                    <input id="arrotonda" type="checkbox" name="options[]" value="arrotonda" />
                    <label for="arrotonda"> arrotonda a 2 decimali </label>
                </div>

        </fieldset>
        <br>
        <input type="submit" value="calcola">
        <br>
        <p>Risultato: <?php  echo $Risultato ?></p>
    </form>
</body>
</html>