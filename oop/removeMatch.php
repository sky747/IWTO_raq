<?php
// データベース接続情報
$servername = "localhost"; // データベースサーバーのホスト名
$username = "root"; // データベースユーザー名
$password = ""; // データベースパスワード
$dbname = "game_index"; // データベース名

// データベースに接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続エラーの確認
if ($conn->connect_error) {
    die("データベース接続エラー: " . $conn->connect_error);
}

//試合情報をデータベースに登録
$courtNum = $_POST['court-num'];
$status = $_POST['data-player-number'];

// プリペアドステートメントを作成
$sql = "DELETE FROM `game_index` WHERE `court_num` = ? AND `status` = ?";
$stmt = $conn->prepare($sql);
if(!$stmt) {
    echo "データベースエラー: " . $conn->error;
}

// パラメーターをバインド
$stmt->bind_param("ii", $courtNum, $status);

// SQLクエリを実行
if ($stmt->execute()) {
  $sql2 = "UPDATE game_index SET status = status - 1 WHERE status >= $status AND court_num = $courtNum";
  if(!$conn->query($sql2)) {
    echo "データベースエラー: " . $conn->error;
  }
  $stmt->close(); // ステートメントを閉じる
  $conn->close(); // データベース接続を閉じる
  sleep(0.85);
  header('Location: http://localhost:8000/raquty_oop.php');
  exit();
} else {
    echo "データ挿入エラー: " . $stmt->error;
}

?>