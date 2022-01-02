<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION["auth"]) || $_SESSION["auth"] !== true) {
    echo "<script>window.location='formLogin.php';alert('Você precisa estar logado!');</script>";
    exit;
}
