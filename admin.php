<?php


$db = new mysqli('localhost', 'root', '', 'mydb');

$s = 'SELECT * from `users`';
$result = $db->query($s);

echo 'Список всех пользователей: <br>';
while ($row = $result->fetch_assoc())
{
?>
  <form action="set.php" method="post">
  <?php echo $row['login'] ?>
  <input type="hidden" name="user" value="<?php echo $row['login'] ?>">
  <input name="balance" value="<?php echo $row['balance'] ?>" size=5>
  <input type="submit" value="установить новое значение">
  </form>

<?php
}
?>
