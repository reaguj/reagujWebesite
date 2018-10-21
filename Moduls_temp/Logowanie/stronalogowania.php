<?php

session_start();

if ((isset($_SESSION['udanarejestracja'])))
{
	header('Location:  index.php');
	exit();
}
else
{
	unset($_SESSION['udanarejestracja']);
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


<a href="index.php"> Zaloguj się na swoje konto!</a>
<form action="zaloguj.php" method="post">
Login: <br /> <input type="text" name="nick" /><br />
Hasło: <br /> <input type="password" name="haslo1" /><br />
<input type="submit" value="Zaloguj się" />
</form>

<?php
if(isset($_SESSION['blad']))

echo $_SESSION['blad'];

?>


</body>
</html>