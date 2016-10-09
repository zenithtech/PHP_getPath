<?php require_once('./getPath.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP_getPath</title>
	</head>
	<body>
		<?php echo $_SESSION['ABSHOME']; ?>
		<br />
		<a href="<?php echo $_SESSION['ABSHOME']; ?>test1">test1</a>
		<br />
		<a href="<?php echo $_SESSION['ABSHOME']; ?>test1/test2">test2</a>
	</body>
</html>
