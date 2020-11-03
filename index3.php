<?php
// if（条件）{
//   条件が真なら実行
// }else{
//   条件が偽なら実行
// }

$height = 90;

// var_dump($height);

if($height === 91){
  echo "身長は" . $height . "cmです";
}else{
  echo "身長は" . $height . "cmではありません";
}

$signal = "blue";

if($signal === "red"){
  echo "STOP";
}else if($signal === "yellow"){
  echo "止まれ";
}else{
  echo "GO";
}
echo "<br>";
// ifの中にif
$spped = 89;

if($signal === "blue"){
  if($spped >= 80){//ネスト
    echo speed . over;
  }
}
// 出来るだけelseは使わない。読みにくくなる