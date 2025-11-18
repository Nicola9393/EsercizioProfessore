<?php
session_start();

// Distruggi tutte le variabili di sessione
$_SESSION = array();

// Distruggi la sessione
session_destroy();

// Redirect alla homepage
header('Location: index.php');
exit();
?>