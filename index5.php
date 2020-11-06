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

$members_2 = [
  "本田" => [
    "height" => 170,
    "hobby" => "サッカー"
  ],
  "香川" => [
    "height" => 168,
    "hobby" => "サッカー"
  ]
];

echo "<br>";

//多段階の配列展開
foreach($members_2 as $member_1){
  foreach($member_1 as $member => $value){
    echo $member;
  }
}
?>