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
    ?>
        <form action="" method="GET">
            <input type="text" name="name">
            <input type="hidden" name="hello" value="0">
            <input type="checkbox" name="hello" value="1">
            <input type="submit">
        </form>
    <?php
        if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
            echo 'Прощай, '.$_REQUEST['name'];
        }

        if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
            echo 'Привет, '.$_REQUEST['name'];
        }
        //2
        echo "<br/><hr>Задача 2";
        ?>
        <form action="" method="GET">
        <p>Какие языки Вы знаете?</p>
            <input type="checkbox" name="lang[]" value="HTML" id="html">
                <label for="html">HTML</label><br>
            <input type="checkbox" name="lang[]" value="CSS" id="css">
                <label for="css">CSS</label><br>
            <input type="checkbox" name="lang[]" value="PHP" id="php">
                <label for="php">PHP</label><br>
            <input type="checkbox" name="lang[]" value="JavaScript" id="javascript">
                <label for="javascript">JavaScript</label><br>
            <input type="submit">
        </form>

        <?php
        if(isset($_REQUEST['lang'])) {
        echo 'Вы знаете: '.implode(', ', $_REQUEST['lang']);
        }
        //3
        echo "<br/><hr>Задача 3";
    ?>
        <form action="" method="GET">
            <p>Знаете ли Вы PHP</p>
            <input type="radio" name="php" value="1" id="phpyes" checked><label for="phpyes">Да</label><br>
            <input type="radio" name="php" value="0" id="phpno"><label for="phpno">Нет</label><br>
            <input type="submit">
        </form>

    <?php
        if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
            echo 'Вы не знаете PHP';
        }
        if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
            echo 'Вы знаете PHP!';
        }
        //4
        echo "<br/><hr>Задача 4<br/>";
    ?>
        <form action="" method="GET">
            <p>Сколько вам лет?</p>
            <input type="radio" name="age" value="20-" id="less20"><label for="less20">Менее 20</label><br>
            <input type="radio" name="age" value="20-25" id="20-25"><label for="20-25">20-25</label><br>
            <input type="radio" name="age" value="26-30" id="26-30"><label for="26-30">26-30</label><br>
            <input type="radio" name="age" value="30+" id="more30"><label for="more30">Более 30</label><br>
            <input type="submit">
        </form>

    <?php
        if(isset($_REQUEST['age'])) {
            switch ($_REQUEST['age']) {
                case '20-': echo 'Вам менее 20 лет'; break;
                case '20-25': echo 'Вам от 20 до 25 лет'; break;
                case '26-30': echo 'Вам от 26 до 30 лет'; break;
                case '30+': echo 'Вам более 30 лет'; break;
            }
        }
        //5
        echo "<br/><hr>Задача 5<br/>";
    ?>
        <form action="" method="GET">
            <p>Выберите ваш возраст:</p>
            <select name="age">
                <option value="1">Менее 20</option>
                <option value="2">20-25</option>
                <option value="3">26-30</option>
                <option value="4">Более 30</option>
            </select><br><br>
            <input type="submit" name="submit">
        </form>

    <?php
        if (isset($_REQUEST['age']) && $_REQUEST['age'] == 1) {
            echo 'Ваш возраст: Менее 20';
        }
        if (isset($_REQUEST['age']) && $_REQUEST['age'] == 2) {
            echo 'Ваш возраст: 20-25';
        }
        if (isset($_REQUEST['age']) && $_REQUEST['age'] == 3) {
            echo 'Ваш возраст: 26-30';
        }
        if (isset($_REQUEST['age']) && $_REQUEST['age'] == 4) {
            echo 'Ваш возраст: Более 30';
        }
        //6
        echo "<br/><hr>Задача 6<br/>";
    ?>
        <form action="" method="GET">
        <p>Какие языки Вы знаете?</p>
        <select size="5" multiple name="language[]">
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="PHP">PHP</option>
            <option value="JavaSript">JavaScript</option>
        </select>
            <input type="submit">
        </form>

    <?php
        if(isset($_REQUEST['language'])) {
            echo 'Вы знаете: '.implode(', ', $_REQUEST['language']);
        }
        //7
        echo "<br/><hr>Задача 7<br/>";
        function createInput($type, $name, $value) {
            return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
        }
        echo createInput("text", "textinp", "some text");
        //8
        echo "<br/><hr>Задача 8<br/>";
    ?>
        <form action="" method="GET">
            <?php echo createInput7('text', 'textinp', 'some text');?>
            <input type="submit">
        </form>

    <?php
        function createInput7($type, $name, $value) {
            if(isset($_REQUEST[$name])){
                $value = $_REQUEST[$name];
            }
            return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
        }
        
        //9
        echo "<br/><hr>Задача 9<br/>";
        function CreateCheckbox($name) {
            return '<input type="hidden" name="'.$name.'" value="0">
            <input type="checkbox" name="'.$name.'" value="1">';
        }
        echo CreateCheckbox('checkbox');
        //10
        echo "<br/><hr>Задача 10<br/>";
    ?>
        <form action="" method="GET">
            <?php echo makeinput("check");?>
            <input type="submit">
        </form>
    <?php
        function makeinput($name) {
            if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
                $checked = "checked";
            } else {
                $checked = "";
            }
        return '<input type="hidden" name="'.$name.'" value="0">
        <input type="checkbox" name="'.$name.'" value="1" '.$checked.'>';
        }
    ?>
</body>
</html>