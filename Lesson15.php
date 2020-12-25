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
        $arr=[];
        $str = '';
        for ($i=0; $i < 10; $i++) {
            $str .= 'x';
            $arr[$i] = $str;
        }
        foreach ($arr as $elem) {
            if ($arr[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr[count($arr)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //2
        echo "<br/><hr>Задача 2<br/>";
        $arr2 = [];
        for ($i = 1; $i <= 9; $i++) {
            $str2 = "";
            for ($j = 0; $j < $i; $j++) {
                $str2 .= $i;
            }
            $arr2[] = $str2;
        }
        foreach ($arr2 as $elem) {
            if ($arr2[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr2[count($arr2)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //3
        echo "<br/><hr>Задача 3<br/>";
        function arrayFill ($object, $count) {
            for ($i=0; $i < $count; $i++) {
                $arr3[$i] = $object;
            }
            return $arr3;
        }
        $array3 = arrayFill("i",10);
        echo "[ ";
        for ($i = 0; $i < count($array3); $i++) {
            if ($i == count($array3)-1) {
                echo $array3[$i]." ]";
            } else {
                echo $array3[$i].", ";
            }
        }
        //4
        echo "<br/><hr>Задача 4<br/>";
        function arraySum ($arr) {
            $sum = 0;
            for ($i=0; $i < count($arr); $i++) {
                $sum += $arr[$i];
                if ($sum > 10) {
                    return $i+1;
                }
            }
        }
        $res = [1,2,3,4,5,6,7,8,9];
        echo arraySum($res);
        //5
        echo "<br/><hr>Задача 5<br/>";
        function arrSumm ($arr) {
            $sum = 0;
            foreach ($arr as $value) {
                foreach ($value as $value_2) {
                    $sum += $value_2;
                }
            }
        return $sum;
        }
        $array5 = [[1, 2, 3], [4, 5], [6]];
        echo arrSumm($array5);
        //6
        echo "<br/><hr>Задача 6<br/>";
        function arrSum ($arr) {
            $sum = 0;
            foreach ($arr as $value) {
                foreach ($value as $value_2) {
                    foreach ($value_2 as $value_3) {
                        $sum += $value_3;
                    }
                }
            }
        return $sum;
        }
        $array6 = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        echo arrSum($array6);
        //7
        echo "<br/><hr>Задача 7<br/>";
        $arr = [];
        $num = 0;
        for ($i=0; $i < 3; $i++) {
            for ($j=0; $j < 3; $j++) {
                $num++;
                $arr2[$j] = $num;
            }
        $arr[$i] = $arr2;
        }

        var_dump($arr);
    ?>
</body>
</html>