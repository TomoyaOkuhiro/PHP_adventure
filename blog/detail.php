<?php

$id = $_GET['id'];

function dbConnect()
{

  $dsn = 'mysql:host=localhost;dbname=blog_app;charset=utf8';
  $user = 'bloguser';
  $pass = 'blogpass';

  try {
    $dbh = new PDO($dsn, $user, $pass, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false, //必須op
    ]);
  } catch (PDOException $e) {
    echo '接続失敗' . $e->getMessage();
    exit();
  };

  return $dbh;
}

$dbh = dbConnect();

// SQL 準備(idには攻撃の危険を考え、id = intとはしない)
$stmt = $dbh->prepare('SELECT * FROM blog where id = :id');
$stmt->bindValue(':id', (int)$id, 'PDO::PARAM_INT');

// SQL実行
$stmt->execute();

// 結果を取得
$result = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($result);

