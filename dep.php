<?php

$p = $_GET['p'];

$pe = md5($p);

if( $pe == 'be0817be680150598adf711ebd7d917c' ){
	exec('git pull');
}else{
	die('not authorised');
}

