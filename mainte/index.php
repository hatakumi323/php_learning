
<?php

require 'db_connection.php';

// // ユーザー入力なし
// $sql = 'select * from contacts where id = 4';
// $stmt = $pdo->query($sql);

// echo '<pre>';
// $result = $stmt->fetchAll();
// echo '</pre>';

// var_dump($result);

// ユーザー入力あり
$sql = 'select * from contacts where id = :id'; //名前付きプレイスホルダー
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 4, PDO::PARAM_INT); //紐付け
$stmt->execute(); //実行される

echo '<pre>';
$result = $stmt->fetchAll();
echo '</pre>';
var_dump($result);

// トランザクション

$pdo->beginTransaction();

try {
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue('id', 4, PDO::PARAM_INT); //紐付け
  $stmt->execute(); //実行される

  $pdo->commit();
} catch (PDOException $e) {
  $pdo->rollBack();
}
