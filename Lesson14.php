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
        $str = "";
        for ($i=1; $i < 10; $i++) {
            $str .=$i;
        }
        echo $str;
        //2
        echo "<br/><hr>Задача 2<br/>";
        $str2 = '';
        for ($i=9; $i >= 1; $i--) {
            $str2 .=$i;
        }
        echo $str2;
        //3
        echo "<br/><hr>Задача 3<br/>";
        $str = "";
        for ($i=1; $i < 10; $i++) {
            $str .="-".$i;
        }
        echo $str."-";
        //4
        echo "<br/><hr>Задача 4<br/>";
        $str = "";
        for ($i=0; $i < 20; $i++) {
        echo $str .="x";
        echo "<br/>";
        }
        //5
        echo "<br/><hr>Задача 5<br/>";
        for ($i = 1; $i <= 9; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $i;
            }
            echo '<br>';
        }
        //6
        echo "<br/><hr>Задача 6<br/>";
        for ($i=0; $i <= 10; $i+=2) {
            for ($j=0; $j < $i; $j++) {
                $str = "";
                echo $str .="x";
            }
            echo '<br>';
            }
    ?>
</body>
</html>