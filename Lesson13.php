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
    function comparison($num1, $num2) {
        return $num1 == $num2;
    }
    var_dump(comparison(4,3));
    //2
    echo "<br/><hr>Задача 2<br/>";
    function func2 ($num1, $num2) {
        return ($num1+$num2) > 10;
    }
    var_dump(func2(5,2));
    //3
    echo "<br/><hr>Задача 3<br/>";
    function func3($num) 
	{
        return $num < 0;
    }
    var_dump(func3(-3));
    ?>
</body>
</html>