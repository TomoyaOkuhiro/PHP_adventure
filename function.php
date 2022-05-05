<!-- // $price = 155;
  //$price_tax = ceil($price * 1.1);
  //echo $price_tax; -->

<?php
function intax($value) {
  return ceil($value * 1.1);
}

$price = 128000;
$price_tax = intax($price);
echo $price_tax;
