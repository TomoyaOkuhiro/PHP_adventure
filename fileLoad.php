<?php
$news = file_get_contents('data/news.txt');
echo $news;

// ファイルに追記
$news = $news . "<br>追加のニュース付き";
$success = file_put_contents('data/news.txt', $news);

// readfile('data/news.txt');(ファイルそのまま表示)
