<?php

/* define('HOST', 'localhost'); */
define('USER', 'rayray');
define('PASS', '5668');
/* define('PORT', '3312'); */
define('DBNAME', 'agroven');
/* host=' . ';port=' . PORT.  HOST . '; */
$conectar = new PDO('mysql:dbname=' . DBNAME . ';', USER, PASS);