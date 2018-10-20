<?php

session_start();

if(isset($_POST['nick']))
{
	//Udana walidacja? Yeap
	$evrthng_ok=true;
	$nick = $_POST['nick'];

	//sprawdzenie długości nicka
	if ((strlen($nick)<3) || (strlen($nick)>20))
	{
		$evrthng_ok=false;
		$_SESSION['e_nick']="Nick musi posiadać od 3 do 20 znaków!";
	}

	if (ctype_alnum($nick)==false)
	{
		$evrthng_ok=false;
		$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";

	}
	//sprawdzenie hasla
	$password1 = $_POST['haslo1'];
	$password2 = $_POST['haslo2'];

	if ((strlen($password1)<8) ||(strlen($password1)>20))
	{
		$evrthng_ok=false;
		$_SESSION['e_haslo']="Hasło musi zawierać od 8 do 20 znaków!";
	}

	if($password1!=$password2)
	{
		$evrthng_ok=false;
		$_SESSION['e_haslo']="Podane hasła nie są takie same";
	}

	$haslo_hash = password_hash($password1, PASSWORD_DEFAULT);

	$firstName=$_POST['imie'];
	$lastName=$_POST['nazwisko'];
	require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);

	try
	{
		$connection = new mysqli($host,$db_user, $db_password, $db_name);
		 if($connection->connect_errno!=0)
		 {
			 throw new Exception(mysqli_connect_errno());
		 }
	else
	{
	//Czy nick już istnieje?
		$result =$connection->query("SELECT id FROM users WHERE user='$nick'");

		if(!$result) throw new Exception($connection->error);

		$how_many_nicks = $result->num_rows;
		if($how_many_nicks>0)
		{
			$evrthng_ok=false;
			$_SESSION['e_nick']="Istnieje już użytkownik o takim nicku.";
		}
		if ($evrthng_ok==true)
		{
						//udało się dodać użytkownika
			if ($connection->query("INSERT INFO users VALUES (NULL, '$nick', '$haslo_hash', '$firstName', '$lastName)"))
			{
				$_SESSION['udanarejestracja']=true;
				header('Location: stronalogowania.php');
				}
			else
			{
				throw new Exception($connection->error);
			}




		}

		$connection->close();
	}
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwer! Przepraszam za niedogodniości i prosimy o cierpliwość.</span>';
			echo '<br />Info developerskie:'.$e;
		}

}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equir="X-UA-Compatible" content=IE=edge,chrome=1 />
<title>Rejestracja</title>

<style>
	.error
	{
		color:red;
		margin-top: 10px;
		margin-bottom: 10px;

	}


</style>

</head>

<body>

<form method="post">

	Nickname: <br /> <input type="text" name="nick" /><br />

	<?php
	if (isset($_SESSION['e_nick']))
	{
		echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
		unset($_SESSION['e_nick']);
	}
	?>

	Imię:<br /> <input type="text" name="imie" /><br />
	Nazwisko:<br /> <input type="text" name="nazwisko" /><br />
	Hasło: <br /> <input type="password" name="haslo1" /><br />

	<?php
		if (isset($_SESSION['e_haslo']))
		{
			echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
			unset($_SESSION['e_haslo']);
		}

	?>
	Powtórz hasło: <br /> <input type="password" name="haslo2" /><br />
	<input type="submit" value="Zarejestruj się" />


</form>


</body>
</html>
