<?php


function validation($request){ #$_POST連想配列
  $errors = [];

  #氏名
  if(empty($request["your_name"]) || 20 < mb_strlen($data["your_name"])){
    $errors[] = "氏名は20文字以内で入力してください";
  }
  #お問い合わせ
  if(empty($request["contact"]) || 200 < mb_strlen($data["contact"])){
    $errors[] = "お問い合わせは200文字以内で入力してください";
  }
  #注意事項
  if($request["caution"] !== "1") {
    $errors[] = "注意事項をご確認ください" ;
  }
  #性別
  if(!isset($request["gender"])) {
    $errors[] = "性別は必ず入力してください" ;
  }
  #年齢
  if (empty($request["age"]) || 6 < $data["age"]) {
    $errors[] = "年齢は必ず入力してください" ;
  }
  #メールアドレス
  if(empty($request["email"]) || !filter_var($request["email"], FILTER_VALIDATE_EMAIL)){
    $errors[] = "メールアドバイスは正しく入力してください" ;
  }
  #url
  if(!empty($request["url"])){
    if(!filter_var($request["url"], FILTER_VALIDATE_URL)){
      $errors[] = "ホームページは正しい形式で入力してください" ;
    }
  }


  return $errors;
}