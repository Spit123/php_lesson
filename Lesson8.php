<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1
    echo "Задача 1<br/>";
    $arr1 = range(1, 10);
    echo array_sum($arr1)/count($arr1);
    //2
    echo "<br/><hr>Задача 2<br/>";
    $arr2 = range(1,100);
    echo array_sum($arr2);
    //3
    echo "<br/><hr>Задача 3<br/>";
    $arr3 = range(1,100);
    echo "[ ".implode(", ", $arr3)." ]";
    //4
    echo "<br/><hr>Задача 4<br/>";
    $arr4 = array_fill(0, 10, 'x');
    echo "[ ";
        foreach ($arr4 as $elem) {
                echo $elem.", ";
        }
        echo " ]";
    //5
    echo "<br/><hr>Задача 5<br/>";
    $arr5 = range(1, 10);
    shuffle($arr5);
    foreach ($arr5 as $elem) {
        if ($arr5[0] == $elem) {
            echo "[ ".$elem.", ";
        } elseif ($elem == $arr5[count($arr5)-1]) {
            echo $elem." ]";
        } else {
            echo $elem.", ";
        }
    }
    //6
    echo "<br/><hr>Задача 6<br/>";
    $fact = 7;
    $arr6 = range(1, $fact);
    echo array_product($arr6);
    //7
    echo "<br/><hr>Задача 7<br/>";
    $num = 1024;
    $arr7 = str_split($num);
    echo array_sum($arr7);
    //8
    echo "<br/><hr>Задача 8<br/>";
    $str = "Hello";
    $str = strrev(ucfirst(strrev($str)));
    echo $str;
    //9
    echo "<br/><hr>Задача 9<br/>";
    $arr9 = [ 1, 4, 9, 16, 25, 36, 49, 64, 81];
    $res = array_map('sqrt', $arr9);
    foreach ($res as $elem) {
        if ($res[0] == $elem) {
            echo "[ ".$elem.", ";
        } elseif ($elem == $res[count($res)-1]) {
            echo $elem." ]";
        } else {
            echo $elem.", ";
        }
    }
    //10
    echo "<br/><hr>Задача 10<br/>";
    $values = range(1,26);
    $keys = range('a', 'z');
    $result = array_combine($keys, $values);
    echo "[ ";
    foreach ($result as $keys=>$elem) {
        echo "'".$keys."' => ".$elem.", ";
    }
    echo " ]";
    //11
    echo "<br/><hr>Задача 11<br/>";
    $str11 = '1234567890';
    $arr11 = str_split($str11, 2);
    echo array_sum($arr11);
    ?>
</body>
</html>