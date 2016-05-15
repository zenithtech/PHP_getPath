<?php require_once('../getPath.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP_getPath</title>
	</head>
	<body>
		<?php echo $_SESSION['pathname']; ?>
		<br />
		<a href="<?php echo $_SESSION['pathname']; ?>test2">test2</a>
		<br />
		<a href="..">home</a>
	</body>
</html>
