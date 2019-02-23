<?php

	require_once "const/connect.php";

	$connect = mysqli_connect($host,$db_user,$db_password,$db_name);

	if($connect->connect_errno!=0)
	{
		echo "Error: ".$connect->connect_errno;
	}
	mysqli_query($connect, "SET CHARSET utf8");
	mysqli_query($connect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
  mysqli_select_db($connect, $db_name);

	$query="SELECT * FROM howtohelp";

	$result = mysqli_query($connect, $query);

	$postsNumber=mysqli_num_rows($result);


?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<?php
		require "const/scripts.php";
	?>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/readMore.js"></script>

	<meta charset="utf-8"/>
	<title>Aktualności - #reaguj</title>

	<meta name="description" content="Aktualności dotyczące naszej kampanii. Tutaj dowiesz się co się u nas dzieje ;)" />
	<meta name="keywords" content="pierwsza pomoc, aktualności, newsy,#reaguj" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" type="image/png" href="img/favicon.png">

	<link rel="stylesheet" href="css/Home.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/news.css">
	<link rel="stylesheet" href="css/scrollbar.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;subset=latin-ext" rel="stylesheet">

</head>

<body>
	<?php
	  require "const/nav.php";
	 ?>

	<div class="slide HelpFlex" id="NewsSlide">
		<?php
		if($postsNumber>=1)
		{
			for($i=$postsNumber; $i>0; $i--)
			{
				$row= mysqli_fetch_assoc($result);
				$id= $row['id'];
				$title= $row['title'];
				$shortDesc=$row['shortDesc'];
				$longDesc = $row['longDesc'];
				$img = $row['img'];

				$post = "<div class='Content Red transition'><img src='img/howToHelp/$img' onerror=".'"this.src='."'".'img/howToHelp/RKO.jpg'."'".'"'."/><div class='RectangleTitle'><span class='underline'>$title</span></div><div class='content transition'><div class='shortDesc transition'>$shortDesc...<button class='showMore'> Pokaż więcej</button></div><div class='longDesc transition'>$longDesc<button class='showLess'> Pokaż mniej</button></div></div></div>";

				echo $post;

			}

			$result->close();
			$connect->close();
		}
		?>
	</div>
	<?php
	  require "const/footer.php";
	 ?>
</body>
</html>
