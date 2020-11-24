<?php

#DB接続 PDO
function insertContact($request){
require "db_connection.php";

$params = [
  "id" => null,
  "your_name" => $request["your_name"],
  "email" => $request["email"],
  "url" => $request["url"],
  "gender" => $request["gender"],
  "age" => $request["age"],
  "contact" => $request["contact"],
  "created_at" => null
];


$count = 0;
$columns = "";
$values = "";

foreach(array_keys($params) as $key){
  if($count++>0){
    $columns .= ",";
    $values .= ",";
  }
  $columns .= $key;
  $values .= ":".$key;
}
$sql = "insert into contacts (". $columns .")values(". $values .")";#名前付きプレースホルダー

// var_dump($sql);
// exit;

$stmt = $pdo->prepare($sql);#プリペアードステートメント
$stmt->execute($params);#実行

}