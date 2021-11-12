<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<?php
function bubble_Sort($array ){
    do{
        $swapped = false;
        for( $i = 0, $c = count( $array ) - 1; $i < $c; $i++ ){
            if( $array[$i] > $array[$i + 1] ){
                list( $array[$i + 1], $array[$i] ) =
                        array( $array[$i], $array[$i + 1] );
                $swapped = true;
            }
        }
    }
    while( $swapped );
return $array;
}

$nama_string = array('larine', 'aduh', 'qifuat', 'toda', 'anevi', 'samid', 'kifuat', 'jeom', 'lama', 'kamdo');


echo "Data Sebelum Diurutkan :<br>";
echo implode(', ',$nama_string );

echo "<p></p>";
echo "Data Setelah Diurutkan : <br>";
echo implode(', ',bubble_Sort($nama_string));
?>

</body>
