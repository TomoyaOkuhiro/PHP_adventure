3,000円のものから、100円引きした場合、<?php echo 100 / 3000 * 100; ?>%引きです。
<!-- ex: 3,000円のものから、100円引きした場合、3.3333333333333%引きです。となる -->

<br>

3,000円のものから、100円引きした場合、<?php echo floor(100 / 3000 * 100); ?>%引きです。
<!-- ex: 3,000円のものから、100円引きした場合、3%引きです。 -->

<br>

<?php echo ceil(3.33); ?><br>
<!--  ex: 4 -->

<?php echo round(2.4856758); ?><br>
<!-- ex: 2 -->

<?php echo round(2.4856758, 2); ?>
<!-- ex: 2.49 <小数第2位で切り上げる> -->