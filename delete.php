<html>
<head>
	<title>Delete <?php echo $_POST["uid"]?></title>
</head>
<body>
<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

ini_set('display_errors', 0);

$domini = 'dc=fjeclot,dc=net';
$dn = 'uid='.$_POST["uid"].',ou='.$_POST["ou"].','.$domini;

// Opcions de la connexió al servidor i base de dades LDAP
$opcions = [
    'host' => 'zend-alguga.fjeclot.net',
    'username' => 'cn=admin,dc=fjeclot,dc=net',
    'password' => 'fjeclot',
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net',
];

// Esborrant l'entrada

$ldap = new Ldap($opcions);
$ldap->bind();
try{
    $ldap->delete($dn);
    echo "<b>Entrada esborrada</b><br>";
} catch (Exception $e){
    echo "<b>Aquesta entrada no existeix</b><br>";
}
?>
<br/>
<a href="index.php">Tornar a l'index</a>
</body>
</html>