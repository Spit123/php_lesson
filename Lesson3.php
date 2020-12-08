<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //1.1
        $a = 1;
        if ($a == 0) {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //1.2
        $a = 0;
        if ($a == 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //1.3
        $a = -3;
        if ($a == 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //2
        echo "<br/><hr>Задача 2<br/>";
        //2.1
        $a = 1;
        if ($a > 0) {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //2.2
        $a = 0;
        if ($a > 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //2.3
        $a = -3;
        if ($a > 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //3
        echo "<br/><hr>Задача 3<br/>";
        //3.1
        $a = 1;
        if ($a < 0) {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //3.2
        $a = 0;
        if ($a < 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //3.3
        $a = -3;
        if ($a < 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //4
        echo "<br/><hr>Задача 4<br/>";
        //4.1
        $a = 1;
        if ($a >= 0) {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //4.2
        $a = 0;
        if ($a >= 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //4.3
        $a = -3;
        if ($a >= 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //5
        echo "<br/><hr>Задача 5<br/>";
        //5.1
        $a = 1;
        if ($a <= 0) {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //5.2
        $a = 0;
        if ($a <= 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //5.3
        $a = -3;
        if ($a <= 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //6
        echo "<br/><hr>Задача 6<br/>";
        //6.1
        $a = 1;
        if ($a != 0) {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //6.2
        $a = 0;
        if ($a != 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //6.3
        $a = -3;
        if ($a != 0) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //7
        echo "<br/><hr>Задача 7<br/>";
        //7.1
        $a = 'test';
        if ($a == 'test') {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //7.2
        $a = 'тест';
        if ($a == 'test') {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //7.3
        $a = 3;
        if ($a == 'test') {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //8
        echo "<br/><hr>Задача 8<br/>";
        //8.1
        $a = '1';
        if ($a === '1') {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //8.2
        $a = 1;
        if ($a === '1') {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //8.3
        $a = 3;
        if ($a === '1') {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //9
        echo "<br/><hr>Задача 9<br/>";
        //9.1
        $b = 1;
        if (empty($b)) {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //9.2
        $b = 3;
        if (empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //9.3
        $b = -3;
        if (empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //9.4
        $b = 0;
        if (empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //9.5
        $b = null;
        if (empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //9.6
        $b = true;
        if (empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //9.7
        $b = '';
        if (empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //9.8
        $b = '0';
        if (empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //10
        echo "<br/><hr>Задача 10<br/>";
        //10.1
        $b = 1;
        if (!empty($b)) {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //10.2
        $b = 3;
        if (!empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //10.3
        $b = -3;
        if (!empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //10.4
        $b = 0;
        if (!empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //10.5
        $b = null;
        if (!empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //10.6
        $b = true;
        if (!empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //10.7
        $b = '';
        if (!empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //10.8
        $b = '0';
        if (!empty($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //11
        echo "<br/><hr>Задача 11<br/>";
        //11.1
        $b = 3;
        if (isset($b)) {
            echo "Верно";
        } else {
            echo "Неверно";
        }
        //11.2
        $b = null;
        if (isset($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //12
        echo "<br/><hr>Задача 12<br/>";
        //12.1
        $b = 3;
        if (!isset($b)) {
            echo "Верно";
        } else {
            echo " Неверно";
        }
        //12.2
        $b = null;
        if (!isset($b)) {
            echo "<br/>Верно";
        } else {
            echo "<br/> Неверно";
        }
        //13
        echo "<br/><hr>Задача 13<br/>";
        //13.1
        $var = true;
        if ($var) echo "Верно"; else echo "Неверно";
        if ($var == true) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //13.2
        $var = false;
        if ($var) echo "<br/>Верно"; else echo "<br/>Неверно";
        if ($var == true) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //14
        echo "<br/><hr>Задача 14<br/>";
        //14.1
        $var = true;
        if (!$var) echo "Верно"; else echo "Неверно";
        if (!$var == true) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //14.2
        $var = false;
        if (!$var) echo "<br/>Верно"; else echo "<br/>Неверно";
        if (!$var == true) {
            echo "<br/>Верно";
        } else {
            echo "<br/>Неверно";
        }
        //15
        echo "<br/><hr>Задача 15<br/>";
        //15.1
        $c = 5;
        if ($c>0 and $c<5) {
            echo "true";
        } else {
            echo "false";
        }
        //15.2
        $c = 0;
        if ($c>0 and $c<5) {
            echo "<br/>true";
        } else {
            echo "<br/>false";
        }
        //15.3
        $c = -3;
        if ($c>0 and $c<5) {
            echo "<br/>true";
        } else {
            echo "<br/>false";
        }
        //15.4
        $c = 2;
        if ($c>0 and $c<5) {
            echo "<br/>true";
        } else {
            echo "<br/>false";
        }
        //16
        echo "<br/><hr>Задача 16<br/>";
        //16.1
        $d = 5;
        if ($d==0 or $d==2) {
            echo $d+7;
        } else {
            echo $d/10;
        }
        //16.2
        $d = 0;
        if ($d==0 or $d==2) {
            $d += 7;
            echo "<br/>".$d;
        } else {
            $d /= 10;
            echo "<br/>".$d;
        }
        //16.3
        $d = -3;
        if ($d==0 or $d==2) {
            $d += 7;
            echo "<br/>".$d;
        } else {
            $d /= 10;
            echo "<br/>".$d;
        }
        //16.4
        $d = 2;
        if ($d==0 or $d==2) {
            $d += 7;
            echo "<br/>".$d;
        } else {
            $d /= 10;
            echo "<br/>".$d;
        }
        //17
        echo "<br/><hr>Задача 17<br/>";
        //17.1
        $e = 1;
        $f = 3;
        if ($e <=1 and $f>=3) {
            $sum = $e + $f;
            echo $sum;
        } else {
            $rzn = $e - $f;
            echo $rzn;
        }
        //17.2
        $e = 0;
        $f = 6;
        if ($e <=1 and $f>=3) {
            $sum = $e + $f;
            echo "<br/>".$sum;
        } else {
            $rzn = $e - $f;
            echo "<br/>".$rzn;
        }
        //17.3
        $e = 3;
        $f = 5;
        if ($e <=1 and $f>=3) {
            $sum = $e + $f;
            echo "<br/>".$sum;
        } else {
            $rzn = $e - $f;
            echo "<br/>".$rzn;
        }
        //18
        echo "<br/><hr>Задача 18<br/>";
        if (($e>2 and $e<11) or ($f>=6 and $f<14)) {
            echo "true";
        } else {
            echo "false";
        }
        //19
        echo "<br/><hr>Задача 19<br/>";
        $num = 4;
        switch($num) {
            case '1':
                echo "Зима";
            break;
            case '2':
                echo "Весна";
            break;
            case '3':
                echo "Лето";
            break;
            case '4':
                echo "Осень";
            break;
            default:
                echo "Нет такого времени года";
        break;
        }
        //20
        //В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в какую декаду месяца попадает это число (в первую, вторую или третью).
        echo "<br/><hr>Задача 20<br/>";
        $day = rand(1,31);
        if ($day>=1 and $day<=10) {
            echo "Декада 1";
        } elseif ($day>=11 and $day<=20) {
            echo "Декада 2";
        } elseif ($day>=21 and $day<=31) {
            echo "Декада 3";
        } else {
            echo "Таких чисел в декадах нет";
        }
        //21
        //В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
        echo "<br/><hr>Задача 21<br/>";
        $month = rand(1,12);
        switch($month){
            case '1':
            case '2':
            case '12':
                echo "Зима";
            break;
            case '3':
            case '4':
            case '5':
                echo "Весна";
            break;
            case '6':
            case '7':
            case '8':
                echo "Лето";
            break;
            case '9':
            case '10':
            case '11':
                echo "Осень";
            break;
            default: 
                echo "Нет такого времени года";
            break;
        }
        //22
        echo "<br/><hr>Задача 22<br/>";
        $year = rand(1000, 9999);
        if (($year%4 == 0 and $year%100 != 0) or ($year%400 == 0)) {
            echo "Год $year высокосный";
        } else {
            echo "Год $year не высокосный";
        }
        //23
        echo "<br/><hr>Задача 23<br/>";
        $str = 'abcde';
        if ($str[0] === 'a') echo "Да"; else echo "Нет";
        //24
        echo "<br/><hr>Задача 24<br/>";
        $str2 = '12345';
        if ($str2[0] == 1 or $str2[0] == 2 or $str2[0] == 3) echo "Да"; else echo "Нет";
        //25
        echo "<br/><hr>Задача 25<br/>";
        $str3 = '135';
        echo "Сумма = ".($str3[0]+$str3[1]+$str3[2]);
        //26
        //Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном случае выведите 'нет'.
        echo "<br/><hr>Задача 26<br/>";
        $str4 = '123456';
        if (($str4[0]+$str4[1]+$str4[2]) == ($str4[3]+$str4[4]+$str4[5])) {
            echo "Да";
        } else {
            echo "Нет";
        }
    ?>
</body>
</html>