<?php
$file = file_get_contents('feed.json');
$json = json_decode($file);

echo $json->items[2];
foreach ($json->items as $item) :
?>
  ・<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
