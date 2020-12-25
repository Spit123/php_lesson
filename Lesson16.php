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
        function isNumberInRange($num) {
            return $num > 0 and $num < 10;
        }
        var_dump(isNumberInRange(5));
        //2
        echo "<br/><hr>Задача 2<br/>";
        $arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9 , 10, 11, 12, 13, 14, 15, 16];
        foreach($arr2 as $elem) {
            if (isNumberInRange($elem)) {
                $arrNumber[] = $elem;
            }
        }
        foreach ($arrNumber as $elem) {
            if ($arrNumber[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arrNumber[count($arrNumber)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //3
        echo "<br/><hr>Задача 3<br/>";
        function getDigitsSum($digit) {
            $arr = str_split($digit, 1);
            $sum = 0;
            foreach($arr as $elem) {
                $sum += $elem;
            }
        return $sum;
        }
        echo getDigitsSum(123);
        //4
        echo "<br/><hr>Задача 4<br/>";
        $arrYear = range(1, 2020);
        foreach($arrYear as $elem) {
            if (getDigitsSum($elem) == 13) {
                echo $elem."<br>";
            }
        }
        //5
        echo "<br/><hr>Задача 5<br/>";
        function isEven($num) {
            return $num % 2 == 0;
        }
        var_dump(isEven(2020));
        //6
        echo "<br/><hr>Задача 6<br/>";
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9 , 10, 11, 12, 13, 14, 15, 16];
        foreach($arr as $item) {
            if (isEven($item)) {
                $arrEven[] = $item;
            }
        }
        foreach ($arrEven as $elem) {
            if ($arrEven[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arrEven[count($arrEven)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //7
        echo "<br/><hr>Задача 7<br/>";
        function getDividers($num) {
            for($i = 1; $i <= $num; $i++) {
                if ($num % $i == 0) {
                    $divs[] = $i;
                }
            }
        return $divs;
        }
        $num = 6;
        foreach (getDividers($num) as $elem) {
            if (getDividers($num)[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == getDividers($num)[count(getDividers($num))-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //8
        echo "<br/><hr>Задача 8<br/>";
        $num1 = 16;
        $num2 = 32;

        function getCommonDivisors($n1, $n2) {
            return array_intersect(getDividers($n1), getDividers($n2));
        }

        $arr8 = getCommonDivisors($num1, $num2);
        foreach ($arr8 as $elem) {
            if ($arr8[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr8[count($arr8)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
    ?>
</body>
</html>