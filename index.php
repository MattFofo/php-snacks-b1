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

    <div class="container">
        <?php
        /* Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
        */ 
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
    </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <?php 
    /* Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */

        echo "<h2>Snack 2</h2>";

        $user = [
            'name' => $_GET['name'],
            'mail' => $_GET['mail'],
            'age' => $_GET['age'],
        ];
    ?>


    <form action="" method="GET" >
        <label for="name">
            name
            <input type="text" name="name">
        </label>
        <label for="mail">
            email
            <input type="text" name="mail">
        </label>
        <label for="age">
            age
            <input type="text" name="age">
        </label>
        <button>Accedi</button>
    </form>

    <?php 

        if (strlen($user['name']) > 3 && !is_int($user['age']) && (strpos($user['mail'], '@') !== false) && (strpos($user['mail'], '.')) !== false)
            echo 'access granted';
        else 
            echo 'access denied';

    ?>
<!-- ----------------------------------------------------------------------------------------------------------------------------- -->

<?php 
/* Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

    echo "<h2>Snack 3</h2>";
    
    $arrCasualNums = [];
        

    for ($i=0 ; $i < 15 ; $i++ ) {
        if (count($arrCasualNums) <= 15) {
            $rngNum = rand(1, 20);
            # code...
        }
        if (!in_array($rngNum, $arrCasualNums)) {
            $arrCasualNums[] = $rngNum;
        }
        echo $arrCasualNums[$i] . ' ';
    };
?>

<!-- --------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>