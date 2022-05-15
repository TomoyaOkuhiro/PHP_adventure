<?php
require('dbconnect.php');
$stmt = $db->prepare('select * from memos order by id desc limit 0, 5');
if (!$stmt) {
  die($db->error);
}
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);
$page = ($page ?: 1);
$start = ($page - 1) * 5;
$stmt->bind_param('i', $start);
$result = $stmt->execute();

$stmt->bind_result($id, $memo, $created);
$stmt->fetch();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ帳</title>
</head>

<body>
  <h1>メモ帳</h1>
  <p>⇨ <a href="input.html">新しいメモ</a></p>
  <?php if (!$result) : ?>
    <p>表示するメモはありません</p>
  <?php endif; ?>
  <?php $stmt->bind_result($id, $memo, $created); ?>
  <?php while ($stmt->fetch()) : ?>
    <hr>
    <div>
      <h2><a href="memo.php?id =<?php echo $id; ?>"><?php echo htmlspecialchars(mb_substr($memo, 0, 50)); ?></a></h2>
      <time><?php echo htmlspecialchars(($created)); ?></time>
    </div>
    <hr>
  <?php endwhile; ?>
  <p>
    <a href="?page=<?php echo $page - 1; ?>">ページ目へ</a>
    <a href="?page=<?php echo $page + 1; ?>">ページ目へ</a>
  </p>
</body>

</html>