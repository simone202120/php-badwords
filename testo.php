<?php

    $ParolaCensurata= $_POST['censura'];


    $TestoDaCensurare= "Anonymous functions yield objects of this type. This class has methods that allow further control of the anonymous function after it has been created";

    $TestoCensurato=str_replace($ParolaCensurata, "***", $TestoDaCensurare );

    $LunghezzaTesto= strlen($TestoCensurato);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p><?php echo $TestoCensurato;  ?></p>

    <p>numero caratteri: <?php echo $LunghezzaTesto ?></p>
    
</body>
</html>