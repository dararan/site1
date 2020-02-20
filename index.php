<?php
// ファイル読み込みたい
require_once("function.php");
require_once("Model/Threads.php");
// 一覧をゲットしたい
// ゲットしたら表示される？表示したい。
// インスタンス化するためのやつ。threadって箱にThreadsを入れる
$thread = new Threads();
// アロー演算子これは、「の」と一緒の意味。（）のみの時は関数。
$threads = $thread->getAll();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>site1</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>
    <header_left>
        <div class="top">なんでも掲示板</div>
        <a href="">スレッド新規作成</a>
    </header_left>
    <header_raight>
      <ul class="login">
          <li><a href="">ログイン</a></li>
          <li><a  href=""  class="icon"><div class="icon"></a></li>
      </ul>
    </header_raight>
  </header>

  <main>
    <h4>スレッド一覧</h4>

      <div class="threads_box">
        <?php foreach ($threads as $thread) : ?>
          <div class="thread">
              <div class="user">
                <a href  class="title"><?=h($thread["title"]);?></a><br><br>
                <p class="comment"><?= h($thread["comments"]);?></p>
              </div>
          </div> 
        <?php endforeach;?> 
     </div>

    <div class="btn">
      <a href=""  class="button">TOPへ戻る</a>
    </div>
  </main>
  
</body>
</html>