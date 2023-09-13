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
$round = $_POST['round'];
$category = $_POST['category'];
$playerId = $_POST['player__name'];
$playerId2 = $_POST['player__name2'];
$status = $_POST['data-player-number'];

// プリペアドステートメントを作成
$sql = "INSERT INTO `game_index`(`court_num`, `round`, `category`, `draw_id_1`, `draw_id_2`, `status`) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if(!$stmt) {
    echo "データベースエラー: " . $conn->error;
}

// パラメーターをバインド
$stmt->bind_param("issiii", $courtNum, $round, $category, $playerId, $playerId2, $status);

// SQLクエリを実行
if ($stmt->execute()) {
  $stmt->close(); // ステートメントを閉じる
  $conn->close(); // データベース接続を閉じる
  sleep(0.85);
  header('Location: http://localhost:8000/raquty_oop.php');
  exit();
} else {
    echo "データ挿入エラー: " . $stmt->error;
} 

?>
