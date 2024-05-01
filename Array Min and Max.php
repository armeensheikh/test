<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<?php
//minimum value
$array = array(10,78,75,24,90);
    $min_value = min($array);
    echo"the minimum value in the array is:".$min_value."<br>";
    // maximum value:
    $array = array(10,78,75,24,90);
    $max_value=max($array);
    echo"the maximum value in the array is :".$max_value."<br>";
    //ascending order:
    $arary = array(10,78,75,24,90);
    sort($array);
    echo"Array sorted in ascending order:";
    print_r($array)."<br>";
    //descending order 
    $array=array(10,78,75,24,90);
    rsort($array);
    echo"Array sorted in decending order:";
    print_r($array)."<br>";
    //2nd largest 
    $array=array(10,78,75,24,90);
    rsort($array);
    $second_largest =$array[1];
    echo"the second largest value in the array is:".$second_largest."<br>";



?>
</body>
</html>