<?php
/*## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */


    $arrayNumeri=[];
    $nItem=15;
    $min= 1;
    $max= 1000;

           
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
                echo $number;
                    if(!in_array($number, $arrayNumeri)){
                        $arrayNumeri[]=$number. " - ";
                    }    
            }
        return $arrayNumeri;
      var_dump($arrayNumeri) ;  
        
        ?>
    </p>
</body>

</html>