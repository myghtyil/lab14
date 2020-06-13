<?php
  require "scripts.php";

  $valid = false;

  $login = valid_input($_POST['login']);
  $password = valid_input($_POST['password']);
  $password2 = valid_input($_POST['password2']);

  if (!reg_data($valid, $login, $password, $password2))
  {
    include "reg_form.html";
  }
  else
  {
    $db = new mysqli('localhost', 'root', '','mydb');
    $db->query("INSERT INTO `users` (`login`,`password`) values ('$login','$password')");
    include "index.html";
  }

  function reg_data($valid, $login, $password, $password2)
  {
    $regexp= "/[a-zA-z0-9]{6,}?/";
    if (!valid_regexp($login))
    {
      echo "Некорректный логин!<br>";
    }
    else if (!valid_regexp($password))
    {
      echo "Некорректный пароль!<br>";
    }
    else if ($password != $password2)
    {
      echo "Пароли не совпадают!<br>";
    }
    else
    {
      $valid = true;
    }
    return $valid;
  }
?>
