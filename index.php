<?php 
ini_set('display_errors', 'On');
include 'controller.php';
// function getBlock($file, $data = []){
// 	require $file;
// }
// if (!empty($_GET['page']) && is_file('controller/'.$_GET['page'].'.php'))
// {
//         include 'controller/'.$_GET['page'].'.php';
// }
// else
// {
//         include 'controller/home.php';
// }
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