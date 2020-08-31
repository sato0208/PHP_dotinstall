<?php

  // 読み込みに失敗したら止めて欲しい
  require('../app/functions.php');

  // 読み込みに失敗しても処理は止まらない
  include('../app/_parts/_header.php');

?>

<p><?= h($message); ?></p>
<p><a href="index.php">Go back</a></p>

<?php
  include('../app/_parts/_footer.php');