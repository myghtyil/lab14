<?php
  session_start();
  if (!isset($_SESSION['username']))
  {
    exit("Необходима <a href='index.html'>авторизация</a>");
  }

  $login = $_SESSION['username'];

  $db = new mysqli('localhost', 'root', '','mydb');
  $db->query("DELETE FROM `users` where `login` = '$login'");
  echo "Пользователь удалён";
?>
<br>
<a href='index.html'>Вход</a><br>
<a href='reg_form.html'>Регистрация</a>
