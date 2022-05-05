<?php
session_start();
session_regenerate_id();
$_SESSION['message'] = 'セッション'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>session</title>
</head>

<body>
  <a href="page02.php">2page_go!</a>
</body>

</html>