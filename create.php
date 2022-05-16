<html>
<head>
	<title>Create <?php echo $_POST["uid"]?></title>
</head>
<body>
<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Attribute;
use Laminas\Ldap\Ldap;

ini_set('display_errors', 0);
$objcl=array('inetOrgPerson','organizationalPerson','person','posixAccount','shadowAccount','top');
#
#Afegint la nova entrada
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
$nova_entrada = [];
Attribute::setAttribute($nova_entrada, 'objectClass', $objcl);
Attribute::setAttribute($nova_entrada, 'uid', $_POST["uid"]);
Attribute::setAttribute($nova_entrada, 'uidNumber', $_POST["uidNumber"]);
Attribute::setAttribute($nova_entrada, 'gidNumber', $_POST["gidNumber"]);
Attribute::setAttribute($nova_entrada, 'homeDirectory', $_POST["homeDirectory"]);
Attribute::setAttribute($nova_entrada, 'loginShell', $_POST["loginShell"]);
Attribute::setAttribute($nova_entrada, 'cn', $_POST["cn"]);
Attribute::setAttribute($nova_entrada, 'sn', $_POST["sn"]);
Attribute::setAttribute($nova_entrada, 'givenName', $_POST["givenName"]);
Attribute::setAttribute($nova_entrada, 'mobile', $_POST["mobile"]);
Attribute::setAttribute($nova_entrada, 'postalAddress', $_POST["postalAddress"]);
Attribute::setAttribute($nova_entrada, 'telephoneNumber', $_POST["telephoneNumber"]);
Attribute::setAttribute($nova_entrada, 'title', $_POST["title"]);
Attribute::setAttribute($nova_entrada, 'description', $_POST["description"]);
$dn = 'uid='.$_POST["uid"].',ou='.$_POST["ou"].','.$domini;
if($ldap->add($dn, $nova_entrada)) echo "Usuari creat";
?>
<br/>
<a href="index.php">Tornar a l'index</a>
</body>
</html>