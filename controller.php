<?php
// Nom de tous les films
function getAllMovies(){
  $db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
  $req = $db->query('SELECT id,titre FROM film ORDER BY titre');
      while ($data=$req->fetch(PDO::FETCH_ASSOC)){
        $id = $data['id'];
        echo '<li><a href="/controller/movie.php?id='.$data['id'].'">'.$data['titre'].'</a></li>';
      } 
}
// Nom de tous les réalisateurs
function getAllDirectors(){
  $db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
	$req = $db->query('SELECT id,prenom,nom FROM director ORDER BY prenom');
      while ($data=$req->fetch(PDO::FETCH_ASSOC)){
        echo '<li><a href="/controller/realisateur.php?id='.$data['id'].'">'.$data['prenom'].' '.$data['nom'].'</a></li>';
      }
}
// Nom de tous les acteurs
function getAllActors(){
  $db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
	$req = $db->query('SELECT prenom,nom FROM personne ORDER BY prenom');
      while ($data=$req->fetch(PDO::FETCH_ASSOC)){
        print '<li><a href="/controller/'.$data['nom'].'.php">'.$data['prenom'].' '.$data['nom'].'</a></li>';
      }
}