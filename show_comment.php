<?php
$host = 'localhost';
$db = 'btth02_1';
$user = 'root';
$pass = '123';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "thanh cong";
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    echo $e->getMessage();
}
$sql1 = "SELECT * from comment";
$a = $pdo->prepare($sql1);
$a->execute();
$user = $a->fetchAll();


include_once("db_connect.php");
$commentQuery = "SELECT id, parent_id, comment, sender, date FROM comment WHERE parent_id = '0' ORDER BY id DESC";
$commentsResult = mysqli_query($conn, $commentQuery) or die("database error:" . mysqli_error($conn));
$commentHTML = '';
while ($comment = mysqli_fetch_assoc($commentsResult)) {
    $commentHTML .= '
		<div class="panel panel-primary">
		<div class="panel-heading">By <b>' . $comment["sender"] . '</b> on <i>' . $comment["date"] . '</i></div>
		<div class="panel-body">' . $comment["comment"] . '</div>
		<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="' . $comment["id"] . '">Reply</button></div>
		</div> ';
    $commentHTML .= getCommentReply($conn, $comment["id"]);
}
echo $commentHTML;

