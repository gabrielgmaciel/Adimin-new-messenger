<?php

	ini_set ('default_charset','UTF-8');
	
	$l1="admin";
	$pas="admin";
	
	$logon=$_GET["logon"];
	$senha=$_GET["senha"];

		if($logon == $l1 && $senha == $pas)
		{

			header ("location: users.php?logon=admin");

		}
		else
		{
			header ("location: index.php?login=0");
		}

?>