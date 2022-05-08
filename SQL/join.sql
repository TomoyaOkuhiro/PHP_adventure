集計に扱われない0, NULL のデータを呼び出す

select item_name, sum(count) from my_items 
left join carts on my_items.id = carts.item_id group by item_name;

SELECT と GROUP BY 部分のデータ（カラム、テーブル）は同じになる。

LEFT JOIN

RIGHT JOIN

INNER JOIN などがある