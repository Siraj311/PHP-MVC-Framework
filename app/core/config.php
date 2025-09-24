<?php

if($_SERVER['SERVER_NAME'] == 'localhost') {

  // Database Configuration
  define('DBHOST', 'localhost');
  define('DBNAME', 'mvc_db');
  define('DBUSER', 'root');
  define('DBPASS', 'Siraj1234!');
  define('DBDRIVER', '');
  
  define('ROOT', 'http://localhost/PHP-MVC/public');

}else {

  // Database Configuration
  define('DBHOST', '');
  define('DBNAME', '');
  define('DBUSER', '');
  define('DBPASS', '');
  define('DBDRIVER', '');

  define('ROOT', 'https://www.yourwebsite.com');

}
