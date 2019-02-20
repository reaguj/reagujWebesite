<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Aktualności - #reaguj</title>

	<?php
		require "scripts.php";
	?>

	<meta name="description" content="Aktualności dotyczące naszej kampanii. Tutaj dowiesz się co się u nas dzieje ;)" />
	<meta name="keywords" content="pierwsza pomoc, aktualności, newsy,#reaguj" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" href="css/aboutUs.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/Home.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;subset=latin-ext" rel="stylesheet">



</head>

<body>
	<?php
		require "nav.php";
	?>
<div id="Slides">
			<div class="slide" id="WelcomeSlide">
				<img src="img/aboutUs/jankowalski.jpeg" id="Background"/>
				<div Class="Content">

					<div class="crop"><img src="img/common/pulse2.svg" id="HeartLineArt"/></div>
					<div class="MainTitle">
						Reaguj razem z nami!
					</div>
					<div class="TextContent">
						Nasz projekt powstał, aby zwrócić uwagę Polaków na problem tak zwanej znieczulicy, o której coraz częściej się słyszy w mediach. Poprzez serię filmów, grafik i prelekcji mamy na celu poprawić wiedzę polaków w zakresie świadomości na temat pierwszej pomocy.
					</div>
				</div>
			</div>
	  <div class="flexContainer">
      <div class="slideTitle">
        <span class="underline">
	        Partner
        </span>
      </div>

      <div class="Content Red flexContainer leftSide">
        <img src="img/aboutUs/OlivierHalupczok.jpg">
        <div class="content"><div class="RectangleTitle">
          <span class="underline">
            Firma X
          </span>
        </div>
          <div class="RectangleTextContent">Firma X jest partnerem naszego projektu odpowiedzialna za dostarczenie nam koszulek z nadrukami, plakatami jaki również ulotkami do rozreklamowania naszego projektu. Jakość rzeczy które dostarczyła nam firma X była rewelacyjna, a czas realizacji zamówień był bardzo krótki. Jesteśmy zadowoleni z usług udzielonych nam przez Firme X i skorzystamy z ich usług jeszcze nie raz. Polecamy każdemu skorzystania z usług Firmy X!   </div></div>
          </div>
	        <div class="slideTitle">
            <span class="underline">
          	  Patron
	          </span>
	        </div>
	        <div class="Content Red flexContainer rightSide">
	          <img src="img/aboutUs/PaulinaSowa.jpg">
	           <div class="content">
              <div class="RectangleTitle flexContainer">
	               <span class="underline">
	                 Frima Y
                </span>
                 <div class="clear"></div>
              </div>
	            <div class="RectangleTextContent">Firma Y jest naszym patronem medialnym. Jest odpowiedzialna za rozpromowanie nas w mediach społecznościowych takich jak RMF FM, TVP1, gazeta Katowice, Dziennik zachodni. Również udostępniali informacje o naszej stronie na stronach internetowych takich jak facebook, nasza klasa, instagram. Jesteśmy wdzięczni za to co dla nas zrobili, ich pomoc bardzo nam się przysłużyła do rozwoju naszego projektu. </div></div>
	        </div>

      <div class="slideTitle">
        <span class="underline">
	        Sponsor
        </span>
      </div>

      <div class="Content Red flexContainer leftSide">
        <img src="img/aboutUs/OliwiaJóźwiak.jpg">
        <div class="content"><div class="RectangleTitle">
          <span class="underline">
           Firma Z
          </span>
        </div>
          <div class="RectangleTextContent">Firma Z udzieliła nam sponsoringu w urządzeniach i akcesoriach ratowniczych, jak i przedmiotach do rozreklamowania naszego projektu. Firma Z zapewniła nam sponsoring kamer do nakręcenia filmów, jak i rzeczy potrzebnych do przeprowadzenia prelekcji. Projekt nasz nie rozwinął by się bez udzielonej przez Firmę Z pomocy.  </div></div>
          </div>


	  </div>
	<?php
		require "footer.php";
	?>
</body>

</html>
