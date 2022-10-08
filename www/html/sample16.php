<?php
$news = file_get_contents('data/news.text');
echo $news;

$news = $news . "<br>追加のニュースです";
$success = file_put_contents('data/news.text', $news);
?>