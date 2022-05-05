<?php
require('intax.php');
$price = 1111;
$price_tax = intax($price);
echo $price_tax . "<br>";


echo intax(3877464);
