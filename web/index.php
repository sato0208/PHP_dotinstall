<?php

  // 読み込みに失敗したら止めて欲しい
  require('../app/functions.php');

  // 読み込みに失敗しても処理は止まらない
  include('../app/_parts/_header.php');


?>

<form action="result.php" method="get">
  <label><input type="radio"" name="color" value="orange"> Orange</nput></label>
  <label><input type="radio" name="color" value="pink"> Pink</nput></label>
  <label><input type="radio" name="color" value="gold"> Gold</nput></label>
  <button>Send</button>
</form>

<?php
  include('../app/_parts/_footer.php');