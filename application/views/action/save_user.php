<?php
if (isset($_POST['login'])) //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
{ 
  $login = $_POST['login'];
  if ($login == '') 
  { 
    unset($login);
  }
}

if (isset($_POST['password'])) //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
{ 
  $password=$_POST['password'];
  if ($password =='') 
  { 
    unset($password);
  } 
}

//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);

// подключаемся к базе
include ("application/views/action/db.php");

// проверка на существование пользователя с таким же логином
$result = mysqli_query($db, "SELECT id FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) 
{
exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}

// если такого нет, то сохраняем данные
$result2 = mysqli_query ($db, "INSERT INTO users (login,password) VALUES('$login','$password')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
  echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='/main'>Главная страница</a>";
}
else 
{
  echo "Ошибка! Вы не зарегистрированы.";
}


?>
    