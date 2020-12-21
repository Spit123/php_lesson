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
    echo time();
    //2
    echo "<br/><hr>Задача 2<br/>";
    echo mktime(0, 0 , 0, 3, 1, 2025);
    //3
    echo "<br/><hr>Задача 3<br/>";
    echo mktime(0, 0 , 0, 12, 31);
    //4
    echo "<br/><hr>Задача 4<br/>";
    echo time() - mktime(13, 12, 59, 3, 15, 2000);
    //5
    echo "<br/><hr>Задача 5<br/>";
    $a = time() - mktime(7, 23, 48);
    echo "Количество целых часов = ".(floor($a / 3600));
    //6
    echo "<br/><hr>Задача 6<br/>";
    echo date('Y-m-d H:i:s');
    //7
    echo "<br/><hr>Задача 7<br/>";
    echo date('Y-m-d')."<br>";
    echo date('d.m.Y')."<br>";
    echo date('d.m.y')."<br>";
    echo date('H:i:s');
    //8
    echo "<br/><hr>Задача 8<br/>";
    echo date('d.m.Y', mktime(0,0,0,2,12,2025));
    //9
    echo "<br/><hr>Задача 9<br/>";
    $week = ["вс", "пн", "вт", "ср","чт", "пт", "сб"];
    $b = mktime(0,0,0,6,6,2006);
    $c = mktime(0,0,0,9,24,1992);
    echo "День недели 06.06.2006 = ".($week[date("w", $b)]);
    echo "<br/>День недели 24.09.1992 = ".($week[date("w", $с)]);
    //10
    echo "<br/><hr>Задача 10<br/>";
    $month = [1=>"январь", "февраль", "март", "апрель", "май", "июнь","июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"];
    $m = time();
    echo "Текущий месяц = ".($month[date('n', $m)]);
    //11
    echo "<br/><hr>Задача 11<br/>";
    $m = time();
    echo "Количество дней в текущем месяце = ".date('t', $m);
    //12
    echo "<br/><hr>Задача 12<br/>";    
    ?>
        
    <form action="" method="GET">
        <input type="text" name="year">
        <input type="submit">
    </form>
    <?php 
    if(!empty($_REQUEST['year'])) {
        $yeaR = $_REQUEST['year'];
            if(date('L', mktime(0, 0, 0, 1, 1, $yeaR)) == 1) {
            echo "Год высокосный!";
        } else {
                echo "Год не высокосный!";
            }
        }
    //13
    echo "<br/><hr>Задача 13<br/>";
    ?>
    <form action="" method="GET">
        <input type="text" name="date" placeholder="Введите дату в формате ДД.ММ.ГГГГ">
        <input type="submit">
    </form>
    <?php
    $week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
    if(!empty($_REQUEST['date'])) {
        $userData = $_REQUEST['date'];
        $arr13 = explode('.', $userData);
        $d = mktime(0,0,0,$arr13[1], $arr13[0], $arr13[2]);
        $dn = date('w', $d);
        echo "День недели по дате $y = ".$week[$dn];
    }
    //14
    echo "<br/><hr>Задача 14<br/>";
    ?>

    <form action="" method="GET">
        <input type="text" name="date14" placeholder="Пример даты 2025-12-31">
        <input type="submit">
    </form>

    <?php 
    $month14 = [1=>"январь", "февраль", "март", "апрель", "май", "июнь","июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"];
    if(!empty($_REQUEST['date14'])) {
            $year14 = $_REQUEST['date14'];
            $arr14 = explode('-', $year14);
            $d = mktime(0,0,0,$arr14[1], $arr14[2], $arr14[0]);
            $dn = date('n', $d);
            echo "Месяц по дате $year14 = ".$month[$dn];
        }
    //15
    echo "<br/><hr>Задача 15<br/>";
    ?>
    <form action="" method="GET">
        <input type="text" name="date1"  placeholder="2025-12-31">
        <input type="text" name="date2"  placeholder="2025-12-31">
        <input type="submit">
    </form>
    <?php
    if(!empty($_REQUEST['date1']) && !empty($_REQUEST['date2'])) {
            $date1 = $_REQUEST['date1'];
            $date2 = $_REQUEST['date2'];
            if($date1 > $date2) {
                echo $date1;
            } else {
                echo $date2;
            }
        }
    //16
    echo "<br/><hr>Задача 16<br/>";
    echo date('d-m-Y', strtotime('2025-12-31'));
    //17
    echo "<br/><hr>Задача 17<br/>";
    ?>

    <form action="" method="GET">
        <input type="text" name="date17" placeholder="2025-12-31 12:13:59">
        <input type="submit" >
    </form>
    <?php 
    if(!empty($_REQUEST['date17'])) {
        echo date('H:i:s d.m.Y', strtotime($_REQUEST['date17']));
    }
    //18
    echo "<br/><hr>Задача 18<br/>";
    $date = date_create('2025-12-31');
    echo "Дата = ".date_format($date, 'd-m-Y')."<br/>";
    date_modify($date, '2 day');
    echo "+2 дня = ".date_format($date, 'd-m-Y')."<br>";
    date_modify($date, '1 month 3 day');
    echo "+1 месяц = ".date_format($date, 'd-m-Y')."<br>";
    date_modify($date, '1 year');
    echo "+1 год = ".date_format($date, 'd-m-Y')."<br>";
    date_modify($date, '-3 day');
    echo "-3 дня = ".date_format($date, 'd-m-Y');
    //19
    echo "<br/><hr>Задача 19<br/>";
    $today = time();
    $HappyNewYear = mktime(23, 59, 59, 12, 31);

    echo "До нового года осталось = ".(floor(($HappyNewYear - $today) / 86400))." дней!";
    //20
    echo "<br/><hr>Задача 20<br/>";
    ?>
    <form action="" method="GET">
        <input type="text" name="year20">
        <input type="submit">
    </form>
    <?php
    if(!empty($_REQUEST['year20'])) {
            $year20 = $_REQUEST['year20'];
            $arr20 = [];
            for($i = 1; $i <= 12; $i++) {
                $fr = mktime(0,0,0,$i, 13, $year20);
                if(date('w', $fr) == 5) {
                    $arr20[] = date('d-m-Y', $fr);
                }
            }
        // var_dump($arr20);
        foreach ($arr20 as $elem) {
            if ($arr20[0] == $elem) {
                echo "[ ".$elem.", ";
            } elseif ($elem == $arr20[count($arr20)-1]) {
                echo $elem." ]";
            } else {
                echo $elem.", ";
            }
        }
    }
    //21
    echo "<br/><hr>Задача 21<br/>";
    $week21 = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
    $date21 = date_create();
    date_modify($date21, '-100 day');
    $wd = date_format($date21, 'w');
    echo "100 дней назад день недели был = ".$week[$wd];
    ?>
</body>
</html>