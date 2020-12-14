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
        $arr = [1,2,3,4,5];
        echo count($arr);
        //2
        echo "<br/><hr>Задача 2<br/>";
        $arr2 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        echo $arr2[count($arr2)-1];
        //3
        echo "<br/><hr>Задача 3<br/>";
        $arr3 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $result = in_array(3, $arr3);
        var_dump($result);
        //4
        echo "<br/><hr>Задача 4<br/>";
        $arr4 = [1,2,3,4,5];
        echo array_sum($arr4);
        //5
        echo "<br/><hr>Задача 5<br/>";
        $arr5 = [1,2,3,4,5];
        echo array_product($arr5);
        //6
        echo "<br/><hr>Задача 6<br/>";
        $arr6 = [1,2,3,4,5];
        echo "Среднее арифметическое = ".(array_sum($arr6)/count($arr6));
        //7
        echo "<br/><hr>Задача 7<br/>";
        $arr7 = range(1, 100);
        foreach ($arr7 as $elem) {
            if ($arr7[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr7[count($arr7)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //8
        echo "<br/><hr>Задача 8<br/>";
        $arr8 = range('a', 'z');
        foreach ($arr8 as $elem) {
            if ($arr8[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr8[count($arr8)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //9
        echo "<br/><hr>Задача 9<br/>";
        $arr9 = range(1, 9);
        echo implode("-", $arr9);
        //10
        echo "<br/><hr>Задача 10<br/>";
        $arr10 = range(1, 100);
        echo array_sum($arr10);
        //11
        echo "<br/><hr>Задача 11<br/>";
        $arr11 = range(1,10);
        echo array_product($arr11);
        //12
        echo "<br/><hr>Задача 12<br/>";
        $arr12 = [1, 2, 3];
        $array = ['a', 'b', 'c'];
        $result = array_merge($arr12, $array);
        foreach ($result as $elem) {
            if ($result[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $result[count($result)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //13
        echo "<br/><hr>Задача 13<br/>";
        $arr13 = [1, 2, 3, 4, 5];
        $result = array_slice($arr13, 1, 3);
        foreach ($result as $elem) {
            if ($result[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $result[count($result)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //14
        echo "<br/><hr>Задача 14<br/>";
        $arr14 = [1, 2, 3, 4, 5];
        $res = array_splice($arr14, 1, 4, [4,5]);
        foreach ($arr14 as $elem) {
            if ($arr14[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr14[count($arr14)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //15
        echo "<br/><hr>Задача 15<br/>";
        $arr15 = [1, 2, 3, 4, 5];
        $res = array_splice($arr15, 1, 3);
        foreach ($res as $elem) {
            if ($res[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $res[count($res)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //16
        echo "<br/><hr>Задача 16<br/>";
        $arr16 = [1, 2, 3, 4, 5];
        $res = array_splice($arr16, 3, 1, ['a', 'b', 'c', 4]);
        foreach ($arr16 as $elem) {
            if ($arr16[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr16[count($arr16)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //17
        echo "<br/><hr>Задача 17<br/>";
        $arr17 = [1, 2, 3, 4, 5];
        array_splice($arr17, 1, 1, ['a', 'b', 2]);
        array_splice($arr17, -1, 1, ['c', 5, 'e']);
        foreach ($arr17 as $elem) {
            if ($arr17[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr17[count($arr17)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //18
        echo "<br/><hr>Задача 18<br/>";
        $arr18 = ['a'=>1, 'b'=>2, 'c'=>3];
        $keys = array_keys($arr18);
        $values = array_values($arr18);
        foreach ($keys as $elem) {
            if ($keys[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $keys[count($keys)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        echo "<br/>";
        foreach ($values as $elem) {
            if ($values[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $values[count($values)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //19
        echo "<br/><hr>Задача 19<br/>";
        $keys = ['a', 'b', 'c'];
        $values = [1, 2, 3];
        $result = array_combine($keys, $values);
        echo "[ ";
        foreach ($result as $keys=>$elem) {
            echo $keys." => ".$elem.", ";
        }
        echo " ]";
        //20
        echo "<br/><hr>Задача 20<br/>";
        $arr20 = ['a'=>1, 'b'=>2, 'c'=>3];
        $result = array_flip($arr20);
        echo "[ ";
        foreach ($result as $keys=>$elem) {
            echo $keys." => ".$elem.", ";
        }
        echo " ]";
        //21
        echo "<br/><hr>Задача 21<br/>";
        $arr21 = [1, 2, 3, 4, 5];
        $result = array_reverse($arr21);
        foreach ($result as $elem) {
            if ($result[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $result[count($result)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //22
        echo "<br/><hr>Задача 22<br/>";
        $arr22 = ['a', '-', 'b', '-', 'c', '-', 'd'];
        echo array_search("-", $arr22);
        //23
        echo "<br/><hr>Задача 23<br/>";
        $arr23 = ['a', '-', 'b', '-', 'c', '-', 'd'];
        array_splice($arr23, array_search("-", $arr23), 1);
        foreach ($arr23 as $elem) {
            if ($arr23[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr23[count($arr23)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //24
        echo "<br/><hr>Задача 24<br/>";
        $arr24 = ['a', 'b', 'c', 'd', 'e'];
        $res = array_replace($arr24, [0=>'!', 3=> '!!']);
        foreach ($res as $elem) {
            if ($res[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $res[count($res)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //25
        echo "<br/><hr>Задача 25<br/>";
        $arr25 = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
        sort($arr25);
        echo "[ ";
        foreach ($arr25 as $keys=>$elem) {
            echo $keys." => ".$elem.", ";
        }
        echo " ]<br/>";
        rsort($arr25);
        echo "[ ";
        foreach ($arr25 as $keys=>$elem) {
            echo $keys." => ".$elem.", ";
        }
        echo " ]<br/>";
        ksort($arr25);
        echo "[ ";
        foreach ($arr25 as $keys=>$elem) {
            echo $keys." => ".$elem.", ";
        }
        echo " ]<br/>";
        krsort($arr25);
        echo "[ ";
        foreach ($arr25 as $keys=>$elem) {
            echo $keys." => ".$elem.", ";
        }
        echo " ]<br/>";
        //26
        echo "<br/><hr>Задача 26<br/>";
        $arr26 = ['a'=>1, 'b'=>2, 'c'=>3];
        echo array_rand($arr26);
        //27
        echo "<br/><hr>Задача 27<br/>";
        $arr27 = ['a'=>1, 'b'=>2, 'c'=>3];
        echo $arr27[array_rand($arr27)];
        //28
        echo "<br/><hr>Задача 28<br/>";
        $arr28 = ['a', 'b', 'c', 'd', 'e'];
        shuffle($arr28);
        foreach ($arr28 as $elem) {
            if ($arr28[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr28[count($arr28)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //29
        echo "<br/><hr>Задача 29<br/>";
        $arr29 = range(1,25);
        shuffle($arr29);
        foreach ($arr29 as $elem) {
            if ($arr29[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr29[count($arr29)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //30
        echo "<br/><hr>Задача 30<br/>";
        $arr30 = range('a', 'z');
        shuffle($arr30);
        foreach ($arr30 as $elem) {
            if ($arr30[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr30[count($arr30)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //31
        echo "<br/><hr>Задача 31<br/>";
        $arr31 = range('a', 'z');
        shuffle($arr31);
        $result = array_splice($arr31, 0, 6);
        foreach ($result as $elem) {
            if ($result[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $result[count($result)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //32
        echo "<br/><hr>Задача 32<br/>";
        $arr32 = ['a', 'b', 'c', 'b', 'a'];
        $result = array_unique($arr32);
        foreach ($result as $elem) {
            if ($result[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $result[count($result)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //33
        echo "<br/><hr>Задача 33<br/>";
        $arr33 = [1, 2, 3, 4, 5];
        echo array_shift($arr33)."<br/>";
        echo array_pop($arr33)."<br/>";
        foreach ($arr33 as $elem) {
            if ($arr33[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr33[count($arr33)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //34
        echo "<br/><hr>Задача 34<br/>";
        $arr34 = [1, 2, 3, 4, 5];
        array_unshift($arr34, 0);
        array_push($arr34, 6);
        foreach ($arr34 as $elem) {
            if ($arr34[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr34[count($arr34)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //35
        echo "<br/><hr>Задача 35<br/>";
        $arr35 = [1, 2, 3, 4, 5, 6, 7, 8];
        $str = '';
        for ($i = 0; count($arr35) > 0; $i++){
            $str .= array_shift($arr35);
            $str .= array_pop($arr35);
        }
        echo $str;
        //36
        echo "<br/><hr>Задача 36<br/>";
        $arr36 = [ 'a', 'b', 'c' ];
        $result = array_pad($arr36, 6, "-");
        echo "[ ";
        foreach ($result as $elem) {
                echo $elem.", ";
        }
        echo " ]";
        //37
        echo "<br/><hr>Задача 37<br/>";
        $arr37 = [];
        $arr37 = array_pad($arr37, 10, "x");
        echo "[ ";
        foreach ($arr37 as $elem) {
                echo $elem.", ";
        }
        echo " ]";
        //38
        echo "<br/><hr>Задача 38<br/>";
        $arr38 = range(1,20);
        $result = array_chunk($arr38, 5);
        var_dump($result);
        //39
        echo "<br/><hr>Задача 39<br/>";
        $arr39 = ['a', 'b', 'c', 'b', 'a'];
        $res = array_count_values($arr39);
        echo "[ ";
        foreach ($res as $keys=>$elem) {
            echo $keys." => ".$elem.", ";
        }
        echo " ]";
        //40
        echo "<br/><hr>Задача 40<br/>";
        $arr40 = [1, 2, 3, 4, 5];
        $res = array_map('sqrt', $arr40);
        foreach ($res as $elem) {
            if ($res[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $res[count($res)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //41
        echo "<br/><hr>Задача 41<br/>";
        $arr41 = ['<b>php</b>', '<i>html</i>'];
        $res = array_map('strip_tags', $arr41);
        foreach ($res as $elem) {
            if ($res[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $res[count($res)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
        //42
        echo "<br/><hr>Задача 42<br/>";
        $arr42 = [' a ', ' b ', ' с '];
        $res = array_map('trim', $arr42);
        foreach ($res as $elem) {
            if ($res[0] == $elem) {
                echo "[".$elem."|";
            } elseif ($elem == $res[count($res)-1]) {
                echo $elem."]";
            } else {
                echo $elem."|";
            }
        }
        //43
        echo "<br/><hr>Задача 43<br/>";
        //44
        echo "<br/><hr>Задача 44<br/>";
        //45
        echo "<br/><hr>Задача 45<br/>";
        //46
        echo "<br/><hr>Задача 46<br/>";
        //47
        echo "<br/><hr>Задача 46<br/>";
        //48
        echo "<br/><hr>Задача 46<br/>";
    ?>
</body>
</html>