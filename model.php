<?php

class Person
{
	function person_getBaseInfos(){
		$bdd = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
  		$person = $bdd->query('SELECT * FROM personne');
  		return $person;
	}
}

class Director extends Person
{	
	function getBaseInfos(){
		$bdd = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
  		$director_info = $bdd->query('SELECT * FROM directors');
  		return $director_info;
	}
}

class Actor extends Person
{
	function getBaseInfos(){
		$bdd = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
  		$actors_info = $bdd->query('SELECT * FROM actors');
  		return $actors_info;
	}
}

class Movie
{
	function getBaseInfos($name){
		$bdd = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
  		foreach($bdd->query("SELECT * FROM film WHERE titre = '$name'") as $row){
  			echo $row['titre'];
  		}
	}
}