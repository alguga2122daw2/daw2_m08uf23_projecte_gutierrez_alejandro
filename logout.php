<?php
setcookie("ldap_user", "", time()-(60*60*24*7),"/");
setcookie("ldap_password", "", time()-(60*60*24*7),"/");
header("location: index.php");