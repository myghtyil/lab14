<?php
require "scripts.php";

$login = valid_input($_POST['login']);
$password = valid_input($_POST['password']);

if (!valid_regexp($login) || !valid_regexp($password))
{
  echo "Некорректно введён логин или пароль.<br>";
  include "index.html";
}
else
{
    if (chek_autorisation($login,$password))
  {
    echo "Вход выполнен успешно<br><a href='main.php'>Продолжить</a>";
    session_start();
    $_SESSION['username'] = $login;
  }
  else
  {
    echo "Введён неверный логин или пароль.<br>";
    include "index.html";
  }
}
?>
