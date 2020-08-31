<?php

  // 読み込みに失敗したら止めて欲しい
  require('../app/functions.php');

  // 読み込みに失敗しても処理は止まらない
  include('../app/_parts/_header.php');

?>

<form action="result.php" method="get">
  <textarea name="message"></textarea>
  <button>Send</button>
</form>

<?php
  include('../app/_parts/_footer.php');