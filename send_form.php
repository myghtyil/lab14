<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['username']))
{
  exit("Необходима <a href='index.html'>авторизация</a>");
}
?>
Перевод средств<br>
<form action="send.php" method="post"><br>
Получатель: <input name="receiver"><br>
Сумма:<input name="sum"><br>
<input type="submit" value="Выполнить перевод">
</form>
<br>
<a href='main.php'>В главное меню</a>
