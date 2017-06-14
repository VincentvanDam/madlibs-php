<!DOCTYPE html>
<html>
<head>
<link href="story.css" rel="stylesheet" type="text/css" />
	<title>Mad Libs</title>
</head>
<body>
	<div class="container">
	
			<ul>
				<li><a href="php.php">Er heerst paniek...</a></li></a>
				<li><a href="onkunde.php">Onkunde</a></li>
			</ul>
	
		<div class="content">
		<h2>er heerst paniek</h2>
			<p>Er heerst paniek in het koninkrijk  <?=$_POST['land']?>. Koning <?=$_POST['persoon']?> is ten einde raad en als koning <?=$_POST['persoon']?>  ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?=$_POST['docent']?>  .</p>
			<p>" <?=$_POST['docent']?>! Het is een ramp! het is een schande!"</p>
			<p>"Sire, majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<p>"Mijn <?=$_POST['huisdier']?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net een <?=$_POST['kopen']?>  voor hem gekocht!"</p>
			<p>"Majesteit, uw <?=$_POST['huisdier']?> komt vast vanzelf weer terug?"</p>
			<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$_POST['bezigheid']?> leren?"</p>
			<p>"Maar Sire, daar kunt u toch uw <?=$_POST['speelgoed']?> voor gebruiken?"</p>
			<p>"<?=$_POST['persoon']?>, je hebt helemaal gelijk! wat zou ik doen als ik jou niet had?"</p>
			<p>"<?=$_POST['verveelt']?>, Sire."</p>
		</div>
	</div>
</body>
</html>
