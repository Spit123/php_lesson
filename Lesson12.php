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
    $arr = [ 1, 2, 3, 5, 4, 6];
    $flag = false;
    function hasElem($arr) {
        foreach($arr as $elem) {
            if($elem == 5) {
                $flag = true;
            }
        }
        return $flag;
        }

    if (hasElem($arr)) {
        echo 'Да';
    } else {
        echo 'Нет';
    }
    //2
    echo "<br/><hr>Задача 2<br/>";
    $num = 31;
    $flag2 = false;
    function fun2($num) {
    for($i = 2; $i < $num; $i++) {
        if($num % $i == 0) {
            $flag2 = true;
        }
    }
    return $flag2;
    }

    if (fun2($num)) {
        echo "Да";
    } else {
        echo "Нет";
    }
    //3
    echo "<br/><hr>Задача 3<br/>";
    $arr = [ 1, 2, 3, 5, 4, 6, 6];
    $flag3 = false;
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] == $arr[$i+1]) {
            $flag3 = true;
            break;
        }
    }

    if($flag3 == true) {
        echo "Да";
    } else {
        echo "Нет";
    }
    ?>
</body>
</html>