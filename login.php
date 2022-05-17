<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

ini_set('display_errors', 0);
if ($_POST['user'] && $_POST['password']){
    $opcions = [
        'host' => 'zend-alguga.fjeclot.net',
        'username' => "cn=admin,dc=fjeclot,dc=net",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    $ldap = new Ldap($opcions);
    $dn='cn='.$_POST['user'].',dc=fjeclot,dc=net';
    $password=$_POST['password'];
    setcookie("ldap_user", $_POST['user'], time()+3600, "/", "", 0);
    setcookie("ldap_password", $_POST['password'], time()+3600, "/", "", 0);
    try{
        $ldap->bind($dn,$password);
        header("location: menu.php");
    } catch (Exception $e){
        echo "<b>the username or password is incorrect</b><br>";
    }
}
?>
<html>
	<head>
		<title>Zend Server</title>
	</head>
	<body>
		<a href="index.php">return to index</a>
	</body>
</html>