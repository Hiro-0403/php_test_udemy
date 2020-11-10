<?php
#ファーム作成
#入力、確認、完了 input.php, confirm.php,thanks.php
#今回は、input.php

$pageFlag = 0;
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<form method="POST" action="input.php">
名前
<input type="text" name="name"></input>
<br>
<input type="checkbox" name="sports[]" value="野球">野球
<input type="checkbox" name="sports[]" value="サッカー">サッカー
<input type="checkbox" name="sports[]" value="">野球
</body>
</html>