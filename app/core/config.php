<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'uca');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
	define('DBDRIVER', 'MySQLi');
	
	define('ROOT', 'http://localhost/uca/public/');

}else
{
	/** database config **/
	define('DBNAME', 'my_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.yourwebsite.com');

}

define('APP_NAME', "Proyecto Final UCA");
define('APP_DESC', "Projecto Final III Cuatrimestre 2022, Programacion III.");

/** true means show errors **/
define('DEBUG', true);
