<?php

//複数の値　foreach

// 連想配列
$members = [
  "name" => "本田",
  "height" => 180,
  "hobby" => "soccer"
];

// バリューのみ表示
foreach ($members as $member) {
  echo $member;
}

// キーとバリューをそれぞれ表示
foreach ($members as $key => $value) {
  echo $key . "は" . $value . "です";
}