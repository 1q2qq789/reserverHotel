<?php
	// On appelle la session
session_start();

// On écrase le tableau de session,把当前会话中的所有session变量全部清空
$_SESSION = array();

// On détruit la session
session_destroy();

header('location: index.php');

 ?>

