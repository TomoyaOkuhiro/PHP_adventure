select item_id, sum(count) from carts group by item_id
*(count)はカラム名*


select item_id, sum(count) from my_items, carts 
where my_items.id = carts.item_id group by item_id;
