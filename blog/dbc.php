<?php

class Dbc
{

  //  関数一つに一つの機能のみを持たせる
  //  1.DB接続
  //  2.データを取得する.
  //  3.カテゴリー名を表示する.

  // 1.データベース接続
  // 引数なし
  // 返り値:接億結果を返す


  function dbConnect()
  {

    $dsn = 'mysql:host=localhost;dbname=blog_app;charset=utf8';
    $user = 'bloguser';
    $pass = 'blogpass';

    try {
      $dbh = new \PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ]);
    } catch (PDOException $e) {
      echo '接続失敗' . $e->getMessage();
      exit();
    };

    return $dbh;
  }

  //  2.データを取得する
  // 引数:なし
  // 返り値:取得したデータ
  function getAllBlog()
  {
    $dbh = $this->dbConnect();
    //  SQLの準備
    $sql = 'SELECT * FROM blog';
    // 2. SQLの実行
    $stmt = $dbh->query($sql);

    // 3. SQLの実行結果を受け取る
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    $dbh = null;
  }
  // 取得したデータを表示
  // $blogData = getAllblog();

  // 3.カテゴリー名を表示
  // 引数:int
  // 返り値:カテゴリの文字列

  function setCategoryName($category)
  {

    if ($category === '1') {
      return '日常';
    } elseif ($category === 2) {
      return 'programming';
    } else {
      return 'その他';
    }
  }


  // 引数:$id
  // 返り値:$result
  function getBlog($id)
  {
    if (empty($id)) {
      exit('idが不正です');
    }

    $dbh = $this->dbConnect();

    // SQL 準備(idには攻撃の危険を考え、id = intとはしない)
    $stmt = $dbh->prepare('SELECT * FROM blog where id = :id');
    $stmt->bindValue(':id', (int)$id, 'PDO::PARAM_INT');

    // SQL実行
    $stmt->execute();

    // 結果を取得
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
      exit('ブログがありません');
    }

    return $result;
  }
}

?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ブログ一覧</title>
</head>

<body>
  <table>
    <tr>
      <th>No.</th>
      <th>タイトル</th>
      <th>カテゴリ</th>
    </tr>
    <?php foreach ($blogData as $column) : ?>
      <tr>
        <td><? //php echo $column['id'] 
            ?></td>
        <td><? //php echo $column['title'] 
            ?></td>
        <td><? //php echo setCategoryName($column['category']) 
            ?></td>
        <td><a href="/detail.php?id=<?php echo $column['id'] ?>">詳細</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>