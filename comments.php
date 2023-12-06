<?php

include 'db_connect.php'; // Chứa thông tin kết nối đến cơ sở dữ liệu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $commentText = $_POST['comment'];

    try {
        // Chuẩn bị câu lệnh SQL để chèn dữ liệu vào bảng
        $sql = "INSERT INTO comment (comment, sender) VALUES (:commentText, :name)";
        
        // Chuẩn bị và thực thi câu lệnh SQL
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':commentText', $commentText, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        
        if ($stmt) {
            $response = array('error' => false, 'message' => 'Comment added successfully');
            echo json_encode($response);
        } else {
            $response = array('error' => true, 'message' => 'Failed to add comment');
            echo json_encode($response);
        }
    } catch(PDOException $e) {
        $response = array('error' => true, 'message' => 'Error: ' . $e->getMessage());
        echo json_encode($response);
    }
}

?>
