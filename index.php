<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>
<body>
    <h1>PHP Snacks blocco 1</h1>

    
    <?php
    /* Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60*/ 
        echo "<h2>Snack 1</h2>";

        // costruisco l'arrrey con la sqadra in casa ed il suo punteggio sempre in posizione 0
        $arrPartite = [
            [
                'squadre' => ['Olimpia Milano', 'Cantù'],
                'punteggio' => [55, 60],
            ],
            [
                'squadre' => ['Virtus Bologna', 'Juvecaserta'],
                'punteggio' => [80, 48],
            ],
            [
                'squadre' => ['Ginnastica Roma', 'Varese'],
                'punteggio' => [112, 99],
            ],
            [
                'squadre' => ['Reyer Venezia', 'Treviso'],
                'punteggio' => [77, 64],
            ],
        ]

    ?>

    <ul>
        <?php 
            for ($i=0; $i < count($arrPartite); $i++) { 
                echo "<li>{$arrPartite[$i]['squadre'][0]} - {$arrPartite[$i]['squadre'][1]} | {$arrPartite[$i]['punteggio'][0]}-{$arrPartite[$i]['punteggio'][1]}</li>";
            }
        ?>
    </ul>
</body>
</html>