<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<?php
function bubble_Sort($my_array ){
    do{
        $swapped = false;
        for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ ){
            if( $my_array[$i] > $my_array[$i + 1] ){
                list( $my_array[$i + 1], $my_array[$i] ) =
                        array( $my_array[$i], $my_array[$i + 1] );
                $swapped = true;
            }
        }
    }
    while( $swapped );
return $my_array;
}

$test_array = array('larine', 'aduh', 'qifuat', 'toda', 'anevi', 'samid', 'kifuat', 'jeom', 'lama', 'kamdo');


echo "Data Sebelum Diurutkan :<br>";
echo implode(', ',$test_array );

echo "<p></p>";
echo "Data Setelah Diurutkan : <br>";
echo implode(', ',bubble_Sort($test_array));
?>

</body>