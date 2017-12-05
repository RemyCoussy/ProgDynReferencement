<?php 
ini_set('display_errors', 'On');
include 'controller.php';
include 'header.php'; 
?>
<section>
	<h3>Liste de films</h3>
	<ul>
	<?php getAllMovies(); ?>
  	</ul>
	<h3>Liste de réalisateurs</h3>
	<ul>
	<?php getAllDirectors(); ?>
  	</ul>
	<h3>Liste d'acteurs</h3>
	<ul>
	<?php getAllActors(); ?>
	</ul>
</section>
<?php include 'footer.php'; 