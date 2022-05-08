<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB接続</title>
</head>

<body>
  <?php
  $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
  echo '接続が正常に完了しました。';
  $db->query('drop table if exists test');
  $success = $db->query('create table test(id INT)');
  if ($success) {
    echo 'テーブルを削除して、作成されました';
  } else {
    echo 'SQLが正常に動作しませんでした。';
  }

  ?>

  <!-- if exists 存在するなら -->

</body>

</html>