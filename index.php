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

// echo $array_member["name"];

echo "<pre>";
var_dump($array_member);
echo "</pre>";

$array_member_2 = [
  "本田" => [
    "height" => 180,
    "hobby" => "サッカー"
  ],
  "香川" => [
    "height" => 175,
    "hobby" => "野球"
  ]
];

// echo $array_member_2["香川"]["height"];

echo "<pre>";
var_dump($array_member_2);
echo "</pre>";

$array_member_3 = [
  "1組" => [
    "本田" => [
      "height" => 180,
      "hobby" => "サッカー"
    ],
    "長友" => [
      "height" => 167,
      "hobby" => "サッカー"
    ]
  ],
  "2組" => [
    "香川" => [
      "height" => 175,
      "hobby" => "野球"
    ],
    "富安" => [
      "height" => 189,
      "hobby" => "野球"
    ]
  ]
];

echo $array_member_3["1組"]["本田"]["height"];

echo "<pre>";
var_dump($array_member_3);
echo "</pre>";
?>