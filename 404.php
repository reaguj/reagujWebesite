<!DOCTYPE HTML>
<html lang="pl">

<head>

	<?php
		require "scripts.php";
	?>

	<meta charset="utf-8"/>
	<title>Aktualności - #reaguj</title>
	<meta name="description" content="Aktualności dotyczące naszej kampanii. Tutaj dowiesz się co się u nas dzieje ;)" />
	<meta name="keywords" content="pierwsza pomoc, aktualności, newsy,#reaguj" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" type="image/png" href="favicon.png">

  <link rel="stylesheet" href="css/error.css">
	<link rel="stylesheet" href="css/Home.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/news.css">
	<link rel="stylesheet" href="css/scrollbar.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;subset=latin-ext" rel="stylesheet">


</head>

<body>
	<?php
		require "nav.php";
	?>
  <div class="flexContainer error">
    <img src="img/404/404.svg" alt=";-;" class="errorImg">
    <h1>Niestety, tym razem nie umiemy zareagować :(</h1>
    <span>Wróć na <a href="index.php">stronę główną</a></span>
  </div>
<?php
		require "footer.php";
	?>
</body>

</html>
