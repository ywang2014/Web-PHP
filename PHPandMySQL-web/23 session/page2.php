<?php
/*
	访问一个会话，并注销它
*/
session_start();

echo 'The content of $_SESSION[\'sess_var\'] is '.$_SESSION['sess_var'].'<br>';

unset($_SESSION['sess_var']);

?>

<a href = "page3.php"> Next page </a>