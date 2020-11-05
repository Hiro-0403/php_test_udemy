<?php

$height = 100;

// if($height >= 91){
//   echo "身長は" . $height . "cmになります";
// }

// if ($height <= 90) {
//   echo "身長は" . $height . "cm以下です";
// }

if ($height != 90) {//型が同じか
  echo "身長は90cmではありません";
}//90cm以外だめ


// データが入っているかどうか
// isset empty is_null

$test = "1";

if(!empty($test)){
  echo "変数は空です";
}
//!emptyは空という意味
//!をかくとelseを書かなくて良い

//AND=&&,OR=||

$signal_1 = "red";
$signal_2 = "blue";

if($signal_1 === "red" || $signal_2 === "blue"){
  echo "正解です";
}

// 三項演算子
// if else
// 条件　？　真 : 偽

$math = 81;
$comment = $math > 80 ? "good" : "not good";
echo $comment;