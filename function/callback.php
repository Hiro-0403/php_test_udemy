<?php
function combineSpace(string $firstName, string $lastName): string
{
  return $lastName . " " . $firstName;
}

$nameParam = ["名前", "苗字"];

#コールバック関数（引数に関数をいれる）
function useCombine(array $name, callable $func)
{
  $concatName = $func(...$name);
  print($func."関数での試合結果: " . $concatName . "<br>");
}

useCombine($nameParam, "combineSpace");