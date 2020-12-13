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
        echo substr($str, 0, 4)."<br/>".substr($str, 4, 3)."<br/>".substr($str, 9, 3);
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
        $str14 = "name.png";
        if (substr($str14, -4, 4) == ".png" or substr($str14, -4, 4) == ".jpg") {
            echo "Да";
        } else {
            echo "Нет";
        }
        //15
        echo "<br/><hr>Задача 15<br/>";
        $str15 = "Привет, мир!";
        if (mb_strlen($str15) > 5) {
            echo mb_substr($str15, 5, mb_strlen($str15))."...";
        } elseif (mb_strlen($str15) <= 5) {
            echo $str15;
        }
        //16
        echo "<br/><hr>Задача 16<br/>";
        $str16 = "31.12.2013";
        echo str_replace('.', '-', $str16);
        //17
        echo "<br/><hr>Задача 17<br/>";
        $str17 = "abcdabcd";
        echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str17);
        //18
        echo "<br/><hr>Задача 18<br/>";
        $str18 = "1a2b3c4b5d6e7f8g9h0";
        echo str_replace(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'], '', $str18);
        //19
        echo "<br/><hr>Задача 19<br/>";
        $str19 = "abcdeabcde";
        echo strtr($str19, ['a'=>'1', 'b'=>'2', 'c'=>'3'])."<br/>";
        echo strtr($str19, 'abc', '123');
        //20
        echo "<br/><hr>Задача 20<br/>";
        $str20 = "Hello, world!";
        echo substr_replace($str20, '!!!', 3, 5);
        //21
        echo "<br/><hr>Задача 21<br/>";
        $str21 = "abc abc abc";
        echo strpos($str21, 'b');
        //22
        echo "<br/><hr>Задача 22<br/>";
        $str22 = "abc abc abc";
        echo strrpos($str22, 'b');
        //23
        echo "<br/><hr>Задача 23<br/>";
        $str23 = "abc abc abc";
        echo strpos($str23, 'b', 3);
        //24
        echo "<br/><hr>Задача 24<br/>";
        $str24 = "aaa aaa aaa aaa aaa";
        echo strpos($str24, ' ', 4);
        //25
        echo "<br/><hr>Задача 25<br/>";
        $str25 = "Hello..";
        if  ($str25[strpos($str25, '.')] == $str25[strpos($str25, '.', (strpos($str25, '.')+1))]) {
            echo "Есть!";
        } else {
            echo "Нет!";
        }
        //26
        echo "<br/><hr>Задача 26<br/>";
        $str26 = 'http://old.code.mu/';
        if (strpos($str26, 'http://') === 0) {
            echo "Да";
        } else {
            echo "Нет";
        }
        //27
        echo "<br/><hr>Задача 27<br/>";
        $str27 = 'html css php';
        $arr = explode(" ", $str27);
        for ($i = 0; $i < count($arr); $i++) {
            echo "arr[$i] = ".$arr[$i]."<br/>";
        }
        //28
        echo "<br/><hr>Задача 28<br/>";
        $arr28 = ['html', 'css', 'php'];
        echo implode(" ", $arr28);
        //29
        echo "<br/><hr>Задача 29<br/>";
        $date = '2013-12-31';
        $arr29 = explode("-", $date);
        echo implode(".", $arr29);
        //30
        echo "<br/><hr>Задача 30<br/>";
        $str = '1234567890';
        $arr30 = str_split($str, 2);
        for ($i = 0; $i < count($arr30); $i++) {
            echo "arr[$i] = ".$arr30[$i]."<br/>";
        }
        //31
        echo "<br/><hr>Задача 31<br/>";
        $arr31 = str_split($str, 1);
        for ($i = 0; $i < count($arr31); $i++) {
            echo "arr[$i] = ".$arr31[$i]."<br/>";
        }
        //32
        echo "<br/><hr>Задача 32<br/>";
        $arr32 = str_split($str, 2);
        echo implode("-", $arr32);
        //33
        echo "<br/><hr>Задача 33<br/>";
        $str33 = " Hello, World! ";
        echo trim($str33);
        //34
        echo "<br/><hr>Задача 34<br/>";
        $str34 = '/php/';
        echo trim($str34, "/");
        //35
        echo "<br/><hr>Задача 35<br/>";
        $str35 = 'слова слова слова.';
        echo rtrim($str35, '.').'.';
        //36
        echo "<br/><hr>Задача 36<br/>";
        $str36 = '12345';
        echo strrev($str36);
        //37
        echo "<br/><hr>Задача 37<br/>";
        $arr37 = ['madam', 'otto', 'kayak', 'nun', 'level', 'automobile', 'milk'];
        foreach($arr37 as $elem) {
            if ($elem == strrev($elem)) {
                echo "Слово <b>$elem</b> является полиндромом!<br/>";
            } else {
                echo "Слово <b>$elem</b> не является полиндромом!<br/>";
            }
        }
        //38
        echo "<br/><hr>Задача 38<br/>";
        $str38 = 'abcde';
        echo str_shuffle($str38);
        //39
        echo "<br/><hr>Задача 39<br/>";
        $str39 = 'abcdefghijklmnopqrstuvwxyz';
        echo substr(str_shuffle($str39), 0, 6);
        //40
        echo "<br/><hr>Задача 40<br/>";
        $str40 = '12345678';
        echo number_format($str40, 0, '.', ' ');
        //41
        echo "<br/><hr>Задача 41<br/>";
        $str41 = 'x';
        for ($i = 1; $i <= 9; $i++) {
            if ($i == 1) {
                echo $str41."<br/>";
            } else {
                echo str_repeat($str41, $i)."<br/>";
            }
        } 
        //42
        echo "<br/><hr>Задача 42<br/>";
        $str42 = '1';
        for ($i = 1; $i <=9; $i++) {
            if ($i == 1) {
                echo $str42."<br/>";
            } else {
                $str42 += 1;
                echo str_repeat($str42, $i)."<br/>";
            }
        }
        //43
        echo "<br/><hr>Задача 43<br/>";
        $str43 = 'html, <b>php</b>, js';
        echo strip_tags($str43);
        //44
        echo "<br/><hr>Задача 44<br/>";
        $str44 = '<i>html</i>, <b>php</b>, <br/>js';
        echo strip_tags($str44, '<b><i>');
        //45
        echo "<br/><hr>Задача 45<br/>";
        $str45 = 'html, <b>php</b>, js';
        echo htmlspecialchars($str45);
        //46
        echo "<br/><hr>Задача 46<br/>";
        $arr46 = ['a', 'b', 'c', ' '];
        foreach($arr46 as $elem) {
            echo "Код символа '<b>$elem</b>' = ".ord($elem)."<br/>";
        }
        //47
        echo "<br/><hr>Задача 47<br/>";
        $str47 = 'abcdefghijklmnopqrstuvwxyz';
        $arr47 = str_split($str47, 1);
        foreach ($arr47 as $elem) {
            $CodeArr[] = ord($elem);
        }
        echo "Нижняя граница алфавита = ".min($CodeArr).", а верхняя граница = ".max($CodeArr);
        //48
        echo "<br/><hr>Задача 48<br/>";
        echo "Символ с кодом 33 = '".chr(33)."'";
        //49
        echo "<br/><hr>Задача 49<br/>";
        $str = chr(rand(65, 90));
        echo $str;
        //50
        echo "<br/><hr>Задача 50<br/>";
        $len = 5;
        for ($i = 1; $i <= $len; $i++) {
            $str50 .= chr(rand(97, 122));
        }
        echo $str50;
        //51
        echo "<br/><hr>Задача 51<br/>";
        $str51 = chr(rand(65, 122));
        if (ord($str51) >= 65 and ord($str51) <= 90) {
            echo "Эта буква большая";
        } elseif ((ord($str51) >= 97 and ord($str51) <= 122)) {
            echo "Эта буква маленькая";
        } else {
            echo "Неповезло, это не буква";
        }
        //52
        echo "<br/><hr>Задача 52<br/>";
        $str52 = 'ab-cd-ef';
        echo strchr($str52, '-');
        //53
        echo "<br/><hr>Задача 53<br/>";
        $str53 = 'ab-cd-ef';
        echo strrchr($str53, "-");
        //54
        echo "<br/><hr>Задача 54<br/>";
        $str54 = 'ab--cd--ef';
        echo strstr($str54, '-');
        //55
        echo "<br/><hr>Задача 55<br/>";
        $str55 = 'var_test_text';
        $arr55 = explode("_", $str55);
        for ($i = 0; $i < count($arr55); $i++) {
            $arr55[0] = strtolower($arr55[0]);
            $arr55[$i] = ucfirst(strtolower($arr55[$i]));
        }
        $ResultStr = implode('', $arr55);
        echo $ResultStr;
        //56
        echo "<br/><hr>Задача 56<br/>";
        $arr56 = [1, 2, 3, 11, 12, 13, 23, 31, 100, 103, 113, 133, 200];
        foreach ($arr56 as $elem) {
            if (strpos($elem, "3") !== false) {
                echo $elem.'<br/>';
            }
        }
    ?>
</body>
</html>