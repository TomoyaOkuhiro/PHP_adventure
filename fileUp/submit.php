<?php
$file = $_FILES['picture'];
$path = 'images/' . $file['name'];
$success = move_uploaded_file($file['tmp_name'], $path);

if ($success) {
  echo '成功しました';
} else {
  echo '失敗しました';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>