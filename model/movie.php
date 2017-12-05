<?php
function get_info()
{       
        $id = $_GET['id'];

        $info = array();
 		$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
        $req = $db->query("SELECT * FROM film WHERE id = $id");
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

