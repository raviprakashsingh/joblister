<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo SITE_TITLE; ?></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<nav>
			<div class="nav-header"><?php echo SITE_TITLE; ?></div>
			<ul>
				<li><a href="create.php">Create Listing</a></li>
				<li><a href="index.php" class="active">Home</a></li>
			</ul>
		</nav>
		<div class="clearfix"></div>
		<hr>
	</div>
	<div class="container"><?php displayMessage(); ?></div>
		