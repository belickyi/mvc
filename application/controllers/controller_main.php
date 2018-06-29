<?php

class Controller_Main extends Controller
{
	
	function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');
	}
	function action_signup() // action для регистрации пользователя на сайт
	{	
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
		// echo ($_POST['login']);
		// echo ($_POST['password']);

	
		//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали
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
	}

	function action_enter() // action для входа пользователя на сайт
	{
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

		if (empty($login) or empty($password)) {
			exit ('Вы ввели не всю информацию');
		}

		//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
		$login = stripslashes($login);
		$login = htmlspecialchars($login);
		$password = stripslashes($password);
		$password = htmlspecialchars($password);

		//удаляем лишние пробелы
		$login = trim($login);
		$password = trim($password);
		
		// подключаемся к базе
		include ("application/views/action/db.php");

		// извлекаем из базы все данные о пользователе с введенным логином
		$result = mysqli_query($db, "SELECT * FROM users WHERE login='$login'");
		$myrow = mysqli_fetch_array($result); // Обрабатывает ряд результата запроса, возвращая ассоциативный массив, численный массив или оба
		if (empty($myrow['password'])) 
		{
		//если пользователя с введенным логином не существует
		exit ("Login или пароль не существует!");
		}
		else {
			//иначе сверяем пароли
			if ($myrow['password'] == $password) {
				$_SESSION['login'] = $myrow['login'];
				$_SESSION['id'] = $myrow['id'];
			} else {
				exit ("Login или пароль не существует!");
			}
			
		}
	}

	function action_exit() // action разлогирования пользователя
	{	
		unset($_SESSION['password']);
		unset($_SESSION['login']); 
		unset($_SESSION['id']);
		header('Location:/main');
	}
}
