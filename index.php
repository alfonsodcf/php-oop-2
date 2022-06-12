<?php
require_once __DIR__.'/Classes/Products.php';
require_once __DIR__.'/Classes/CreditCard.php';
require_once __DIR__.'/Classes/User.php';

    $User1 = new User('Alfonso');

    $Products1= new Products('RedDog', 7,'colare','cane');

    $creditCard1= new CreditCard('4000 1234 5678 9100', 104, '09-26');
    $User1-> setCreditCard($creditCard1);

    try {
        $User1-> setConto($Products1->getPrezzo());
    }catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }
    

    var_dump($User1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cani&gatti</title>
</head>
<body>
    
</body>
</html>