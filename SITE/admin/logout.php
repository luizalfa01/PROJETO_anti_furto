<?php
	
	session_start();
	session_destroy();
	header("Location: /SITE/index.php");

?>