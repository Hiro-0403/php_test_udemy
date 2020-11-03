<!-- 配列 -->
<?php
$array_1 =[1,2,3];

$array_2 = [
  ["赤", "蒼", "黄"],
  ["緑", "紫", "オレンジ"]
];
echo "<pre>";
var_dump($array_2);
echo "</pre>";

// echo $array_2[1][1];

$array_member = [
  "name" => "本田",
  "height" => 170,
  "hobby" => "サッカー"
];

echo $array_member["name"];

echo "<pre>";
var_dump($array_member);
echo "</pre>";
?>