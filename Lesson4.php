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
        $arr = ['html', 'css', 'php', 'js', 'jq'];
        foreach ($arr as $elem) {
            echo $elem."<br/>"; 
        }
        //2
        echo "<br/><hr>Задача 2<br/>";
        $arr2 = [1, 2, 3, 4, 5];
        $result = 0;
        foreach ($arr2 as $elem) {
            $result = $result + $elem;
        }
        echo $result;
        //3
        echo "<br/><hr>Задача 3<br/>";
        $arr3 = [1, 2, 3, 4, 5];
        $res = 0;
        foreach ($arr3 as $elem) {
            $sqr = 0;
            $sqr = pow($elem, 2);
            $res = $res + $sqr;
        }
        echo $res;
        //4
        echo "<br/><hr>Задача 4";
        $arr4 = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
        foreach ($arr4 as $key=>$elem) {
            echo "<br/>".$key." - ".$elem;
        }
        //5
        echo "<br/><hr>Задача 5";
        $arr5 = ['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];
        foreach ($arr5 as $key=>$elem) {
            echo "<br/>".$key." - зарплата ".$elem." долларов.";
        }
        //6
        echo "<br/><hr>Задача 6<br/>";
        //6.1
        $i = 0;
        while ($i <= 100) {
            echo $i.", ";
            $i++;
        }
        //6.2
        echo "<br/>";
        for ($i = 0; $i<=100; $i++) {
            echo $i.", ";
        }
        //7
        echo "<br/><hr>Задача 7<br/>";
        //7.1
        $i = 11;
        while ($i<=33) {
            echo $i.", ";
            $i++;
        }
        //7.2
        echo "<br/>";
        for ($i = 11; $i<=33; $i++) {
            echo $i.", ";
        }
        //8
        echo "<br/><hr>Задача 8<br/>";
        //8.1
        $i = 0;
        while ($i<=100) {
            if ($i%2==0) {
                echo $i.", ";
                $i++;
            } else {
                $i++;
            }
        }
        //8.2
        echo "<br/>";
        for ($i = 0; $i <=100; $i++) {
            if ($i%2 ==0) {
                echo $i.", ";
            } else {
                continue;
            }
        }
        //9
        echo "<br/><hr>Задача 9<br/>";
        //9.1
        $i = 0;
        $sum = 0;
        while ($i <=100) {
            $sum += $i;
            $i++;
        }
        echo "Сумма = ".$sum;
        //9.2
        echo "<br/>";
        $sum2 = 0;
        for ($i = 0; $i <= 100; $i++) {
            $sum2 += $i;
        }
        echo "Сумма = ".$sum2;
        //10
        echo "<br/><hr>Задача 10";
        $arr10 = [2, 5, 9, 15, 0, 4];
        foreach ($arr10 as $elem) {
            if ($elem>3 and $elem<10) {
                echo "<br/>".$elem;
            }
        }
        //11
        echo "<br/><hr>Задача 11<br/>";
        $arr11 = [1, 2, 3, 4, -1, -2];
        $sum = 0;
        foreach ($arr11 as $elem) {
            if ($elem > 0) {
                $sum += $elem;
            }
        }
        echo "Сумма положительных элементов массива = ".$sum;
        //12
        echo "<br/><hr>Задача 12<br/>";
        $arr12 = [1, 2, 5, 9, 4, 13, 4, 10];
        foreach ($arr12 as $elem) {
            if ($elem == 4) {
                echo "ЕСТЬ!";
                break;
            }
        }
        //13
        echo "<br/><hr>Задача 13<br/>";
        $arr13 = ['10', '20', '30', '50', '235', '3000'];
        foreach ($arr13 as $elem) {
            if ($elem[0] == 1 or $elem[0] == 2 or $elem[0] == 5) {
                echo $elem." ";
            }
        }
        //14
        echo "<br/><hr>Задача 14<br/>";
        $arr14 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        foreach ($arr14 as $elem) {
            if ($elem == count($arr14)) {
                echo "-".$elem."-";
            } else {
                echo "-".$elem;
            }
        }
        //15
        echo "<br/><hr>Задача 15<br/>";
        $arr15 = ['Понедельник', 'Вторник', 'Среда', 'Четверг' , 'Пятница', 'Суббота', 'Воскресенье'];
        foreach ($arr15 as $elem) {
            if ($elem == 'Суббота' or $elem == 'Воскресенье') {
                echo "<b>".$elem."</b> ";
            } else {
                echo $elem." ";
            }
        }
        //16
        echo "<br/><hr>Задача 16<br/>";
        $arr16 = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $day = date("l");
        foreach ($arr16 as $elem) {
            if ($elem == $day) {
                echo "<i>$elem</i> ";
            } else {
                echo $elem." ";
            }
        }
        //17
        echo "<br/><hr>Задача 17<br/>";
        for ($i = 1; $i <=100; $i++) {
            $array[$i-1] = $i;
        }
        // var_dump($array);
        foreach ($array as $elem) {
            if ($array[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == count($array)) {
                echo $elem."]";
            } else {
                echo $elem.", ";
            }
        }
        //18
        echo "<br/><hr>Задача 18<br/>";
        $arr18 = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
        foreach ($arr18 as $key=>$elem) {
            $en[] = $key;
            $ru[] = $elem;
        }
        echo "en: ";
        foreach ($en as $elem) {
            if ($en[0] == $elem ) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $en[count($en)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        echo "<br/>ru: ";
        foreach ($ru as $elem) {
            if ($ru[0] == $elem ) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $ru[count($ru)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //19
        //19.1
        echo "<br/><hr>Задача 19<br/>";
        $num = 1000;
        $i = 0;
        while ($num/2 >= 50) {
            $num /= 2;
            $i++;
        }
        echo "Число num = ".($num/2)."<br/>";
        echo "Количество итераций = ".$i."<br/>";
        //19.2
        echo "<br/>";
        $k = 0;
        $num2 = 1000;
        for ($i = 0; $num2 >= 50; $i++) {
            $num2 /= 2;
            $k = $i;
        }
        echo "Число num = ".$num2."<br/>";
        echo "Количество итераций = ".$k."<br/>";
    ?>
</body>
</html>