<?php

session_start();

if(!isset($_SESSION["auth"]) || !isset($_SESSION["auth"]))
{

echo "<script>window.location='index.php';alert('Você precisa está logado!');</script>";
exit;
}

?>