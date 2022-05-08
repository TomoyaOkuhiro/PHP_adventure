table1 ========= table2

SELECT * FROM table1,table2

, を使ってテーブルを複数記述する場合は WHERE が必要

select * from makers, my_items where makers.id = my_items.maker_id;

>shortcut

select * from makers m, my_items i where m.id = i_id;

s をつけるかつけないか注意

