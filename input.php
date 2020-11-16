<?php

session_start();

require "validation.php";
header("X-FRAME-OPTIONS:DENY");

function h($str)
{
  return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
}
#ファーム作成
#入力、確認、完了 input.php,confirm.php,thanks.php
#今回は、input.php
if(!empty($_POST)){
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";
}

$pageFlag = 0;
$errors = validation($_POST);

if(!empty($_POST["btn_confirm"]) && empty($errors)){
  $pageFlag = 1;
}

if(!empty($_POST["btn_submit"])){
  $pageFlag = 2;
}
?>

<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>

<?php if($pageFlag === 0) : ?>
<?php
if(!isset($_SESSION["csrfToken"])){
  $csrfToken = bin2hex(random_bytes(32));
  $_SESSION["csrfToken"] = $csrfToken;
}
$token =$_SESSION["csrfToken"];
?>
<?php if(!empty($errors) && !empty($_POST["btn_confirm"])) :?>
<?php echo "<ul>" ;?>
<?php
  foreach($errors as $error){
    echo "<li>" . $error ."</li>" ;
  }
?>
<?php echo "</ul>" ; ?>
<?php endif ;?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
    <form method="POST" action="input.php">
    <div class="form-group">
      <label for="your_name">氏名</label>
      <input type="text"class="form-control" id="your_name" name="your_name" value="<?php if(!empty($_POST["your_name"])){echo $_POST["your_name"] ;} ?>" required>
    </div>
    </div>
  </div>
</div>
<br>
メールアドレス
<input type="email" name="email" value="<?php if(!empty($_POST["email"])){echo $_POST["email"] ;} ?>">
<br>
ホームページ
<input type="url" name="url" value="<?php if(!empty($_POST["url"])){echo $_POST["url"] ;} ?>">
<br>
性別
<input type="radio" name="gender" value="0">男性
<input type="radio" name="gender" value="1">女性
<br>
年齢
<select name="age">
<option value="">選択してください</option>
<option value="1">〜19歳</option>
<option value="2">20歳〜29歳</option>
<option value="3">30歳〜39歳</option>
<option value="4">40歳〜49歳</option>
<option value="5">50歳〜59歳</option>
<option value="6">60歳〜</option>
</select>
<br>
お問い合わせ内容
<textarea name="contact">
<?php if(!empty($_POST["contact"])){echo $_POST["contact"] ;} ?>
</textarea>
<br>
<input type="checkbox" name="caution" value="1">注意事項にチェックする
<br>
<input type="submit" name="btn_confirm" value="確認する">
<input type="hidden" name="csrf" value="<?php echo $token?>">

</form>
<?php endif; ?>

<?php if($pageFlag === 1) : ?>
<?php if($_POST["csrf"] === $_SESSION["csrfToken"]) : ?>
<form method="POST" action="input.php">
名前
<?php echo h($_POST["your_name"]) ; ?>
<br>
メールアドレス
<?php echo h($_POST["email"]) ; ?>
<br>
<input type="submit" name="back" value="戻る">
<input type="submit" name="btn_submit" value="送信する">
<input type="hidden" name="email" value="<?php echo h($_POST["email"]) ; ?>">
<input type="hidden" name="your_name" value="<?php echo h($_POST["your_name"]) ; ?>">
<input type="hidden" name="csrf" value="<?php echo h($_POST["csrf"]) ; ?>">
</form>

<?php endif; ?>
<?php endif; ?>

<?php if($pageFlag === 2) : ?>
<?php if($_POST["csrf"] === $_SESSION["csrfToken"]) : ?>
送信が完了しました。

<?php unset($_SESSION["csrfToken"]); ?>
<?php endif; ?>
<?php endif; ?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
