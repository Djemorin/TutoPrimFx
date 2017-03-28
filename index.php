<?php
	$bdd= new PDO('mysql:host=localhost;dbname=articles;charset=utf8', 'root','');

	$articles = $bdd->query('SELECT * FROM articles ORDER BY date_publication DESC');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<ul>
			<?php
				while ($a = $articles->fetch()) { 
			?>
			<li><a href="article.php?id=<?= $a['id'] ?>"><?= $a['titre'] ?></a> | <a href="redaction.php?edit=<?= $a['id'] ?>">Modifier</a> / <a href="">Supprimer</a></li>
			<?php
				}
			?>
		</ul>
	</body>
</html>