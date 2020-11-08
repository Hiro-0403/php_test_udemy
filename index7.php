<?php

#switch文よりif文の方が見やすい
#echoの後にbreakがないと処理が続けて実装されてしまう
//if文を使うのがおすすめ
$data = 6;
switch ($data) {
  case 1:
    echo "1です";
    break;
  case 2:
    echo "2です";
    break;
  case 3:
    echo "¥3です";
    break;
  default:
    echo "1〜3ではありません";
    break;
}

?>