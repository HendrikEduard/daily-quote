<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Daily Quote</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
<?php
	$ret = $db->query($sql);
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ){ ?>
	<section class="outer">
		<h3>Daily Quote</h3> 
		<p class="date"><?= $date ?></p> 
		<div class="quote"><?= out($row['quote'])?></div>
		<div class="author"><?= out($row['author'])?></div>
	</section>
<?php  }
	$db->close();
?>
</body>
</html>