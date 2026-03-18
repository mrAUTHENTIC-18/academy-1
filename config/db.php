<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1️⃣ Load Composer autoloader (so phpdotenv can work)
require __DIR__ . '/../vendor/autoload.php';

// 2️⃣ Tell phpdotenv where your .env file is
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// 3️⃣ Read the variables
$host = $_ENV['DB_HOST'];        // Or getenv('DB_HOST') if you prefer
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

// 4️⃣ Connect to database
$conn = new mysqli($host, $user, $password, $dbname);

// 5️⃣ Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

