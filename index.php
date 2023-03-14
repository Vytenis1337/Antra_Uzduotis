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
    $in = array(1, 2, 4, 7, 1, 6, 2, 8);

    // Sort array decreasing
    rsort($in, SORT_NUMERIC);

    // Start with two empty arrays
    $arr1 = $arr2 = array();

    // Put the next value in the array in the array with the lowest sum
    foreach ($in as $value)
        if (array_sum($arr2) > array_sum($arr1)) $arr1[] = $value;
        else $arr2[] = $value;

    // Wrap in array (as in question)
    // $out = array($arr1, $arr2);

    $List1 = implode(' + ', $arr1);
    $List2 = implode(' + ', $arr2);


    echo "Rezultatai";
    echo "<br>";
    print_r($List1);
    echo " = ";
    echo array_sum($arr1);
    echo "<br>";
    print_r($List2);
    echo " = ";
    echo array_sum($arr2);



    ?>
</body>

</html>