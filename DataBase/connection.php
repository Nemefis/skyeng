<h1>
    Test include
</h1>

<?php
   // $host = '95.213.196.197'; // адрес сервера 
    //$database = 'skyeng_timetable'; // имя базы данных
  //  $user = 'alex_panchenko'; // имя пользователя
   // $password = '7haYxHmw36pkTGVw5h4w'; // пароль
    $mysqli = new mysqli("95.213.196.197", "alex_panchenko", "7haYxHmw36pkTGVw5h4w", "skyeng_timetable", 3306);
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

?>