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
        function cut($str, $length = 10){
            return mb_substr($str,0,$length);
        }
        echo cut("Сделайте функцию cut, которая первым параметром будет принимать строку");
        //2
        echo "<br/><hr>Задача 2<br/>";
        $arr2 = range(1,10);
        function showArray($arr){
            echo array_shift($arr)." ";
            if(!empty($arr)){
                echo showArray($arr);
            }
        }
        showArray($arr2);
        //3
        echo "<br/><hr>Задача 3<br/>";
        function sum($arr) {
            if(!empty($arr)) {
                $elem = array_shift($arr);
                return $elem += sum($arr);
            } else {
                return $elem;
            }
        }
        function NumSum($num) {
            if(strlen($num) > 1) {
                return NumSum(sum(str_split($num, 1)));
            } else {
                return $num;
            }
        }
        
        $num = 123456789;
        echo NumSum($num);
    ?>
</body>
</html>