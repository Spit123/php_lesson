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
        $i = 1;
        while ($i <= 100) {
            echo "$i ";
            $i++;
        }
        //2
        echo "<br/><hr>Задача 2<br/>";
        $i = 1;
        while ($i <= 100) {
            if ($i % 2 == 0){
                echo "$i ";
            }
            $i++;
        }
        //3
        echo "<br/><hr>Задача 3<br/>";
        $i = 1;
        $sum = 0;
        while ($i <= 100){
            $sum += $i;
            $i++;
        }
        echo "Сумма = $sum";
        //4
        echo "<br/><hr>Задача 4<br/>";
        $sum4 = 0;
        for ($i = 1; $i <= 15; $i++) {
            $sum4 += pow($i, 2);
        }
        echo "Сумма квадратов = $sum4";
        //5
        echo "<br/><hr>Задача 5<br/>";
        $sum5 = 0;
        for ($i = 1; $i <= 15; $i++) {
            $sum5 += sqrt($i);
        }
        echo "Сумма корней = ".round($sum5, 2);
        //6
        echo "<br/><hr>Задача 6<br/>";
        $sum6 = 0;
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 7 == 0) {
                $sum6 += $i;
            }
        }
        echo "Сумма = $sum6";
        //7
        echo "<br/><hr>Задача 7<br/>";
        for ($i = 0; $i < 10; $i++) {
            $arr7[] = 'x';
        }
        for ($i = 0; $i < count($arr7); $i++) {
            if ($i == 0) {
                echo "[ ".$arr7[$i].", ";
            } elseif ($i == count($arr7) -1) {
                echo $arr7[$i]." ]";
            } else {
                echo $arr7[$i].", ";
            }
        }
        //8
        echo "<br/><hr>Задача 8<br/>";
        for ($i = 1; $i <= 10; $i++) {
            $arr8[] = $i;
        }
        for ($i = 0; $i < count($arr8); $i++) {
            if ($i == 0) {
                echo "[ ".$arr8[$i].", ";
            } elseif ($i == count($arr8) -1) {
                echo $arr8[$i]." ]";
            } else {
                echo $arr8[$i].", ";
            }
        }
        //9
        echo "<br/><hr>Задача 9<br/>";
        for ($i = 10; $i >= 1; $i--) {
            $arr9[] = $i;
        }
        for ($i = 0; $i < count($arr9); $i++) {
            if ($i == 0) {
                echo "[ ".$arr9[$i].", ";
            } elseif ($i == count($arr9) -1) {
                echo $arr9[$i]." ]";
            } else {
                echo $arr9[$i].", ";
            }
        }
        //10
        echo "<br/><hr>Задача 10<br/>";
        for ($i = 1; $i <= 10; $i++) {
            $arr10[] = mt_rand(1, 10);
        }
        for ($i = 0; $i < count($arr10); $i++) {
            if ($i == 0) {
                echo "[ ".$arr10[$i].", ";
            } elseif ($i == count($arr10) -1) {
                echo $arr10[$i]." ]";
            } else {
                echo $arr10[$i].", ";
            }
        }
        //11
        echo "<br/><hr>Задача 11<br/>";
        for ($i = 1; $i <= 6; $i++) {
            $str .= mt_rand(1, 9);
        }
        echo $str;
        //12
        echo "<br/><hr>Задача 12<br/>";
        for ($i = 0; $i < 10; $i++) {
            $arr12[] = mt_rand(1, 100);
        }
        $sum12 = 0;
        foreach ($arr12 as $elem) {
            $sum12 += $elem;
        }
        echo "Сумма = ".$sum12."<br/>Массив: ";
        for ($i = 0; $i < count($arr12); $i++) {
            if ($i == 0) {
                echo "[ ".$arr12[$i].", ";
            } elseif ($i == count($arr12) -1) {
                echo $arr12[$i]." ]";
            } else {
                echo $arr12[$i].", ";
            }
        }
        //13
        echo "<br/><hr>Задача 13<br/>";
        for ($i = 0; $i < 10; $i++) {
            $arr13[] = mt_rand(1, 100);
        }
        $sum13 = 0;
        foreach ($arr13 as $elem) {
            $sum13 += pow($elem,2);
        }
        echo "Сумма = ".$sum13."<br/>Массив: ";
        for ($i = 0; $i < count($arr13); $i++) {
            if ($i == 0) {
                echo "[ ".$arr13[$i].", ";
            } elseif ($i == count($arr13) -1) {
                echo $arr13[$i]." ]";
            } else {
                echo $arr13[$i].", ";
            }
        }
        //14
        echo "<br/><hr>Задача 14<br/>";
        for ($i = 0; $i < 10; $i++) {
            $arr14[] = mt_rand(1, 100);
        }
        $sum14 = 0;
        foreach ($arr14 as $elem) {
            $sum14 += pow($elem,2);
        }
        echo "Корень из суммы = ".(floor(sqrt($sum14)))."<br/>Массив: ";
        for ($i = 0; $i < count($arr14); $i++) {
            if ($i == 0) {
                echo "[ ".$arr14[$i].", ";
            } elseif ($i == count($arr14) -1) {
                echo $arr14[$i]." ]";
            } else {
                echo $arr14[$i].", ";
            }
        }
        //15
        echo "<br/><hr>Задача 15<br/>";
        for ($i = 0; $i < 15; $i++) {
            $arr15[] = mt_rand(1, 20);
        }
        $sum15 = 0;
        foreach ($arr15 as $elem) {
            if($elem > 0 and $elem < 10) {
                $sum15 += $elem;
            }
        }
        echo "Сумма = $sum15<br/>Массив: ";
        for ($i = 0; $i < count($arr15); $i++) {
            if ($i == 0) {
                echo "[ ".$arr15[$i].", ";
            } elseif ($i == count($arr15) -1) {
                echo $arr15[$i]." ]";
            } else {
                echo $arr15[$i].", ";
            }
        }
        //16
        echo "<br/><hr>Задача 16<br/>";
        $arr16 = [1, 1, 1, 2, 3, 4, 5, 6, 7, 7, 7];

        for ($i = 0; $i < count($arr16); $i++) {
            if ($arr16[$i] == $arr16[($i-1)] and $arr16[$i] == $arr16[$i+1]) {
                echo "Есть идущие подряд: ".$arr16[$i]." под индексами ".($i-1).", $i, ".($i+1)."<br>";
            }
        }
        echo "Массив: ";
        for ($i = 0; $i < count($arr16); $i++) {
            if ($i == 0) {
                echo "[ ".$arr16[$i].", ";
            } elseif ($i == count($arr16) -1) {
                echo $arr16[$i]." ]";
            } else {
                echo $arr16[$i].", ";
            }
        }
        //17
        echo "<br/><hr>Задача 17<br/>";
        $num = 10;
        for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $str17 .= $i." ";
            }
        }
        echo $str17;
        //18
        echo "<br/><hr>Задача 18<br/>";
        $arr18 = [
            0=>["name"=>"Коля", "salary"=>300],
            1=>["name"=>"Вася", "salary"=>400],
            2=>["name"=>"Петя", "salary"=>500],
        ];
        foreach ($arr18 as $elem) { 
            echo $elem["name"]."-".$elem["salary"]."<br>";
         }
        //19
        echo "<br/><hr>Задача 19<br/>";
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++){
                $arr19[$i][] = mt_rand(1, 10);
            }
        }
        for ($i = 0; $i < count($arr19); $i++) {
            if ($i == 0) {
                echo "[ ";
            }  else {
                echo ", ";
            }
            for ($j = 0; $j < count($arr19[$i]); $j++){
                if ($j == 0) {
                    echo "[ ".$arr19[$i][$j].", ";
                } elseif ($j == count($arr19[$i])-1) {
                    echo $arr19[$i][$j]." ]";
                } else {
                    echo $arr19[$i][$j].", ";
                }
            }
        }
        echo " ]";
        //20
        echo "<br/><hr>Задача 20<br/>";
        function UcfirstUser($str) {
            $s = ord($str[0]);
            if ($s >= 97 and $s <= 122) {
                $str[0] = chr($s - 32);
            }
            return $str;
            }
        $str = 'world wide web';
        echo UcfirstUser($str);
        //21
        echo "<br/><hr>Задача 21<br/>";
        function strrevUser1($str) {
            $newStr = "";
            $len = strlen($str) - 1;
            for($i = $len; $i >= 0; $i--) {
                $newStr .= $str[$i];
            }
            return $newStr;
        }   
        function strrevUser2($str) {
            return implode("", array_reverse(str_split($str, 1)));
        }        
        $str = "world wide web";
        echo strrevUser1($str)."<br>";
        echo strrevUser2($str);
        //22
        echo "<br/><hr>Задача 22<br/>";
        function strlenUser($str) {
            $i = 0;
            while(true) {
                if(ord($str[$i]) != 0){
                    $i++;
                }  else {
                    break;
                }
            }
        return $i;
        }
            
        $str = 'world wide web';
        echo strlenUser($str);
        //23
        echo "<br/><hr>Задача 23<br/>";
        function ReversLetter($str) {
            $len = strlen($str) - 1;
            for($i = 0; $i <= $len; $i++) {
                $s = ord($str[$i]);
                if ($s >= 97 and $s <= 122) {
                    $str[$i] = chr($s - 32);
                }
                if ($s >= 65 and $s <= 90) {
                    $str[$i] = chr($s + 32);
                }
            }
            return $str;
            }
            
        $str = 'World Wide Web';
        echo ReversLetter($str);
        //24
        echo "<br/><hr>Задача 24<br/>";
        function ModifyStr($str) {
            return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $str))));
        }    
        $str = 'var_text_hello';
        echo ModifyStr($str);
        //25
        echo "<br/><hr>Задача 25<br/>";
        for($i = 1; $i <= 9; $i++) {
            echo str_repeat($i, $i)."<br>";
        }
        //26
        echo "<br/><hr>Задача 26<br/>";
        $num = 19;
        for($i = $num; $i >= 1; $i--) {
            $str = "";
            for($j = 1; $j <= $i; $j++) {
                $str .= "x";
            }
            echo $str."<br>";
        }
        //27
        echo "<br/><hr>Задача 27<br/>";
        $arr27 = [1, 3, 2, 4];
        $newArr = [];

        foreach($arr27 as $item) {
            $newArr = array_merge($newArr, array_fill(0, $item, $item));
        }
        for ($i = 0; $i < count($newArr); $i++) {
            if ($i == 0) {
                echo "[ ".$newArr[$i].", ";
            } elseif ($i == count($newArr) -1) {
                echo $newArr[$i]." ]";
            } else {
                echo $newArr[$i].", ";
            }
        }
        //28
        echo "<br/><hr>Задача 28<br/>";
        $arr28 = [1, 2, 3, 4, 5, 6, 7, 8];
        $len = count($arr28);
        if ($len % 2 == 0) {
            for($i = 0; $i < $len; $i += 2) {
                $newArr28[$arr28[$i]] = $arr28[$i + 1];
            }
            echo "[ ";
            foreach ($newArr28 as $keys=>$elem) {
                echo "'".$keys."' => ".$elem.", ";
            }
            echo " ]";
        } else {
            echo "Не достаточно элементов для проведения данной операции (нечетное количество элементов массива)";
        }
        //29
        echo "<br/><hr>Задача 29<br/>";
        $str = '123456789';
        $len = strlen($str);
        for($i = 0; $i <= $len; $i += 2) {
            $newStr .= $str[$i];
        }
        echo $newStr;
        //30
        echo "<br/><hr>Задача 30<br/>";
        $str = '12345678';
        $arr = str_split($str, 2);
        foreach($arr as $key => $item) {
            $arr[$key] = strrev($item);
        }
        echo implode('', $arr);
        //31
        echo "<br/><hr>Задача 31<br/>";
        $arr31 = [1, 2, 3, 4, 3, 5, 6, 7, 7, 8, 9, 7, 4, 3, 7, 3];
        function uniqueArr($arr) {
            $newArr31 = [];
            foreach($arr as $sample) {
                $flag = false;
                foreach($newArr31 as $exem) {
                    if($sample == $exem) $flag = true;
                }
                if(!$flag) {
                    $newArr31[] = $sample;
                }
            }
            return $newArr31;
        }
        $result = uniqueArr($arr31);
        for ($i = 0; $i < count($result); $i++) {
            if ($i == 0) {
                echo "[ ".$result[$i].", ";
            } elseif ($i == count($result) -1) {
                echo $result[$i]." ]";
            } else {
                echo $result[$i].", ";
            }
        }
        //32
        echo "<br/><hr>Задача 32<br/>";
        // 
        // function UnUnique($arr) {
        //     $NewArr32 = [];
        //     foreach($arr as $sample) {
        //         $count = 0;
        //         foreach($arr as $Exem) {
        //             if($sample == $Exem) {
        //                 $count++;
        //             }
        //         }
        //         if($count > 1) {
        //             $flag = false;
        //             foreach($NewArr32 as $newExem) {
        //                 if($sample == $newExem) {
        //                     $flag = true;
        //                 }
        //             }
        //             if(!$flag) {
        //                 $NewArr32[] = $sample;
        //             }
        //         }
        //     }
        //     return $NewArr32;
        // }
        // $result32 = UnUnique($arr32);
        $arr32 = [1, 2, 3, 4, 3, 5, 6, 7, 7, 8, 9, 7, 4, 3, 7, 3];
        $newArr = [];
        $elems = count($arr32);
        for ($i = 0; $i < $elems; $i++) {
            $value = $arr32[$i];
            unset($arr32[$i]);
            if (in_array($value, $arr32)) {
                $newArr[] = $value;
            }
            $arr32[$i] = $value;
        }
        $result32 = $newArr;
        for ($i = 0; $i < count($result32); $i++) {
            if ($i == 0) {
                echo "[ ".$result32[$i].", ";
            } elseif ($i == count($result32) -1) {
                echo $result32[$i]." ]";
            } else {
                echo $result32[$i].", ";
            }
        }
        //33
        echo "<br/><hr>Задача 33<br/>";
        $num = 33;
        function SimpleNum($num) {
            $flag = true;
            for($i = 2; $i < $num; $i++) {
                if($num % $i == 0) { 
                    $flag = false;
                }
            }
            return $flag;
            }
            if(SimpleNum($num)) {
                echo "Является";
            } else {
                echo "Не является";
            }
        //34
        echo "<br/><hr>Задача 34<br/>";
        $arr = ['www.yandex.ru', 'http://google.com', 'www.youtube.com', 'http://http://old.code.mu/'];

        foreach($arr as $item) {
            if(substr($item, 0, 7) == 'http://') {
                $newArr34[] = $item;
            }
        }
        for ($i = 0; $i < count($newArr34); $i++) {
            if ($i == 0) {
                echo "[ ".$newArr34[$i].", ";
            } elseif ($i == count($newArr34) -1) {
                echo $newArr34[$i]." ]";
            } else {
                echo $newArr34[$i].", ";
            }
        }
    ?>
</body>
</html>