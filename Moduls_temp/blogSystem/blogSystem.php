<?php
	
	require_once "connect.php";
		
	$connect = mysqli_connect($host, $user, $password);
	
	if($connect->connect_errno!=0)
	{
		echo "Error: ".$connect->connect_errno;
	}
	mysqli_query($connect, "SET CHARSET utf8");
	mysqli_query($connect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
    mysqli_select_db($connect, $database);	
	
	$query="SELECT * FROM posty"
	
	$result = mysqli_query($connect, $query);
	
	$postsNumber=$result->num_rows;


?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>default</title>
	<meta name="description" content="default" />
	<meta name="keywords" content="default" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- <meta name="author" content="default"> -->

</head>

<body>
	<?php
		
	if($postsNumber<1)
	{
		for($i=$postsNumber; $i<0; $i--)
		{
			$row= mysqli_fetch_assoc($result);
			$title= $row['Title'];
			$content=$row['Content'];
			$date = $row['Date'];
			
			$post = "<p>$title</p><br/><br/></br><p>$content</p><br/><br/><br/>$date";
			
			echo $post;
			
		}
	
		$result->close();
		$connect->close();
	}
	?>
</body>

