<?php
$value = '変数に保存した値';
setcookie(
  'message',
  'Cookieに保存した値です',
  time() + 60 * 60 * 24 + 14 //60秒*60分*24時間*14日間 2week!　cookie値を保持する
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cookieeeeeeee!!!</title>
</head>

<body>
  <a href="page02.php">2page_go!</a>
</body>

</html>