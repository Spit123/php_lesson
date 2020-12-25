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
    function sqr($num) {
        return $num*$num;
    }
    echo sqr(2);
    //2
    echo "<br/><hr>Задача 2<br/>";
    function sum($num1, $num2) {
        return $num1+$num2;
    }
    echo sum(2,8);
    //3
    echo "<br/><hr>Задача 3<br/>";
    function f3 ($num1, $num2, $num3) {
        return ($num1-$num2)/$num3;
    }
    echo f3(10,1,3);
    //4
    echo "<br/><hr>Задача 4<br/>";
    function day_of_week($day){
        switch ($day) {
            case '1': 
                return "Понедельник";
                break;
            case '2':
                return "Вторник";
                break;
            case '3':
                return "Среда";
                break;
            case '4':
                return "Четверг";
                break;
            case '5':
                return "Пятница";
                break;
            case '6':
                return "Суббота";
                break;
            case '7':
                return "Воскресенье";
                break;
            default:
                return "Вы ввели неверное число!";
                break;
        }
    }
    echo day_of_week(6);
    ?>
</body>
</html>