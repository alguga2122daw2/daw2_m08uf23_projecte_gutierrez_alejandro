<html>
<head>
	<title>Projecte Zend Server</title>
</head>
<body>
	<h1>Index</h1>
	<?php
	$input_fields = [
	    // Field name => Field default value
	    "uid" => "usr3",
	    "ou" => "usuaris",
	    "uidNumber" => "7000",
	    "gidNumber" => "100",
	    "homeDirectory" => "/home/usr3",
	    "loginShell" => "/bin/bash",
	    "cn" => "nomis aletse",
	    "sn" => "nomis",
	    "givenName" => "aletse",
	    "mobile" => "666778899",
	    "postalAddress" => "C/Pi,27,1-1",
	    "telephoneNumber" => "934445566",
	    "title" => "analista",
	    "description" => "analista de sistemes"
	];
	?>
	<h2>1. Read</h2>
	<form action="read.php" method="GET">
		<label for="uid">uid</label>
		<input id="uid" name="uid" placeholder="usr1" value="usr1" required />
		<br/>
		<label for="ou">ou</label>
		<input id="ou" name="ou" placeholder="usuaris" value="usuaris" required />
		<br/>
		<input type="submit" value="Submit" />
	</form>
	<h2>2. Create</h2>
	<form action="create.php" method="POST">
		<?php
		foreach ($input_fields as $key => $value) {
		    echo "<label for='".$key."'>".$key."</label>\n";
		    echo "<input id='".$key."' name='".$key."' placeholder='".$value."' value='".$value."' required />\n";
		    echo "<br/>\n";
		}
		?>
		<input type="submit" value="Submit" />
	</form>
	<h2>3. Delete</h2>
	<form action="delete.php" method="POST">
		<?php
		foreach ($input_fields as $key => $value) {
		    echo "<label for='".$key."'>".$key."</label>\n";
		    echo "<input id='".$key."' name='".$key."' placeholder='".$value."' value='".$value."' required />\n";
		    echo "<br/>\n";
		    if ($key == "ou") break;
		}
		?>
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