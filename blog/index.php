<?php
// 1.データを取得
require_once('dbc.php');

$dbc = new Dbc();
// 2.取得したデータを展開
$blogData = $this->getAllblog();
?>


<?php
// 1.フォームから値を渡す
// 2.フォームから値を受け取る
// 　3.バリデーションする
// 4.トランザクションを開始
// 5.データをDBに格納する

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ブログ一覧</title>
</head>

<body>
  <h2>ブログ一覧</h2>
  <p><a href="/form.html"></a></p>
  <table>
    <tr>
      <th>No.</th>
      <th>タイトル</th>
      <th>カテゴリ</th>
    </tr>
    <?php foreach ($blogData as $column) : ?>
      <tr>
        <td><?php echo $column['id'] ?></td>
        <td><?php echo $column['title'] ?></td>
        <td><?php echo $dbc->setCategoryName($column['category']) ?></td>
        <td><a href="/detail.php?id=<?php echo $column['id'] ?>">詳細</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>