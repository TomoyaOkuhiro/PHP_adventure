update my_items set price=180 where id=1;

update my_items set name="さがとよのか",price=180 where id=1;

where id=1 idが1になっているレコードの変更という意味

エラーになる。

nameをitem_nameにするとOK
update my_items set set_name="さがとよのか", price=180 where id=1;
