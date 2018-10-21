<?php
	
	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}
	
	require_once"connect.php";
	
	$polaczenie = @new mysqli($host,$db_user, $db_password, $db_name);

	if($polaczenie->connect_errno!=0)
	{
		echo "Error:" .$polaczenie->connect_errno." Opis: " ;
	}
	else
	{	
$login = $_POST['login'];
$haslo = $_POST['haslo'];

	$login=htmlentities($login, ENT_QUOTES, "UTF-8");
	
	
	if ($rezultat = @$polaczenie->query(
	sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND pass='%s'",
	mysqli_real_escape_string($polaczenie,$login))))
	
	{
		$ilu_userow = $rezultat->num_rows;
		if($ilu_userow>0)
		{
			$wiersz=$rezultat->fetch_assoc();
			
			if (password_verify($haslo, $wiersz['pass'] ))
			{
			
				$_SESSION['zalogowany'] = true;

					
				$_SESSION['id'] = $wiersz['id'];					
				$_SESSION['USER'] = $wiersz['USER'];		//w sql nie mamy zapisanych użytkowników więc też nie jestem na 100 % pewny czy wyjdzie odwołanie
				$_SESSION['Title'] = $wiersz['Title']; 
				$_SESSION['Content'] = $wiersz['Content']; 
				$_SESSION['Date'] = $wiersz['Date']; 
				$_SESSION['Autor'] = $wiersz['Autor']; 
				$_SESSION['imgFileName'] = $wiersz['imgFileName']; 
				
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: polog.php');
			}
			else
			{
				$_SESSION['blad']='<span style="color:red">Nieprawidłowy login lub hasło</span>';
				header('Location: index.php');
			}
			
			
		} else {
			
			$_SESSION['blad']='<span style="color:red">
					Nieprawidłowy login lub hasło</span>';
					header('Location: index.php');
			
		}
		
	}
	
	$polaczenie->close();
	
	}

	?>
