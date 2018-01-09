<?php 
ini_set('display_errors', 'On');
include 'controller.php';
include 'header.php'; 
?>
<section class="container" style="padding:50px 0;">
	<h4>Liste de films</h4>
	<ul>
	<?php getAllMovies(); ?>
  	</ul>
	<h4>Liste de réalisateurs</h4>
	<ul>
	<?php getAllDirectors(); ?>
  	</ul>
	<h4>Liste d'acteurs</h4>
	<ul>
	<?php getAllActors(); ?>
	</ul>
</section>
<?php include 'footer.php'; 