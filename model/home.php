<?php
function get_info()
{
        $info = array();

 		$db = new PDO('mysql:host=localhost;dbname=iutweb;charset=utf8', 'root', 'root');
        $req = $db->query('SELECT * FROM film');
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
