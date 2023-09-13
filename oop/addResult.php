<?php
// データベース接続情報
$servername = "localhost"; // データベースサーバーのホスト名
$username = "root"; // データベースユーザー名
$password = ""; // データベースパスワード
$dbname1 = "game_index"; // データベース名
$dbname2 = "score_index"; // データベース名

// データベースに接続
$conn1 = new mysqli($servername, $username, $password, $dbname1);
$conn2 = new mysqli($servername, $username, $password, $dbname2);

// 接続エラーの確認
if ($conn1->connect_error) {
    die("データベース接続エラー: " . $conn1->connect_error);
}
if ($conn2->connect_error) {
    die("データベース接続エラー: " . $conn2->connect_error);
}

//試合結果をデータベースに登録
$resultScore1 = $_POST['result__score1'];
$resultScore2 = $_POST['result__score2'];
$tieBreak = $_POST['tiebreak'];
$courtNum = $_POST['court-num'];
$status = $_POST['data-player-number'];

// プリペアドステートメントを作成
$sql1 = "SELECT * FROM game_index WHERE court_num = ? AND status = ?";
$stmt1 = $conn1->prepare($sql1);
if(!$stmt1) {
    echo "データベースエラー: " . $conn1->error;
}

// パラメーターをバインド
$stmt1->bind_param("ii", $courtNum, $status);

// SQLクエリを実行
$stmt1->execute();

// 結果を取得
$result = $stmt1->get_result();
if ($result === false) {
  echo "結果の取得エラー: " . $stmt1->error;
} else {
  // 結果を出力
  while ($row = $result->fetch_assoc()) {
    $gameId = $row['game_id'];
    if($resultScore1 > $resultScore2) {
      $winnerId = $row['draw_id_1'];
    } else {
      $winnerId = $row['draw_id_2'];
    }
  }
}

// プリペアドステートメントを作成
$sql2 = "INSERT INTO `score_index`(`game_id`, `score1`, `score2`, `tiebreak`, `winner_id`) VALUES (?, ?, ?, ?, ?)";
$stmt2 = $conn2->prepare($sql2);
if(!$stmt2) {
    echo "データベースエラー: " . $conn2->error;
}

// パラメーターをバインド
$stmt2->bind_param("iiiii", $gameId, $resultScore1, $resultScore2, $tieBreak, $winnerId);

// SQLクエリを実行
if ($stmt2->execute()) {
  $sql3 = "UPDATE game_index SET status = status - 1 WHERE status >= $status AND court_num = $courtNum";
  $sql4 = "DELETE FROM game_index WHERE status = 0";
  if ($conn1->query($sql3) === TRUE) {
      echo "statusの値を更新しました。";
  } else {
      echo "データ更新エラー: " . $conn1->error;
  }
  if ($conn1->query($sql4) === TRUE) {
    echo "statusが0の行を削除しました。";
  } else {
      echo "データ削除エラー: " . $conn1->error;
  }
  $stmt2->close(); // ステートメントを閉じる
  $stmt1->close(); // ステートメントを閉じる
  $conn2->close(); // データベース接続を閉じる
  $conn1->close(); // データベース接続を閉じる
  sleep(0.85);
  header('Location: http://localhost:8000/raquty_oop.php');
  exit();
} else {
    echo "データ挿入エラー: " . $stmt2->error;
}