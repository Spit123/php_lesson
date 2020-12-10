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
        echo strtoupper('php');
        //2
        echo "<br/><hr>Задача 2<br/>";
        echo strtolower('PHP');
        //3
        echo "<br/><hr>Задача 3<br/>";
        echo ucfirst('london');
        //4
        echo "<br/><hr>Задача 4<br/>";
        echo lcfirst('London');
        //5
        echo "<br/><hr>Задача 5<br/>";
        echo ucwords('london is the capital of great britain');
        //6
        echo "<br/><hr>Задача 6<br/>";
        echo ucfirst(strtolower('LONDON'));
        //7
        echo "<br/><hr>Задача 7<br/>";
        echo strlen('html css php');
        //8
        echo "<br/><hr>Задача 8<br/>";
        $password = 'password';
        if (strlen($password)>5 and strlen($password)<10) {
            echo "Пароль подходит";
        } else {
            echo "Пароль не подходит";
        }
        //9
        echo "<br/><hr>Задача 9<br/>";
        $str = "html css php";
        echo substr($str, 0, 4)."<br/>".substr($str, 4, 3)."<br/>".substr($str, 8, 3);
        //10
        echo "<br/><hr>Задача 10<br/>";
        echo substr($str, -3, 3);
        //11
        echo "<br/><hr>Задача 11<br/>";
        $str11 = 'http://old.code.mu/';
        if (substr($str11, 0, 7) == "http://") {
            echo "Да";
        } else {
            echo "Нет";
        }
        //12
        echo "<br/><hr>Задача 12<br/>";
        $str12 = 'http://old.code.mu/';
        if (substr($str12, 0, 7) == "http://" or substr($str12, 0, 8) == "https://") {
            echo "Да";
        } else {
            echo "Нет";
        }
        //13
        echo "<br/><hr>Задача 13<br/>";
        $str13 = "name.png";
        if (substr($str13, -4, 4) == ".png") {
            echo "Да";
        } else {
            echo "Нет";
        }
        //14
        echo "<br/><hr>Задача 14<br/>";
        $str13 = "name.png";
        if (substr($str13, -4, 4) == ".png" or substr($str13, -4, 4) == ".jpg") {
            echo "Да";
        } else {
            echo "Нет";
        }
        //15
        echo "<br/><hr>Задача 15<br/>";
        //16
        echo "<br/><hr>Задача 16<br/>";
        //17
        echo "<br/><hr>Задача 17<br/>";
        //18
        echo "<br/><hr>Задача 18<br/>";
        //19
        echo "<br/><hr>Задача 19<br/>";
        //20
        echo "<br/><hr>Задача 20<br/>";
        //21
        echo "<br/><hr>Задача 21<br/>";
        //22
        echo "<br/><hr>Задача 22<br/>";
        //23
        echo "<br/><hr>Задача 23<br/>";
        //24
        echo "<br/><hr>Задача 24<br/>";
        //25
        echo "<br/><hr>Задача 25<br/>";
        //26
        echo "<br/><hr>Задача 26<br/>";
        //27
        echo "<br/><hr>Задача 27<br/>";
        //28
        echo "<br/><hr>Задача 28<br/>";
        //29
        echo "<br/><hr>Задача 29<br/>";
        //30
        echo "<br/><hr>Задача 30<br/>";
        //31
        echo "<br/><hr>Задача 31<br/>";
        //32
        echo "<br/><hr>Задача 32<br/>";
        //33
        echo "<br/><hr>Задача 33<br/>";
        //34
        echo "<br/><hr>Задача 34<br/>";
        //35
        echo "<br/><hr>Задача 35<br/>";
        //36
        echo "<br/><hr>Задача 36<br/>";
        //37
        echo "<br/><hr>Задача 37<br/>";
        //38
        echo "<br/><hr>Задача 38<br/>";
        //39
        echo "<br/><hr>Задача 39<br/>";
        //40
        echo "<br/><hr>Задача 40<br/>";
        //41
        echo "<br/><hr>Задача 41<br/>";
        //42
        echo "<br/><hr>Задача 42<br/>";
        //43
        echo "<br/><hr>Задача 43<br/>";
        //44
        echo "<br/><hr>Задача 44<br/>";
        //45
        echo "<br/><hr>Задача 45<br/>";
        //46
        echo "<br/><hr>Задача 46<br/>";
        //47
        echo "<br/><hr>Задача 47<br/>";
        //48
        echo "<br/><hr>Задача 48<br/>";
        //49
        echo "<br/><hr>Задача 49<br/>";
        //50
        echo "<br/><hr>Задача 50<br/>";
        //51
        echo "<br/><hr>Задача 51<br/>";
        //52
        echo "<br/><hr>Задача 52<br/>";
        //53
        echo "<br/><hr>Задача 53<br/>";
        //54
        echo "<br/><hr>Задача 54<br/>";
        //55
        echo "<br/><hr>Задача 55<br/>";
        //56
        echo "<br/><hr>Задача 56<br/>";
    ?>
</body>
</html>