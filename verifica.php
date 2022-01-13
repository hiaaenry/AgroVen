<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION["auth"]) || $_SESSION["auth"] !== true) {
    header("Location: index.php");
    exit;
}
