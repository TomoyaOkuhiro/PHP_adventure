*DISTINCT

select distinct

select distinct item_id from carts;

*BETWEEN

select * from my_items where price>100 and price<1000;

select * from my_items where id=1 or id=3;
|
v
*IN
指定したものだけを出力する

select * from my_items where id=1 in(1,3,5,7);

LIMIT
出力数を制限する。
select : from my_items limit 3;

AS
select sum(count) as sales_count from carts;

出力した際に、as 〜　をつけると名前がついてわかりやすい

