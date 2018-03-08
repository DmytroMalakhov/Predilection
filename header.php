<?php require 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Predilection.bl</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div id="header-wrapper">
		<div id="header">
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="index.php">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#" class="last">Contact</a></li>
				</ul>
			</div>
			<!-- end #menu -->
			<div id="search">
				<form method="get" action="">
					<fieldset>
						<input type="text" name="s" id="search-text" size="15" />
						<input type="submit" id="search-submit" value="Поиск" />
					</fieldset>
				</form>
			</div>
			<!-- end #search -->
		</div>
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->