<?php

/*## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */
$name= isset($_GET['name']) ? $_GET['name'] : '';
$email= isset($_GET['email']) ? $_GET['email'] : '';
$age= isset($_GET['age']) ? (int)$_GET['age'] : '';
$validazioneName= false;
$validazioneEmail= false;
$validazioneAge= false;
if(strlen($name) <3){
    echo "<p> Il nome deve contenere almeno 3 caratteri</p>";
}else{
    $validazioneName= true;
};

if(strpos($email, '@') == 0 || strpos($email, '.') == 0){
    echo "<p>L'email deve contenere @ e .</p>";
}else{
    $validazioneEmail= true;
};
if(is_numeric($age)){
    echo "<p> Il valore dell'età deve essere un numero</p>";
}else{
    $validazioneAge= true;
};
if( $validazioneName && $validazioneEmail && $validazioneAge){
    echo "<p>Accesso riuscito</p>";
}else{
    echo "<p>Acccesso Negato</p>";
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <form method="GET">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Age</label>
            <input type="number" name="age">
        </div>
        <button type="submit">Invia</button>
    </form>
</body>
</html>