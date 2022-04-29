<?php
$today = new DateTime();
$today->setTimezone(new DateTimeZOne('Asia/Tokyo'));
echo '現在は、'. $today->format('G時 i分 s秒'). 'です';
