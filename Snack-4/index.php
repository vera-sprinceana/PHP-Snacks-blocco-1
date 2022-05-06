<?php
/*## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */


    $arrayNumeri=[];
    $nItem=15;
    $min= 1;
    $max= 500;

           
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>

<body>
    <p>
        <?php
            while (count($arrayNumeri) <$nItem){
                $number= rand($min, $max);
                    if(!in_array($number, $arrayNumeri)){
                        $arrayNumeri[]=$number;
                    }      
            }
            var_dump($arrayNumeri) ; 
            return $arrayNumeri;
        ?>
    </p>
</body>

</html>