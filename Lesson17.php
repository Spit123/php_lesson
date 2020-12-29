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
        function ru_en($str){
            $rus = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'];
            $en = ['A', 'B', 'V', 'G', 'D', 'E', 'YO', 'ZH', 'Z', 'I', 'I', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'CH', 'SH', 'SH', '`', 'Y', '`', 'E', 'YU', 'YA', 'a', 'b', 'v', 'g', 'd', 'e', 'yo', 'zh', 'z', 'i', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sh', '`', 'y', '`', 'e', 'yu', 'ya'];
            return str_replace($rus, $en, $str);
        }
        echo ru_en('Сделайте функцию, которая принимает строку');
        //2
        echo "<br/><hr>Задача 2<br/>";
        function func2($num, $str1, $str2, $str3){
            if (substr($num, -1) == 1 and (substr($num, -2) !=11 or substr($num, -3) != 111)) {
                return $num." ".$str1;
            }
            if ((substr($num, -1) >= 5 and substr($num, -1) <= 9) or (substr($num, -2) == 11 or substr($num, -3) == 111)) {
                return $num." ".$str2;
            }
            if (substr($num, -1) >= 2 and substr($num, -1) <= 4) {
                return $num." ".$str3;
            }
        }
        echo func2(123, 'яблоко','яблок', 'яблока');
        //3
        echo "<br/><hr>Задача 3<br/>";
        function HappyTicket($number) {
            $TempArr = str_split($number, 1);
            return $TempArr[0] + $TempArr[1] + $TempArr[2] == $TempArr[3] + $TempArr[4] + $TempArr[5];
        }
        $numberTicket = 123456;
        if (HappyTicket($numberTicket)){
            echo "Билет № $numberTicket - Счастливый!";
        } else {
            echo "Билет № $numberTicket - Не счастливый!";
        }
        //4
        echo "<br/><hr>Задача 4<br/>";
        function getDividers($num){
            $arr = [];
            for($i = 1; $i < $num; $i++){
                if($num % $i == 0){
                    $arr[] = $i;
                }
            }
            return array_sum($arr);
        }
        for($i =1; $i < 10000; $i++){
            $currentNum = getDividers($i);
            $lastNum = getDividers($currentNum);
            if( $i == $lastNum && $currentNum !== $lastNum ){
                $result[] = $i." и ".$currentNum;
            }
        }
        foreach ($result as $elem) {
            if ($result[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $result[count($result)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
    ?>
</body>
</html>