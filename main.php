<?php
session_start();

require "scripts.php";

if (!isset($_SESSION['username']))
{
  exit("Необходима <a href='index.html'>авторизация</a>");
}

echo "Здравствуйте, " . $_SESSION['username'] . "<br>";

echo "На вашем счету: " . balance($_SESSION['username']) . " условных единиц.<br>";
?>

<a href='send_form.php'>Перевод другому пользователю</a><br>
<a href='repass.html'>Сменить пароль</a><br>
<a href='exit.php'>Выход</a><br>
<a href='delete.php'>Удалить аккаунт</a>
