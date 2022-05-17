<?php
include 'check_auth.php';
?>
<html>
<head>
	<title>Read <?php echo $_GET["uid"]?></title>
</head>
<body>
<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
$domini = 'dc=fjeclot,dc=net';
$opcions = [
    'host' => 'zend-alguga.fjeclot.net',
    'username' => "cn=admin,$domini",
    'password' => 'fjeclot',
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net',
];
$ldap = new Ldap($opcions);
$ldap->bind();
$usuari=$ldap->getEntry('uid='.$_GET["uid"].',ou='.$_GET["ou"].','.$domini);
echo "<b><u>".$usuari["dn"]."</b></u><br>";
foreach ($usuari as $atribut => $dada) {
    if ($atribut != "dn") echo $atribut.": ".$dada[0].'<br>';
}
?>
<br/>
<a href="menu.php">return to menu</a>
</body>
</html>