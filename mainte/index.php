<?php

require "db_connection.php";


#ユーザー入力なし query
// $spl = "select * from contacts where id = 3";#sql
// $stmt = $pdo->query($spl);#sql実行 ステートメント

// $result = $stmt->fetchall();

// echo"<pre>";
// var_dump($result);
// echo"</pre>";

#ユーザー入力あり prepare,bind,execute 悪意のあるユーザ delete * SQLインジェクション
$sql = "select * from contacts where id = :id";#名前付きプレースホルダー
$stmt = $pdo->prepare($sql);#プリペアードステートメント
$stmt->bindValue("id", 2, PDO::PARAM_INT);#紐付け
$stmt->execute();#実行


$result = $stmt->fetchall();

echo"<pre>";
var_dump($result);
echo"</pre>";

#トランザクションまとまって処理 beginTransaction,commit,rollback
#銀行残高を確認。Aさんが引き落とし=>Bさんに振り込み

$pdo->beginTransaction();

try {

#sql処理
$stmt = $pdo->prepare($sql);#プリペアードステートメント
$stmt->bindValue("id", 2, PDO::PARAM_INT);#紐付け
$stmt->execute();#実行

$pdo->commit();

} catch (PDOException $e) {

  $pdo->rollback();#更新キャンセル
}