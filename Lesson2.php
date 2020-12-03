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
        $arr=['a', 'b', 'c'];
        echo "массив: "; var_dump($arr);
        //2 
        echo "<br/>Элемент 1 = '".$arr[0]."'. Элемент 2 = '".$arr[1]."'. Элемент 3 = '".$arr[2]."'.";
        //3
        $arr3=['a', 'b', 'c', 'd'];
        echo "<br/> Строка: ".$arr3[0]."+".$arr3[1].",".$arr3[2]."+".$arr3[3];
        //4
        $arr4=[2,5,3,9];
        $result = $arr4[0]*$arr4[1]+$arr4[2]*$arr4[3];
        echo "<br/>result = ".$result;
        //5
        $arr5[] = 1;
        $arr5[] = 2;
        $arr5[] = 3;
        $arr5[] = 4;
        $arr5[] = 5;
        echo "<br>Arr: ";var_dump($arr5);
        //6
        $arr6 = ['a'=>1, 'b'=>2, 'c'=>3];
        echo "<br/>Эл c = ".$arr6['c'];
        //7
        $arr7 = ['a'=>1, 'b'=>2, 'c'=>3];
        echo "<br/> сумма = ".($arr7['a']+$arr7['b']+$arr7['c']);
        //8
        $arr8 = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
        echo "<br/>Зарплата Пети = ".$arr8['Петя'].", а зарплата Коли = ".$arr8['Коля'];
        //9
        $arr9 = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
        echo "<br/>Текущий день недели: ".$arr9[4];
        //10
        $day = 3;
        echo "<br/>Текущий день($day) недели: ".$arr9[$day];
        //11 
        $arr11 = [
            'cms'=>['joomla', 'wordpress', 'drupal'],
            'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
        ];
        echo "<br/>".$arr11['cms'][0].", ".$arr11['cms'][2].", ".$arr11['colors']['green'].", ".$arr11['colors']['red'];
        //12
        $arr12 = [
            'ru'=>[1=>'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'],
            'en'=>[1=>'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']
        ];
        echo "<br/> ".$arr12['ru'][1].", ".$arr12['en'][3];
        //13
        $lang = 'ru';
        $day = 3;
        echo "<br/> lang = $lang, day = $day, результат = ".$arr12[$lang][$day];
    ?>
</body>
</html>