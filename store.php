<?php

// ファイルの読み込み
require_once('Model/Threads.php');

// データの受け取り
$title = $_POST['title'];
$contents = $_POST['comment'];

// DBへのデータ保存
$task = new Threads();
$task->create([$title, $contents]);

// リダイレクト
header('location:index.php');
exit;