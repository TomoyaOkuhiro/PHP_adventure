<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ詳細</title>
</head>

<body>
  <?php
  require('dbconnect.php');
  // $stmt = $db->prepare('select * from memos where id=?');
  // if (!$stmt) {
  //   die($db->error);
  // }
  // $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);
  // $page = ($page ?: 1);
  // $start = ($page - 1) * 5;
  // $stmt->bind_param('i', $start);
  // $result = $stmt->execute();

  // $stmt->bind_result($id, $memo, $created);
  // $stmt->fetch();
  ?>

  <div>
    <pre><?php echo htmlspecialchars($memo); ?></pre>
  </div>
  <p><a href="update.php?id=<?php echo $id; ?>">編集する</a>
    <a href="delete.php?id=<?php echo $id; ?>">削除する</a> |
    <a href="/memo">一覧へ</a>
  </p>
</body>

</html>