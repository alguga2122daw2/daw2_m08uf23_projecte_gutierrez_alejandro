<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

ini_set('display_errors', 0);
$opcions = [
    'host' => 'zend-alguga.fjeclot.net',
    'username' => "cn=admin,dc=fjeclot,dc=net",
    'password' => 'fjeclot',
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net',
];
$ldap = new Ldap($opcions);
$dn='cn='.$_COOKIE['ldap_user'].',dc=fjeclot,dc=net';
$password=$_COOKIE['ldap_password'];
try{
    $ldap->bind($dn,$password);
} catch (Exception $e){
    echo "<b>you're not logged in</b><br>";
    echo "<a href='index.php'>return to login page</a>";
    die(); 
}
?>