<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


    function fight($fighterA, $fighterB)
    {
        while ($fighterA['HP'] >=0 OR $fighterB['HP'] >= 0 ) {


////prvni

            

            echo "Boj započal";

            echo "Vystřelili prvni";

            $fighterA['HP'] == $fighterA['HP'] - $fighterB['attack'].   "<br>";

            echo $fighterB['name']."ubral". $fighterB['attack']."<br>";

            echo $fighterA['name']. "má". $fighterA['HP']."<br>";

            if ($fighterA<= 0) {
                return $fighterB['name'];

            }



////druhy

            echo "Vystřelili druhý";

            $fighterB['HP'] == $fighterB['HP'] - $fighterA['attack'] .   "<br>";

            echo $fighterA['name']."ubral". $fighterA['attack']."<br>";

            echo $fighterB['name']. "má". $fighterB['HP']."<br>";

            if ($fighterB<= 0) {
                return $fighterA['name'];

            }
        }
    }



?>
    
</body>
</html>
