<?php
require 'Medoo.php';
use Medoo\Medoo;

$base_url = 'http://localhost/blog/';
$database = new Medoo([
		'database_type' => 'mysql',
		'database_name' => 'blog',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
	]);


?>