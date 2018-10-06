<?php

session_start();

if(isset($_POST['nick']))
{
	//Udana walidacja? Yeap
	$wszystko_OK=true;
	$nick = $_POST['nick'];
	
	//sprawdzenie długości nicka
	if ((strlen($nick)<3) || (strlen($nick)>20))
	{
		$wszystko_OK=false;
		$_SESSION['e_nick']="Nick musi posiadać od 3 do 20 znaków!";
	}
	
	if (ctype_alnum($nick)==false)
	{
		$wszystko_OK=false;
		$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		
	}
	//sprawdzenie hasla
	$haslo1 = $_POST['haslo1'];
	$haslo2 = $_POST['haslo2'];
	
	if ((strlen($haslo1)<8) ||(strlen($haslo1)>20))
	{
		$wszystko_OK=false;
		$_SESSION['e_haslo']="Hasło musi zawierać od 8 do 20 znaków!";
	}
	
	if($haslo1!=$haslo2)
	{
		$wszystko_OK=false;
		$_SESSION['e_haslo']="Podane hasła nie są takie same";
	}
	
	$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
	
	$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
	require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	try
	{
		$polaczenie = new mysqli($host,$db_user, $db_password, $db_name);
		 if($polaczenie->connect_errno!=0)
		 {
			 throw new Exception(mysqli_connect_errno());
		 }
	else
	{
	//Czy nick już istnieje?	
		$rezultat =$polaczenie->query("SELECT id FROM users WHERE user='$nick'");
		
		if(!$rezultat) throw new Exception($polaczenie->error);
		
		$ile_takich_nickow = $rezultat->num_rows;
		if($ile_takich_nickow>0)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Istnieje już użytkownik o takim nicku.";
		}
		if ($wszystko_OK==true)	
		{
						//udało się dodać użytkownika
			if ($polaczenie->query("INSERT INFO users VALUES (NULL, '$nick', '$haslo_hash', '$imie', '$nazwisko)"))
			{
				$_SESSION['udanarejestracja']=true;
				header('Location: stronalogowania.php');
				}
			else
			{
				throw new Exception($polaczenie->error);
			}
		
		
		
		
		}
	
		$polaczenie->close();
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