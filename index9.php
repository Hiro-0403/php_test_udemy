<?php

#インプット引数なし
#アウトプット戻り値なし

function test() {
 //処理
 echo "テスト";
}
test();

#インプット引数あり
#アウトプット戻り値なし
$comment = "コメント2";

function getComment($string) {
  echo $string;
}
getComment($comment);

// $string(インプット)と$comment(変数)の名前は違ってOK

#インプット引数なし
#アウトプット戻り値あり

function getNumberOfComment() {
  return 5;
}

$commentNumber = getNumberOfComment();
echo $commentNumber;

#インプット引数２つ
#アウトプット戻り値あり

function sumPrice($int1, $int2) {
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(5,6);
echo $total;