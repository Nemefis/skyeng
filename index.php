<html>
    <?php include 'blocks/header.php' ?>
    <body>
        <?php
            echo 'Hello world!';
            include 'database/connection.php'
        ?>

<?php
require_once 'database/connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
     
// закрываем подключение
mysqli_close($link);
?>
    </body>
</html>