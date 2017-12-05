<?php
include(dirname(__FILE__).'/../header.php');
include(dirname(__FILE__).'/../model/movie.php');
$info = get_info();
include(dirname(__FILE__).'/../view/movie.php');
include(dirname(__FILE__).'/../footer.php');