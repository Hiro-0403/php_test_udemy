<!-- 指定文字列で分割 -->

<?php
$str_2 = "指定文字列で、分割します";


echo "<pre>";
var_dump(explode("、", $str_2));
echo "</pre>";


#implode

#正規表現
// ・文字かどうか
// ・数字かどうか
// ・郵便番号か
// ・メールアドレスか

$str_3 = "特定の文字列が含まれるか確認する";
echo preg_match("/文字列/",$str_3);

#指定文字列から文字列を取得する

echo substr("アイウエオ", 3);

echo mb_substr("あいうえお", 3);