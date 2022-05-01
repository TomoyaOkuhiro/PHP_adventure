<?php
$success = file_put_contents(
  'data/news.txt',
  'ホームページをリニューアルしました。'
);

if ($success !== false) {
  echo '完了しました';
}
if ($success === false) {
  echo '送信失敗です';
}
