<?php
include(dirname(__FILE__).'/../header.php');
include(dirname(__FILE__).'/../model/movie.php');
sleep(1);
$info = get_info();
$character = get_chara();
include(dirname(__FILE__).'/../view/movie.php');
include(dirname(__FILE__).'/../footer.php');