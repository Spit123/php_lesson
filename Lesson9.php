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
        <input type="submit">
    </form>
    <?php
        if (isset($_REQUEST['name'])) {
            $name = strip_tags($_REQUEST['name']);
            echo "Ваше имя: ".$name;
        }
    //2
    echo "<br/><hr>Задача 2<br/>";
    ?>
    <form action="" method="get">
        <input type="text" name="name">
        <input type="text" name="age">
        <textarea name="msg"></textarea>
        <input type="submit">
    </form>
    <?php
        if (isset($_REQUEST['name']) and isset($_REQUEST["age"])) {
            $name = strip_tags($_REQUEST['name']);
            $age = strip_tags($_REQUEST['age']);
            $msg = strip_tags($_REQUEST['msg']);
            echo "Привет, $name, $age лет.<br/>Твоё сообщение: $msg";
        }
    //3
    echo "<br/><hr>Задача 3<br/>";
        if (!isset($_REQUEST['age3'])) {
    ?>
    <form action="" method="get">
        <input type="text" name="age3">
        <input type="submit">
    </form>
    <?php
        } 
        if (isset($_REQUEST['age3'])) {
            $age3 = strip_tags($_REQUEST['age3']);
            echo "Ваш возраст: $age3";
        }
    //4
    echo "<br/><hr>Задача 4<br/>";
    ?>
    <form action="" method="GET">
        <input type="text" name="login">
        <input type="password" name="pswd">
        <input type="submit" name="submit">
    </form>

    <?php
        if (isset($_REQUEST['submit'])) {
            $login = 'admin';
            $pswd = '12345';
            $formLogin = strip_tags(trim($_REQUEST['login']));
            $formPassword = strip_tags(trim($_REQUEST['pswd']));
            if ($login == $formLogin and $pswd == $formPassword) {
                echo 'Доступ разрешен!';
            } else {
                echo 'Доступ запрещен!';
            }
        }
    //5
    echo "<br/><hr>Задача 5<br/>";
    ?>
    <form action="" method="get">
        <input type="text" name="name5" value="<?php if (isset($_REQUEST['name5'])) { echo $_REQUEST['name5']; } ?>">
        <input type="submit">
    </form>
    <?php
	if (!isset($_REQUEST['submit'])) {
		$name5 = strip_tags(trim($_REQUEST['name5']));
		echo $name5;
    }
    //6
    echo "<br/><hr>Задача 6<br/>";
    ?>
    <form action="" method="GET">
        <input name="name6" value="<?php if (isset($_REQUEST['name6'])) echo $_REQUEST['name6']; ?>">
        <textarea name="message">
            <?php if (isset($_REQUEST['message'])) echo $_REQUEST['message']; ?>
        </textarea>
	<input type="submit">
</form>
</body>
</html>