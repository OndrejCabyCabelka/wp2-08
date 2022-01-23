<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once ('functions.php');

        
            
        
        $fighter[0]['name']= 'Ondrej';
        $fighter[0]['HP']= 110;
        $fighter[0]['attack']= rand(1,100);
        
        $fighter[1]['name']= 'Filip';
        $fighter[1]['HP']= 100;
        $fighter[1]['attack']= rand(1,100);

        echo fight ($fighter[0] , $fighter[1]  );

        




    ?>
</body>
</html>