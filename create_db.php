<?php
$host = '127.0.0.1';
$port = '5432';
$user = 'postgres';
$passwordsToTry = ['root', 'postgres', ''];

$connected = false;
$pdo = null;

foreach ($passwordsToTry as $pass) {
    try {
        $pdo = new PDO("pgsql:host=$host;port=$port;dbname=postgres", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        echo "Connected with password: '$pass'\n";
        $connected = true;
        // Update .env file with the correct password
        $env = file_get_contents(__DIR__ . '/.env');
        $env = preg_replace('/DB_PASSWORD=.*/', 'DB_PASSWORD=' . $pass, $env);
        file_put_contents(__DIR__ . '/.env', $env);
        break;
    } catch (PDOException $e) {
        // Continue to try next password
    }
}

if (!$connected) {
    die("Could not connect to PostgreSQL. Please check credentials.\n");
}

try {
    $pdo->exec("CREATE DATABASE portfolio");
    echo "Database 'portfolio' created successfully.\n";
} catch (PDOException $e) {
    if (strpos($e->getMessage(), 'already exists') !== false) {
        echo "Database 'portfolio' already exists.\n";
    } else {
        echo "Error creating database: " . $e->getMessage() . "\n";
    }
}
