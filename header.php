<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Fan de | Interstellar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/7da717c1ea.js"></script>
</head>
<body>
<header>
		<nav class="menu container">
			<ul>
				<li><a href="/index.php" class="btn">Home</a></li>
				<li><a href="/controller/realisateur.php" class="btn">Réalisateur</a></li>
				<li><a href="/FAQ.php" class="btn">FAQ</a></li>
		</nav>
		<div class="dropdown"><i class="fa fa-cog fa-1 fa-spin"></i>
				<ul>
					<li><a href="#" id="hideAside" class="btn">Sidebar</a></li>
					<li><a href="#" id="fadeImg" class="btn">Images</a></li>
					<li><a href="#" id="toggleMenu" class="btn">Menu</a></li>
					<hr>
					<li>Créer
					<ul>
						<li><a href="/create-movie.php" class="btn">Film</a></li>
						<li><a href="/create-person.php?role=acteur" class="btn">Actor</a></li>
						<li><a href="/create-person.php?role=realiateur" class="btn">Réalisateur</a></li>
					</ul>
					</li>
				</ul>
			</div>
</header>
<section class="loader">
    <i class="fas fa-circle-notch fa-3x fa-spin"></i>    
</section>
<main class="animate-in">