<?php

  // 読み込みに失敗したら止めて欲しい
  require('../app/functions.php');

  // $color = filter_input(INPUT_GET, 'color');

  // $colorが空白の場合はNone selectedと表示させる
  $color = filter_input(INPUT_GET, 'color') ?? 'None selected';

  // 読み込みに失敗しても処理は止まらない
  include('../app/_parts/_header.php');

?>


<p><?= h($color); ?></p>
<p><a href="index.php">Go back</a></p>

<?php
  include('../app/_parts/_footer.php');