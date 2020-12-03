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
        $a = 3;
        echo 'а= '.$a;
        //2
        $a = 10;
        $b = 2;
        echo "<br/>Сумма= "; echo $a+$b;
        echo "<br/>Разность = "; echo $a - $b;
        echo "<br/>Произведение = "; echo $a * $b;
        echo "<br/>Частное = "; echo $a / $b;
        //3
        $c = 15; $d = 2;
        $result = $c + $d;
        echo "<br/>result = ".$result;
        //4
        $a = 10; $b = 2; $c = 5;
        echo "<br/> a+b+c = "; echo $a+$b+$c;
        //5
        $a = 17; $b = 10;
        $c = $a - $b;
        $d = 7;
        $result = $c + $d;
        echo "<br/>result = "; echo $result;
        //6
        $text = 'Привет, Мир!';
        echo "<br/> text = ".$text;
        //7
        $text1='Привет, '; $text2='Мир!';
        echo "<br/> text1+text2 = "; echo $text1.$text2;
        //8
        $name = 'Александр';
        echo "<br/> Привет, ".$name;
        //9
        $age = 28;
        echo "<br/> Мне ".$age." лет.";
        //10
        $text = 'abcde';
        echo "<br/> символ '".$text[0]."' имеет индекс 0, символ '".$text[2]."' имеет индекс 2, символ '".$text[4]."' имеет индекс 4";
        //11
        $text = 'abcde';
        $text[0] = '!';
        echo "<br/> результат= ".$text;
        //12
        $sum = '12345';
        echo "<br/> sum = "; echo $sum[0]+$sum[1]+$sum[2]+$sum[3]+$sum[4];
        //13
        $sec = 1; $min = $sec*60; $hour = $min*60; $day = $hour*24; $month = $day*30;
        echo "<br/>В 1 часе ".$hour." секунд";
        echo "<br/>В 1 дне ".$day." секунд";
        echo "<br/>В 1 месяце".$month." секунд";
        //14
        $hour = 'Час'; $minute = 'Минута'; $second = 'Секунда';
        echo "<br/>".$hour.":".$minute.":".$second;
        //15
        $d = 5;
        echo "<br/>Квадрат d = ".pow($d, 2);
        //16
        $var = 47;
        $var += 7;
        $var -= 18;
        $var *= 10;
        $var /= 20;
        echo "<br/> var = ".$var;
        //17
        $text = 'Я';
        $text .=' хочу';
        $text .=' знать';
        $text .=' PHP!';
        echo "<br/> text = ".$text;
        //18
        $var = 10;
        $var++;
        $var++;
        $var--;
        echo "<br/> var = ".$var;
        //19
        $var = 10;
        $var += 7;
        $var++;
        $var--;
        $var += 12;
        $var *= 7;
        $var -= 15;
        echo "<br/>var =".$var;
    ?> 
</body>
</html>