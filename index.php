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
	
	function html_input($only_uid_ou){
	    global $input_fields;
	    
	    foreach ($input_fields as $key => $value) {
	        echo "<label for='$key'>$key</label>\n";
	        echo "<input id='$key' name='$key' placeholder='$value' value='$value' required />\n";
	        echo "<br/>\n";
	        if ($only_uid_ou == true && $key == "ou") break;
	    }
	}
	?>
	<h2>Create</h2>
	<form action="create.php" method="POST">
		<?php
		html_input(false);
		?>
		<input type="submit" value="Submit" />
	</form>
	<h2>Read</h2>
	<form action="read.php" method="GET">
		<?php
		html_input(true);
		?>
		<input type="submit" value="Submit" />
	</form>
	<h2>Update</h2>
	<form action="update.php" method="POST">
		<?php
		html_input(true);
		?>
		<br>
		<label for="field">field</label>
		<select name="field" id="field" required>
			<?php
			foreach ($input_fields as $key => $value) {
			    echo "<option value='$key'>$key</option>\n";
			    echo "<br/>\n";
			}
			?>
		</select>
		<label for="value">value</label>
		<input id="value" name="value" placeholder="test" value="test" />
		<br>
		<input type="submit" value="Submit" />
	</form>
	<h2>Delete</h2>
	<form action="delete.php" method="POST">
		<?php
		html_input(true);
		?>
		<input type="submit" value="Submit" />
	</form>
</body>
</html>
<?php
?>