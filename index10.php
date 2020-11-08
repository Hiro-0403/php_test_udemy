<?php
#文字列の長さを表す関数


#マルチバイト
#日本語（SJIS,UTF-8(国際基準)は1文字が３〜６バイトなので、15が表示された
$text = "アイウエオ";

#echo strlen($text);
echo  mb_strlen($text);


#文字列の置換

$str = "文字列を変更します";
echo str_replace("変更","henkou",$str);
?>

