<?php
// Kết nối đến cơ sở dữ liệu - Thay đổi thông tin kết nối phù hợp với cấu hình của bạn
global $pdo;
$host = 'localhost';
$db = 'BTTH02_1';
$user = 'root';
$pass = '123';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db";


// Thực hiện kết nối
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo"thành công";

} catch (\PDOException $e) {
    $response = array('error' => true, 'message' => 'Database error: ' . $e->getMessage());
    echo json_encode($response);
}
?>
