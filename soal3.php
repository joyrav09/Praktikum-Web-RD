<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<?php

function bil_prima($x) {
    for($i=1;$i<=$x;$i++){ 
        $a=0;
        for($j=1;$j<=$i;$j++){ 
            if($i % $j == 0){
                $a++;
            }
        }
        if($a == 2){
         echo $i. ' ';
        }
    }
        
    }

?>

Bilangan prima dari 1 - <?php echo "50";?> adalah : <p></p>

<?php bil_prima(50)?>

</body>
</html>