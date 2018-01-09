<?php
function get_info()
{       
        $id = $_GET['id'];

        $info = array();
 		$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
        $req = $db->query("SELECT * FROM film WHERE film.id = $id");
        if ($req->rowCount() > 0){
        	while ($data=$req->fetch(PDO::FETCH_ASSOC))
        	{
                $info[] = $data;
        	}
        	return $info;
        } else{
        	echo 'page vide';
        	$info = null;
        }
}

function get_chara()
{
        $id = $_GET['id'];

        $info = array();
                $db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
        $req = $db->query("SELECT * FROM film_has_personne,personne,photo,personne_has_photo WHERE film_has_personne.id_film = $id AND personne.id = film_has_personne.id_personne AND photo.id = personne_has_photo.id_photo AND personne_has_photo.id_personne = personne.id");
        if ($req->rowCount() > 0){
                while ($data=$req->fetch(PDO::FETCH_ASSOC))
                {
                $info[] = $data;
                }
                return $info;
        } else{
                echo 'page vide';
                $info = null;
        }
}
