<?php

	require_once "connect.php";

	$connect = mysqli_connect($host,$db_user,$db_password,$db_name);

	if($connect->connect_errno!=0)
	{
		echo "Error: ".$connect->connect_errno;
	}
	mysqli_query($connect, "SET CHARSET utf8");
	mysqli_query($connect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
    mysqli_select_db($connect, $db_name);

	$query="SELECT * FROM posty";

	$result = mysqli_query($connect, $query);

	$postsNumber=mysqli_num_rows($result);


?>

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
	<link rel="icon" type="image/png" href="img/favicon.png">

</head>

<body>
	<?php

	require "nav.php";

	if($postsNumber>=1)
	{
		for($i=$postsNumber; $i>0; $i--)
		{
			$row= mysqli_fetch_assoc($result);
			$title= $row['Title'];
			$content=$row['Content'];
			$date = $row['Date'];
			$img = $row['imgFileName'];

			$post = "<div><b><h2>$title</h2></b></div></br><p>$content</p><br/>$date<br/><br/><br/>";

			echo $post;

		}

		$result->close();
		$connect->close();
	}

	require "footer.php";
	?>
</body>
