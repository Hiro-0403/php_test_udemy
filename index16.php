<?php
#ファーム作成
#入力、確認、完了 input.php, confirm.php,thanks.php
#今回は、input.php

$pageFlag = 0;

if(!empty($_POST["btn_confirm"])){
$pageFlag =1;
}

if(!empty($_POST["btn_submit"])){
  $pageFlag =2;
}
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>


<?php if($pageFlag === 0) : ?>


<form method="POST" action="input.php">
名前
<input type="text" name="your_name"></input>
<br>
メールアドレス
<input type="email" name="email"></input>
<input type="submit" name="btn_confirm" value="確認する">
</form>

<?php endif; ?>

<?php if($pageFlag === 1) : ?>

<form method="POST" action="input.php">
名前
<?php echo $_POST["your_name"] ; ?>
<br>
メールアドレス
<?php echo $_POST["email"] ; ?>
<input type="submit" name="btn_confirm" value="送信する">
<input type="hidden" name="your_name" value=<?php echo $_POST["your_name"] ; ?>>
<input type="hidden" name="email" value=<?php echo $_POST["email"] ; ?>>
</form>

<?php endif; ?>

<?php if($pageFlag === 2) : ?>
完了
<?php endif; ?>


</body>
</html>