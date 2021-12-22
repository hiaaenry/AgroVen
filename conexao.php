<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('PORT', '3312');
define('DBNAME', 'agroven');

$conectar = new PDO('mysql:host=' . ';port=' . PORT.  HOST . ';dbname=' . DBNAME . ';', USER, PASS);