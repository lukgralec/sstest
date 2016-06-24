<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'm4t3m4tyk4',
	'database' => 'sstest',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
