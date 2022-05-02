<?php
$age = '２３';

$age = mb_convert_kana($age, 'n', 'UTF-8'); //カナを変換する n -> 全から半へ

if (is_numeric($age)) {
  echo $age . '歳です';
} else {
  echo '* 数字で入力してください';
};
