<?php
$time = date('G');
?>
<?php if ($time < 19) : ?>
  <p>* 営業時間外です</p>
<?php else : ?>
  <p>Welcome!</p>
<?php endif; ?>

<?php
$s = 'honyara';
if ($s !== '') :
  echo '$sには文字が入っています';
endif;
?>

<!-- ↓省略形 -->

<?php
$s = 'honyara';
if ($s) :
  echo '$sには文字が入っています';
endif;
?>

<?php
$x = random_int(0, 5);
if ($x) :
  echo '$xは0ではありません';
endif;
?>