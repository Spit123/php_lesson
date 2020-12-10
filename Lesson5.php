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
        $a = 10; $b = 3;
        $c = $a%$b;
        echo $c;
        //2
        echo "<br/><hr>Задача 2<br/>";
        if ($a%$b == 0) {
            echo "Делится <br/>";
            echo $c;
        } else {
            echo "Не делится<br/>";
            echo $c;
        }
        //3
        echo "<br/><hr>Задача 3<br/>";
        $st = pow(2, 10);
        echo $st;
        //4
        echo "<br/><hr>Задача 4<br/>";
        $sqrt = sqrt(245);
        echo $sqrt;
        //5
        echo "<br/><hr>Задача 5<br/>";
        $arr = [4, 2, 5, 19, 13, 0, 10];
        $sqr = 0;
        foreach ($arr as $elem) {
            $sqr += pow($elem, 2);
        }
        echo sqrt($sqr);
        //6
        echo "<br/><hr>Задача 6<br/>";
        $d = sqrt(379);
        echo "Округление до целых: ".round($d, 0)."<br/>";
        echo "Округление до десятых: ".round($d, 1)."<br/>";
        echo "Округление до сотых: ".round($d, 2)."<br/>";
        echo "Округление до тысячных: ".round($d, 3)."<br/>";
        //7
        echo "<br/><hr>Задача 7<br/>";
        $e = sqrt(587);
        $aRR['floor'] = floor($e);
        $aRR['ceil'] = ceil($e);
        foreach($aRR as $key=>$elem) {
            echo $key." : ".$elem."<br/>";
        }
        //8
        echo "<br/><hr>Задача 8<br/>";
        $MinMax = [4, -2, 5, 19, -130, 0, 10];
        echo "Минимальное число: ".min($MinMax)."<br/>";
        echo "Максимальное число: ".max($MinMax);
        //9
        echo "<br/><hr>Задача 9<br/>";
        echo "Случайное число: ".mt_rand(1, 100);
        //10
        echo "<br/><hr>Задача 10<br/>";
        for ($i = 1; $i <=10; $i++) {
            $RndArr[] = mt_rand(1,10);
        }
        echo "Массив случайных чисел: ";
        foreach ($RndArr as $elem) {
                echo $elem." ";
        }
        //11
        echo "<br/><hr>Задача 11<br/>";
        $a = mt_rand(-100, 100);
        $b = mt_rand(-100, 100);
        echo "Число а = $a<br/>Число b = $b<br/>Разница по модулю = ".abs($a-$b);
        //12
        echo "<br/><hr>Задача 12<br/>";
        $arr12 = [1, 2, -1, -2, 3, -3];
        echo "Массив: ";
        foreach ($arr12 as $elem){
            $elem = abs($elem);
            echo $elem." ";
        }
        //13
        echo "<br/><hr>Задача 13<br/>";
        $n = mt_rand(1, 100);
        $myArr = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($n%$i == 0) {
                $myArr[] = $i;
            }
        }
        echo "Число = $n<br/>";
        echo "Массив: [ ";
        foreach ($myArr as $elem) {
            echo $elem." ";
        }
        echo "]";
        //14
        //Дан массив [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]. Узнайте, сколько первых элементов массива нужно сложить, чтобы сумма получилась больше 10.
        echo "<br/><hr>Задача 14<br/>";
        $arr14 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $i = 0;
        foreach ($arr14 as $elem) {
            if ($sum > 10) {
                break;
            } else {
                $sum += $elem;
                $i++;
            }
        }
        echo "Количество первых элементов для суммы > 10 = $i";
    ?>
</body>
</html>