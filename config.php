<?php
// Configurazione del database
$db_host = '34.154.150.50';
$db_name = 'image_catalog';
$db_user = 'appmod-phpapp-user';
$db_pass = 'lego123jawa';

echo "<h1>DEBUG CHECK</h1>";
echo "The Container is using Password: [" . $db_pass . "]";
die();

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

session_start();
?>
