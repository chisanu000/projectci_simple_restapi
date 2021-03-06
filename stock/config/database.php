<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',

	// MS SQL Server
	// 'hostname' => 'localhost',
	// 'username' => 'sa',
	// 'password' => 'Sa123456',
	// 'database' => 'mydb',
	// 'dbdriver' => 'sqlsrv',

	// MySQL Server
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'mydb',
	'dbdriver' => 'mysqli',


	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
