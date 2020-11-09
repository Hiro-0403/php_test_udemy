<?php
$globalVariable = "グローバル変数です";

function checkScope($str){
  $localVariable = "ローカル変数です";
  echo $str;
}

echo $globalVariable;
echo $localVariable;
#echoで呼び出しても表示されない
checkScope($globalVariable);
#checkScope()で関数を指定