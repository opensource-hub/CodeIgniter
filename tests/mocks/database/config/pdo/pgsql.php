<?php

return array(
	
	// Typical Database configuration
	'pdo/pgsql' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'postgres',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'pdo',
		'pdodriver' => 'pgsql',
	),

	// Database configuration with failover
	'pdo/pgsql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'pdo',
		'pdodriver' => 'pgsql',
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'postgres',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'pdo',
				'pdodriver' => 'pgsql',
			),
		),
	),
);