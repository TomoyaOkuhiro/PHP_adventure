<?php
session_start();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>page 02</title>
</head>

<body>
  変数の値: <?php echo $value ?>
  SESSIONの値: <?php echo $_SESSION['message']; ?>
</body>

</html>