<?php
$admin[0]['username']="admin";
$admin[0]['password']="admin";




function authenticate()
{
header( 'WWW-Authenticate: Basic realm="Login contact form"' );
header( 'HTTP/1.0 401 Unauthorized' );
exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) { authenticate(); } else
{
for($i=0;$i<count($admin);$i++) { if($_SERVER['PHP_AUTH_USER']==$admin[$i]['username'] && $_SERVER['PHP_AUTH_PW']==$admin[$i]['password']){$auth=TRUE;}}
if($auth !=TRUE) {authenticate();}
}
?>
