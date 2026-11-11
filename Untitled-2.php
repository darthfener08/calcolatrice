<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $Risultato = "";

        
        if ($_POST) {
            $operatore = $_POST['operatore'];
            $a = $_POST['a'];
            $b = $_POST['b'];

            if ($operatore == "somma") {
                $Risultato = $a + $b;
            }
            if ($operatore == "sottrazione") {
                $Risultato = $a - $b;
            }
            if ($operatore == "moltiplicazione") {
                $Risultato = $a * $b;
            }
            if ($operatore == "divisione") {
                $Risultato = $a / $b;
            }

            if (isset($_POST['options'])) {
                $opzioni = $_POST['options'];

                // Valore assoluto
                if (in_array("absolute", $opzioni)) {
                    $Risultato = abs($Risultato);
                }
                // Elevamento al quadrato
                if (in_array("square", $opzioni)) {
                    $Risultato = $Risultato * $Risultato;
                }
                // Arrotondamento a 2 cifre decimali
                if (in_array("arrotonda", $opzioni)) {
                    $Risultato = round($Risultato, 2);
                }
            }
        }



        
    ?>
    <h1>Calcolatrice</h1>
    
    <form method="POST">
        <br>
        <div>
            <label for="a"> a: </label>
            <input id="a" type="text" name="a" />
        </div>
        <div>
            
            <label for="b"> b: </label>
            <input id="b" type="text" name="b" />
        </div>
        <br>
        <fieldset style="width: 300px">
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
        <fieldset style="width: 300px">
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

        </fieldset >
        <br>
        <input type="submit" value="calcola">
        <br>
        <p>Risultato: <?php echo $Risultato ?></p>
    </form>
</body>
</html>