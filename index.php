<?php 
require_once 'DB.php';
require_once 'functions.php';

	$db = new DB();
	
	$id = date('j');
	$date = date('l jS \of F Y');

	$sql =<<<EOF
		SELECT * from dailyquote where id = $id;
EOF;

require_once 'html.php';
