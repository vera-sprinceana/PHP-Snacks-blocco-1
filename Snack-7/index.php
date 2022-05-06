<?php
/*## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome,
 Cognome e un array contenente i suoi voti scolastici. Stampare Nome, 
 Cognome e la media dei voti di ogni alunno. */
$classe=[
    [
        'nome'=> 'Alberto',
        'cognome'=> 'Rossi',
        'voti'=>[8, 6, 5, 6, 7]
    ],
    [
        'nome'=> 'Mario',
        'cognome'=> 'Super',
        'voti'=>[4, 9, 8, 4, 7]
    ],
    [
        'nome'=> 'Angelica',
        'cognome'=> 'Gozzi',
        'voti'=>[10, 10, 8, 6, 7]
    ],
    [
        'nome'=> 'Lucrezia',
        'cognome'=> 'Rodriguez',
        'voti'=>[8, 9, 5, 6, 7]
    ],
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-7</title>
</head>
<body>
    <p>
    <?php 
    for($i=0; $i< count($classe); $i++) {
        echo $classe[$i]['nome'] . "-" . $classe[$i]['cognome'] . " | " . array_sum($classe[$i]['voti'] )/4 . "<br/>";
    }
    ?>
</p>

</body>
</html>