<!DOCTYPE html>
<html>
<head>
<link href="onkunde.css" rel="stylesheet" type="text/css" />
	<title>Onkunde</title>
</head>
<body>
	<div class="container">
		
			<ul>
				<li><a href="php.php">Er heerst paniek...</a></li>
				<li><a href="onkunde.php">Onkunde</a></li>
			</ul>

		<div class="content">
		<h2>Onkunde</h2>
		<p>Er zijn veel mensen die niet kunnen <?=$_POST['willen']?>.
		Neem nou <?=$_POST['persoon']?>.
		Zelfs met de hulp van een <?=$_POST['vakantie']?> of zelfs <?=$_POST['getal']?> kan <?=$_POST['persoon']?> niet <?=$_POST['willen']?>  .
		Dat heeft niet te maken met een gebrek aan <?=$_POST['beste']?> , maar met een te veel aan  <?=$_POST['slechtste']?>.
		Te veel <?=$_POST['slechtste']?> leidt tot <?=$_POST['ergste']?> en dat is niet goed als je wil <?=$_POST['willen']?> .
		Helaas voor <?=$_POST['persoon']?> .</p>
		</div>
	</div>
</body>
</html>