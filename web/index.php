<?php

  // 読み込みに失敗したら止めて欲しい
  require('../app/functions.php');

  // 読み込みに失敗しても処理は止まらない
  include('../app/_parts/_header.php');

?>

<form action="result.php" method="get">
  <select name="colors[]" multiple>
    <option value="orange">Orange</option>
    <option value="pink">Pink</option>
    <option value="gold">Gold</option>
  </select>
  <button>Send</button>
</form>

<?php
  include('../app/_parts/_footer.php');