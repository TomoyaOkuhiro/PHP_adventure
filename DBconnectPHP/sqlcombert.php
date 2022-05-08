<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INSERT</title>
</head>

<body>
  <!-- prepare .. values(?) >>フォーム等からクエリを使って値をやりとりすると危険なので -->
  <!-- bind_param >> value(?)は通常使えない。後からbindで指定する。 -->
  <!-- die() >> ()内の通りの場合、表示だけしてプログラムを終了する -->
  <!-- execute >> 上記の値を使い、実行する -->
  <?php
  $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
  $message = "フォームから入力されたメモです";
  $stmt = $db->prepare('insert into memos(memo) values(?)'); //val2, val3....
  if (!$stmt) :
    die($db->error);
  endif;
  $stmt->bind_param('s', $message); //sはstringのs..valueの数に応じて続けて記述する ex:ss, ex:si..
  $ret = $stmt->execute();

  if ($ret) :  //if($xx) データが存在するかどうか
    echo 'データ挿入が正常に完了しました';
  else :
    echo 'データが正常に完了されませんでした';
  endif;
  ?>
</body>

</html>