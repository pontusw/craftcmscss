<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */


if($_SERVER['SERVER_NAME'] == "craft.apeln"){

	$server = 'localhost';
	$user = 'root';
	$pass = 'ckr30aik';
	$db = 'craft2';
	$prefix =  'craft2';

}

else{

	$server = 'localhost';
	$user = 'root';
	$pass = 'ckr30aik';
	$db = 'craft2';
	$prefix =  'craft2';

}
return array(

		// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
		'server' => $server,

		// The database username to connect with.
		'user' => $user,

		// The database password to connect with.
		'password' => $pass,

		// The name of the database to select.
		'database' => $db,

		// The prefix to use when naming tables. This can be no more than 5 characters.
		'tablePrefix' => $prefix,
);
?>