<?php
	
	session_start();

		if(!isset($_SESSION['zalogowany']))
		{
		
		header('Location: index.php');
		exit();		
		}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equir="X-UA-Compatible" content=IE=edge,chrome=1 />
<title>Formularz</title>
</head>

<body>

<?php

	echo"<p>Witaj ".$_SESSION['USER']."![<a href="logout.php">Wyloguj się!</a>]</p>";
	echo"<p><b>Tytuł</b>:".$_SESSION['Title'];
	echo"|<b>Zawartość </b>: ".$_SESSION['Content'];
	echo"|<b> Data</b>:".$SESSION['Date'];
	echo"|<b>Autor</b>".$SESSION['Autor'];
	echo"|<b>imgFileName".$SESSION['imgFileName']."</p>";

?>


</body>
</html>