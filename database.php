 <?php
	//Устанавливаем доступы к базе данных:
	$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
	$user = 'root'; //имя пользователя, по умолчанию это root
	$password = ''; //пароль, по умолчанию пустой
	$db_name = 'dipbd'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
	$link = mysqli_connect($host, $user, $password, $db_name);
		

	
		//Соединение записывается в переменную $link,
		//которая используется дальше для работы mysqi_query.
	if (!$link) 
	{
    	die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
	}

	mysqli_query($link, "SET NAMES utf8");
?>