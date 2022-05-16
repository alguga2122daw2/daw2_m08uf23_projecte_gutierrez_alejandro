<html>
<head>
	<title>Projecte Zend Server</title>
</head>
<body>
	<h1>Index</h1>
	<h2>1. Read</h2>
	<form action="read.php" method="GET">
		<label for="uid">User ID</label>
		<input id="uid" name="uid" placeholder="usr1" value="usr1" />
		<br/>
		<label for="ou">Organizational unit</label>
		<input id="ou" name="ou" placeholder="usuaris" value="usuaris" />
		<br/>
		<input type="submit" value="Submit" />
	</form>
	<h2>2. Create</h2>
	<form action="create.php" method="POST">
		<input type="submit" value="Submit" />
	</form>
	<h2>3. Delete</h2>
	<form action="delete.php" method="POST">
		<input type="submit" value="Submit" />
	</form>
	<h2>4. Update</h2>
	<form action="update.php" method="POST">
		<input type="submit" value="Submit" />
	</form>
</body>
</html>
<?php
?>