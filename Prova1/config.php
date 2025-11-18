<?php
// config.php - Configurazione Database

// Parametri connessione database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sft_prova1');

// Connessione al database
function getDBConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        die("Errore connessione: " . $conn->connect_error);
    }
    
    $conn->set_charset("utf8mb4");
    return $conn;
}

// Funzione per chiudere la connessione
function closeDBConnection($conn) {
    if ($conn) {
        $conn->close();
    }
}

// Avvia sessione se non già attiva
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>