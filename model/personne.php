<?php
function get_info()
{
        $id = $_GET['id'];
        $info = array();

 		$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
        $req = $db->query("SELECT * FROM personne,photo,personne_has_photo WHERE personne.id = $id AND personne.id = id_personne AND photo.id = id_photo");
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
