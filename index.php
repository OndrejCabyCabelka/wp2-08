<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zásobovací loď a piráti</title>
</head>
<body>
     <?php
            $shiphp = 200; 
            $apal = 100;
            $botak = 0;

            define('MAX_SHOOTS', 5);

                while ( ($botak <100) && ($shiphp > 0)) 
                 {
                    $apal -= 10; 
                    echo "Naložili jsme 10 na apalu <br>";
                    echo "Lod vyplula z Apalu <br>";
                    echo "Piráti napadjí lod <br>";

                for ($i = 0; $i < MAX_SHOOTS; $i++) 
                { 
                    $damage = rand(0,20);
                    $shiphp -= $damage;
                
                        if($shiphp <= 0){
                    
                        echo "Lod byla zničena uprostřed bitvy <br>";    
                        break;
                }
                        echo "Piráti zasáhli zásobovací lod a ubrali" .$damage . $damage . "životů"." <br>";
                        echo "Lod má nyní HP:" .$shiphp. "<br>";
                }
    
                if($shiphp <= 0)
                {
                    break;
                }
    
                echo "Lod vykládá náklad na Botaku"."<br>";
                $botak +=10;
                echo "Nyní je na Botaku". $botak."<br>";
                echo "Lod jede zpátky na apal" ."<br>";

    }
</body>
</html> 