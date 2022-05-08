<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INSERT</title>
</head>

<body>
  <?php
  $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
  $message = "フォームから連絡";
  $ret = $db->query('insert into memos(memo) values("PHPからのメモです")');
  if ($ret) :  //if($xx) データが存在するかどうか
    echo 'データ挿入が正常に完了しました';
  else :
    echo 'データが正常に完了されませんでした';
  endif;
  ?>
</body>

</html>